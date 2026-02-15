
class Order {
    public $name;
    public $phone;
    public $contactType;

    public function __construct($name, $phone, $contactType) {
        $this->name = $name;
        $this->phone = $phone;
        $this->contactType = $contactType;
    }

    public function getSummary() {
        return "Зв'язатися з клієнтом $this->name через $this->contactType, контакт - $this->phone";
    }
}
