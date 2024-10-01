<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="maincode">
    <h1>ИНФОРМАЦИЯ О ЖИВОТНЫХ</h1>
    <div class="about">
<?php

class Animal {
    protected $weight; 
    protected $age; 
    protected $color; 

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }
    
    
    public function getInfo() {
        return "Вес: {$this->weight} кг, Возраст: {$this->age} лет, Имя: {$this->color}";
    }
  
}


class Lion extends Animal {
    private $prideSize; 

    public function __construct($weight, $age, $color, $prideSize) {
        parent::__construct($weight, $age, $color);
        $this->prideSize = $prideSize;
    }

    public function roar() {
        return "Лев рычит! Размер прайда: {$this->prideSize}";
    }
}


class Rabbit extends Animal {
    private $earLength; 

    public function __construct($weight, $age, $color, $earLength) {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function hop() {
        return "Кролик прыгает! Длина ушей: {$this->earLength} см";
    }

}


class Wolf extends Animal {
    private $howl; 

    public function __construct($weight, $age, $color, $howl) {
        parent::__construct($weight, $age, $color);
        $this->howl = $howl;
    }

    public function howl() {
        return "Волк воет: {$this->howl}";
    }

}

$lion = new Lion(190, 5, 'Король Лев', 10);
$rabbit = new Rabbit(2, 2, 'Спрингтрап', 10);
$wolf = new Wolf(40, 4, 'Джейкоб', 'Уу-у-у');

?>

<div class="zhivotnie">
<div class="Lionn">
<?
echo "1.Информация о льве: " . $lion->getInfo() . "\n";
echo $lion->roar() . "\n\n";
?>
</div>

<div class="rabbit">
<?php
echo "2.Информация о кролике: " . $rabbit->getInfo() . "\n";
echo $rabbit->hop() . "\n\n";
?>
</div>

<div class = "wolff">
<?php
echo "3.Информация о волке: " . $wolf->getInfo() . "\n";
echo $wolf->howl() . "\n";
?>
</div>
</div>
</div>
</div>
</body>
</html>