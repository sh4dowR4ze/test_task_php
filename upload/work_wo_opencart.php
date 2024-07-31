<?php
// Подключаем автозагрузчик библиотек RetailCRM
require_once __DIR__ . '/system/storage/vendor/autoload.php';

// Импортируем необходимые классы из библиотеки RetailCRM
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;

// Создаем клиент для работы с API RetailCRM
$client = SimpleClientFactory::createClient('https://sinevichleha.retailcrm.ru/', 'Dxg96xIK99qBQ6AQFTHzCmbjMTPtxWJC');

// Подключаемся к базе данных OpenCart
$mysqli = new mysqli('localhost', 'admin', '123456', 'opencart');

// Проверяем успешность подключения к базе данных
if ($mysqli->connect_error) {
    die('Ошибка подключения к базе данных (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

try {
    // Получаем историю изменений заказов из RetailCRM
    $response = $client->orders->history();

    // Проверяем, есть ли изменения в истории заказов
    if (!empty($response->history)) {
        echo "Получены изменения заказов:\n";

        // Массив для хранения обновленных заказов
        $updatedOrders = [];

        // Проходимся по каждому изменению в истории заказов
        foreach ($response->history as $change) {
            if (isset($change->order)) {
                // Получаем данные заказа из RetailCRM
                $order = $change->order;

                // Извлекаем данные заказа
                $orderId = $order->id ?? null;
                $deliveryDate = $order->delivery->date ?? null;
                $trackingNumber = $order->tracking ?? null;

                // Форматируем дату доставки
                if ($deliveryDate) {
                    try {
                        if ($deliveryDate instanceof DateTime) {
                            $formattedDeliveryDate = $deliveryDate->format('Y-m-d H:i:s');
                        } else {
                            $formattedDeliveryDate = (new DateTime($deliveryDate))->format('Y-m-d H:i:s');
                        }
                    } catch (Exception $e) {
                        $formattedDeliveryDate = '0000-00-00 00:00:00'; // Значение по умолчанию в случае ошибки
                    }
                } else {
                    $formattedDeliveryDate = '0000-00-00 00:00:00'; // Значение по умолчанию, если даты нет
                }

                // Проверяем, есть ли у заказа идентификатор
                if ($orderId && !in_array($orderId, $updatedOrders)) {
                    $updatedOrders[] = $orderId;

                    // Если трек-номер отсутствует, вычисляем его
                    if (!$trackingNumber) {
                        $trackingNumber = $orderId * 1111;
                    }

                    // Подготавливаем запрос для проверки существования заказа в базе данных
                    $stmt = $mysqli->prepare("SELECT order_id FROM oc_order WHERE order_id = ?");
                    $stmt->bind_param("i", $orderId);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        // Если заказ найден в базе данных, обновляем его данные
                        $stmt = $mysqli->prepare("UPDATE oc_order SET delivery_date = ?, tracking_number = ?, comment = ? WHERE order_id = ?");
                        if ($stmt === false) {
                            die('Ошибка подготовки запроса: ' . $mysqli->error);
                        }
                        $stmt->bind_param("sssi", $formattedDeliveryDate, $trackingNumber, $trackingNumber, $orderId);
                        $success = $stmt->execute();

                        if ($success) {
                            echo "Обновлен заказ с ID $orderId.\n";
                        } else {
                            echo "Не удалось обновить заказ с ID $orderId. Ошибка: " . $stmt->error . "\n";
                        }
                    } else {
                        // Если заказа нет в базе данных, добавляем его
                        $stmt = $mysqli->prepare("INSERT INTO oc_order (order_id, delivery_date, tracking_number, comment, date_added) VALUES (?, ?, ?, ?, NOW())");
                        if ($stmt === false) {
                            die('Ошибка подготовки запроса: ' . $mysqli->error);
                        }
                        $stmt->bind_param("isss", $orderId, $formattedDeliveryDate, $trackingNumber, $trackingNumber);
                        $success = $stmt->execute();

                        if ($success) {
                            echo "Добавлен заказ с ID $orderId.\n";
                        } else {
                            echo "Не удалось добавить заказ с ID $orderId. Ошибка: " . $stmt->error . "\n";
                        }
                    }

                    $stmt->close();
                } else {
                    echo "Пропущен заказ с ID $orderId, так как он уже был обновлен или отсутствует идентификатор.\n";
                }
            } else {
                echo "Изменение не содержит информации о заказе.\n";
            }
        }
    } else {
        echo 'Изменений в истории заказов не найдено.';
    }
} catch (ApiExceptionInterface | ClientExceptionInterface $exception) {
    // Обрабатываем ошибки API и клиента
    echo 'Ошибка API: ' . $exception->getMessage();
} finally {
    // Закрываем соединение с базой данных
    $mysqli->close();
}
?>
