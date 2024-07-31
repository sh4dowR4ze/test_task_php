<?php
require_once __DIR__ . '/system/storage/vendor/autoload.php';

use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;

// Подключение к retailCRM
$client = SimpleClientFactory::createClient('https://sinevichleha.retailcrm.ru/', 'Dxg96xIK99qBQ6AQFTHzCmbjMTPtxWJC');

try {
    // Получение истории изменений клиентов из retailCRM
    $response = $client->customers->history();

    if (!empty($response->history)) {
        $uniqueCustomers = [];

        foreach ($response->history as $change) {
            if (isset($change->customer)) {
                $customer = $change->customer;

                // Обновление данных клиента, если они существуют
                $id = $customer->id ?? 'N/A';
                $firstName = $customer->firstName ?? 'N/A';
                $lastName = $customer->lastName ?? 'N/A';
                $email = $customer->email ?? 'N/A';
                $phone = isset($customer->phones[0]) ? $customer->phones[0]->number : 'N/A';
                $address = isset($customer->address) ? $customer->address->text : 'N/A';

                // Проверка на наличие реальных данных, кроме ID
                if ($firstName !== 'N/A' || $lastName !== 'N/A' || $email !== 'N/A' || $phone !== 'N/A' || $address !== 'N/A') {
                    // Обновляем данные клиента в массиве уникальных клиентов
                    $uniqueCustomers[$id] = [
                        'id' => $id,
                        'firstName' => $firstName,
                        'lastName' => $lastName,
                        'email' => $email,
                        'phone' => $phone,
                        'address' => $address,
                    ];
                }
            }
        }

        // Вывод уникальных данных клиентов
        foreach ($uniqueCustomers as $customer) {
            echo "Customer ID: {$customer['id']}, First Name: {$customer['firstName']}, Last Name: {$customer['lastName']}, Email: {$customer['email']}, Phone: {$customer['phone']}, Address: {$customer['address']}\n";
        }
    } else {
        echo 'No changes found in customer history.';
    }
} catch (ApiExceptionInterface | ClientExceptionInterface $exception) {
    echo $exception;
}
?>
