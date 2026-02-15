require_once 'classes/Order.php';

$order = new Order($name, $phone, $contact);


$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$contact = $_POST['contact'] ?? '';