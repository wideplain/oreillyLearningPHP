<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/25
 * Time: 23:54
 */

require 'class.php';

class Ingredient {
    protected $name;
    protected $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }


}

class Submaterial extends Entree {
    public function __construct($name, $ingredients){
        parent::__construct($name, $ingredients);
        foreach ($this->ingredients as $ingredient) {
            if(! $ingredient instanceof Ingrient) {
                throw new Exception('Elements of $ingredients must be Ingredient objects');
            }
        }
    }

    public function getCost() {
        $cost = 0;
        foreach ($this->ingredients as $ingredient) {
            $cost += $ingredient->getCost();
        }
        return $cost;
    }


}