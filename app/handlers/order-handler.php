<?php
session_start();

require_once __DIR__ . '/../classes/Order.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $user_name = $_POST['user_name'] ?? '';
    // $phone = $_POST['phone'] ?? '';
    // $contact_method = $_POST['contact_method'] ?? '';

    // $$ variable variables
    $fields = ['user_name', 'phone', 'contact_method'];
    foreach ($fields as $field) {
        $$field = $_POST[$field] ?? '';
    }


    // Форматування номера
    $digits = explode('-', $phone);
    $phone_formatted = implode('', $digits);


    $order = new Order($user_name, $phone_formatted, $contact_method);


    $_SESSION['last_order'] = $order;
    setcookie('last_user', $user_name, time() + 3600, '/'); // на 1 годину


    echo "<h2>Отримали Вашу заявку, $user_name!</h2>";
    echo "<p>" . htmlspecialchars($order->getSummary()) . "</p>";
    echo "<p>" . Order::greeting() . "</p>";


    // Кнопка назад
    echo '<a href="/backlit-frame">⬅ Повернутися до сайту</a>';
    // echo '<button onclick="history.back()">⬅ Повернутися до сайту</button>';
}



// Вивід останнього замовлення з серверної сесії
if (isset($_SESSION['last_order'])) {
    echo '<h3>Останнє замовлення:</h3>';
    echo '<pre>';
    print_r($_SESSION['last_order']);
    echo '</pre>';
}

// При echo - htmlspecialchars() !
// $user_name = htmlspecialchars($_POST['user_name'] ?? ''); 
// $phone = htmlspecialchars($_POST['phone'] ?? '');
// $contact_method = htmlspecialchars($_POST['contact_method'] ?? '');