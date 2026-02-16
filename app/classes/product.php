<?php

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

    private const SIZE_EXTRAS = [
        'A5' => 0,
        'A4' => 300,
        'A3' => 600
    ];
    const CUSTOM_PRICE = 350;

    public bool $customDesign = false;

    public function __construct(
        int $id,
        string $title,
        string $category,
        string $image,
        string $origin,
        string $benefit,
        string $description,
        float $basePrice,
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
        $this->image = $image;
        $this->origin = $origin;
        $this->benefit = $benefit;
        $this->description = $description;
        $this->basePrice = $basePrice;
    }

    public function getPrice(): float
    {
        $price = $this->basePrice + (self::SIZE_EXTRAS[$this->selectedSize] ?? 0);

        if ($this->customDesign) {
            $price += self::CUSTOM_PRICE;
        }

        return $price;
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