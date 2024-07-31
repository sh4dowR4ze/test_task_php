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
        foreach ($response->history as $change) {
            if (isset($change->customer)) {
                $customer = $change->customer;

                // Получение данных клиента, если они существуют
                $id = $customer->id ?? '';
                $firstName = $customer->firstName ?? '';
                $lastName = $customer->lastName ?? '';
                $email = $customer->email ?? '';
                $phone = isset($customer->phones[0]) ? $customer->phones[0]->number : '';

                // Вывод данных клиента для тестирования
                echo "Customer ID: $id, First Name: $firstName, Last Name: $lastName, Email: $email, Phone: $phone\n";
            }
        }
    } else {
        echo 'No changes found in customer history.';
    }
} catch (ApiExceptionInterface | ClientExceptionInterface $exception) {
    echo $exception;
}
?>
