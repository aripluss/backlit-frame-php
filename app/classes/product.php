<?php
require_once __DIR__ . '/Config.php';


class Product
{
    public int $id;
    public $title;
    private $basePrice;
    protected $category;
    public string $image;
    public string $origin;
    public string $benefit;
    public string $description;
    public string $selectedSize = 'A5';

    private array $sizeExtras;
    private float $customPrice;

    public bool $customDesign = false;

    public function __construct(
        int $id,
        string $title,
        string $category,
        string $image,
        string $origin,
        string $benefit,
        string $description,
        float $basePrice
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
        $this->image = $image;
        $this->origin = $origin;
        $this->benefit = $benefit;
        $this->description = $description;
        $this->basePrice = $basePrice;

        $config = Config::getInstance();
        $this->sizeExtras = $config->get('size_extras', []);
        $this->customPrice = $config->get('custom_price', 0);
    }

    public function getPrice(): float
    {
        $price = $this->basePrice + ($this->sizeExtras[$this->selectedSize] ?? 0);

        if ($this->customDesign) {
            $price += $this->customPrice;
        }

        return $price;
    }


    public function __get($name)
    {
        return $this->$name ?? null;
    }

    public function __toString(): string
    {
        return "{$this->title} ({$this->category}) - {$this->getPrice()} грн";
    }
}


// Зі знижкою:
class SpecialProduct extends Product
{
    private float $discount;

    public function __construct($id, $title, $category, $image, $origin, $benefit, $description, $basePrice, $discount)
    {
        parent::__construct($id, $title, $category, $image, $origin, $benefit, $description, $basePrice);
        $this->discount = $discount;
    }

    public function getDiscountedPrice(): float
    {
        return $this->getPrice() * (1 - $this->discount); // 0.2 = 20% знижки
    }
}