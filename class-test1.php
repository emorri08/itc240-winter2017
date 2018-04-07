<?php
//class-test1.php

$myCar = new Car('Civic','green',40);

echo '<pre>';
var_dump($myCar);
echo '</pre>';

class Car
{
    public $model = '';
    public $color = '';
    public $mpg = 0;    
    
    
    public function Car($model,$color,$mpg)
    {
        $this->model = $model;
        $this->color = $color;
        $this->mpg = $mpg;
    }
    
    
    
}