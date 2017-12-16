<?php

class Product
{
    private $title;
    private $description;
    private $price;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if (preg_match("/^[a-z]+(\s[a-z]+)*$/i", $title)) {
            $this->title = $title;
        }
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        if (strlen($description) <= 255) {
            $this->description = $description;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        if (preg_match("/^[0-9]+(\.[0-9]+)?$/", $price)) {
            $this->price = $price;
        }
    }
}

$product = new Product();

$product->setTitle('iPhone X');
$product->setDescription('Description for iPhone X.');
$product->setPrice(19999.99);

echo $product->getTitle();
echo "<br>";
echo $product->getDescription();
echo "<br>";
echo $product->getPrice();