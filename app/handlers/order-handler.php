<?php
session_start();

require_once __DIR__ . '/../classes/Order.php';


// Trait for formatting phone numbers
trait Formatter
{
    public function formatPhone(string $phone): string
    {
        $digits = explode('-', $phone);
        $phone_formatted = implode('', $digits);
        return $phone_formatted;
    }
}

// Handler for Contact Request Form
class FormHandler
{
    use Formatter;

    public function submit(array $post)
    {
        $request = new Request($post);
        $config = Config::getInstance();

        // $user_name = $request->get('user_name');
        // $phone = $request->get('phone');
        // $contact_method = $request->get('contact_method');

        // Розіменування (variable variables)
        $fields = ['user_name', 'phone', 'contact_method'];
        foreach ($fields as $field) {
            $$field = $request->get($field);
        }

        $cookieTime = $config->get('cookie_lifetime');
        $phone_formatted = $this->formatPhone($phone);

        $order = new Order($user_name, $phone_formatted, $contact_method);


        $_SESSION['last_order'] = $order;
        setcookie('last_user', $user_name, time() + $cookieTime, '/');


        echo "<h2>Отримали Вашу заявку, $user_name!</h2>";
        echo "<p>" . htmlspecialchars($order->getSummary()) . "</p>";
        echo "<p>" . Order::greeting() . "</p>";


        // Кнопка назад
        echo '<a href="/backlit-frame">⬅ Повернутися до сайту</a>';
        // echo '<button onclick="history.back()">⬅ Повернутися до сайту</button>';
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $handler = new FormHandler();
    $handler->submit($_POST);
}


// Вивід останнього замовлення з серверної сесії
if (isset($_SESSION['last_order'])) {
    echo '<h3>Останнє замовлення:</h3>';
    echo '<pre>';
    print_r($_SESSION['last_order']);
    echo '</pre>';
}
