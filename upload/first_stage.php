<?php
//  автозагрузчик библиотек RetailCRM
require_once __DIR__ . '/system/storage/vendor/autoload.php';

// импорт классов из библиотеки RetailCRM
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;

// клиент для работы с API RetailCRM
$client = SimpleClientFactory::createClient('https://sinevichleha.retailcrm.ru/', 'Dxg96xIK99qBQ6AQFTHzCmbjMTPtxWJC');

// подключение к бд opencart
$mysqli = new mysqli('localhost', 'admin', '123456', 'opencart');

// тест на подключение к бд
if ($mysqli->connect_error) {
    die('Ошибка подключения к бд (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

try {
    // получение истории изменений клиентов из RetailCRM
    $response = $client->customers->history();

    // проверяем есть ли изменения в истории клиентов
    if (!empty($response->history)) {
        // проходимся по каждому изменению в истории
        foreach ($response->history as $change) {
            if (isset($change->customer)) {
                // получаем данные клиента из RetailCRM
                $customer = $change->customer;

                // извлекаем данные клиента
                $id = $customer->id ?? null;
                $firstName = $customer->firstName ?? '';
                $lastName = $customer->lastName ?? '';
                $email = $customer->email ?? '';
                $phone = isset($customer->phones[0]) ? $customer->phones[0]->number : '';
                $address = isset($customer->address->text) ? $customer->address->text : '';

                // форматируем ФИО
                $fullName = trim("$firstName $lastName");

                // проверяем, есть ли у клиента идентификатор и хотя бы одно из обязательных полей
                if ($id && ($firstName || $lastName || $email || $phone || $address)) {
                    // подготавливаем запрос для проверки существования клиента в базе данных
                    $stmt = $mysqli->prepare("SELECT customer_id FROM oc_customer WHERE customer_id = ?");
                    $stmt->bind_param("i", $id); // Привязываем параметр $id к запросу
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // если клиент найден в базе данных, обновляем его данные
                    if ($result->num_rows > 0) {
                        $stmt = $mysqli->prepare("UPDATE oc_customer SET firstname = ?, lastname = ?, email = ?, telephone = ?, address = ? WHERE customer_id = ?");
                        $stmt->bind_param("sssssi", $firstName, $lastName, $email, $phone, $address, $id);
                        $stmt->execute();
                        echo "Обновлен клиент с ID $id.\n";
                    } else {
                        // если клиента нет в базе данных, добавляем его
                        $stmt = $mysqli->prepare("INSERT INTO oc_customer (customer_id, firstname, lastname, email, telephone, address, customer_group_id, store_id, language_id, date_added) VALUES (?, ?, ?, ?, ?, ?, 1, 0, 0, NOW())");
                        $stmt->bind_param("isssss", $id, $firstName, $lastName, $email, $phone, $address);
                        $stmt->execute();
                        echo "Добавлен клиент с ID $id.\n";
                    }
                } else {
                    // выводим упрощенный формат данных клиента
                    echo "Пропущен клиент с ID $id из-за отсутствия данных:\n";
                    echo "ФИО: $fullName\n";
                    echo "Email: $email\n";
                    echo "Телефон: $phone\n";
                    echo "Адрес: $address\n";
                    echo "----------------------\n";
                }
            }
        }
    } else {
        // если нет изменений в истории клиентов, выводим сообщение
        echo 'Изменений в истории клиентов не найдено.';
    }
} catch (ApiExceptionInterface | ClientExceptionInterface $exception) {
    // обрабатываем ошибки API и клиента
    echo 'Ошибка API: ' . $exception->getMessage();
} finally {
    // закрываем соединение с базой данных
    $mysqli->close();
}
?>
