<?php 

    namespace App;
    class Phone
    {
     public string $model;
     public string $name;
     public float $price;
     public string $color;
    
    public function _construct( string $model, string $name, float $price, string $color)
    {
        $this->model = $model;
        $this-> name = $name;
        $this->price = $price;
        $this->color = $color;
    }
    public function getName(){
        print_r("Phone model: ". $this->model . ";\n");
        print_r("Phone name: " . $this->name . ";\n");
        print_r("Price: ". $this->price . "$;\n");
        print_r("Color: " . $this->color.";");
    }
    public function setName($model, $name, $price, $color)
    {
        $this->model = $model;
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
    } 
}
