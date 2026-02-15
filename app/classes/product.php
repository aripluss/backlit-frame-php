class Product {
public $title;
public $category;
public $image;

public function __construct($title, $category, $image) {
$this->title = $title;
$this->category = $category;
$this->image = $image;
}
}


$catalogItems = [
new Product("Стрибок віри", "Assassin's Creed", "./images/backlit-frame-lightbox-leap-of-faith.webp"),
new Product("Ерен та Мікаса", "Attack on Titan", "./images/backlit-frame-lightbox-eren-end-mikasa.webp")
];