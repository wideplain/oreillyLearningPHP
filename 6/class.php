<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/25
 * Time: 1:29
 */

class Entree {
    private $name;
    protected $ingredients = array();

    public function getname() {
        return $this->name;
    }

    public function __construct($name, $ingredients) {
        if(! is_array($ingredients)) {
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }

    public static function getSizes() {
        return array('small', 'medium', 'large');
    }
}

$soup = new Entree('Chiken Soup', array('chiken', 'water'));

$sandwich = new Entree('Chiken Sandwitch', array('chiken', 'bread'));

try {
    $drink = new Entree('Glass of Milk', 'milk');
    if($drink->hasIngredient('milk')) {
        print "Yummy!";
    }
} catch (Exception $e) {
    print "Couldn't create the drink: " . $e->getMessage();
}

foreach(['chicken','lemon','bread','water'] as $ing) {
    if ($soup->hasIngredient($ing)){
        print "Soup contains $ing.\n";
    }

    if($soup->hasIngredient($ing)) {
        print "Sandwich contains $ing.\n";
    }
}

$sizes = Entree::getSizes();

class ComboMeal extends Entree {

    public function __construct($name, $entrees) {
        parent::__construct($name, $entrees);
        foreach ($entrees as $entree) {
            throw new Exception('Elements of $entrees must be Entree objects');
        }
    }

    public function hasIngredient($ingredient) {
        foreach ($this->ingredients as $entree) {
            if($entree->hasIngredient($ingredient)) {
                return true;
            }
        }
        return false;
    }
}

$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));

foreach (['chicken','water','pickles'] as $ing) {
    if ($combo->hasIngredient($ing)) {
        print "Something in the combo contains $ing.\n";
    }
}