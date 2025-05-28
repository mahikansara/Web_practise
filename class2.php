<?php

class vegetable
{
    
}

class fruit
{
    public $name;
    public $color;
    
    //methods
    function set_name($name)
    {
        $this->name=$name;
    }
    
    function get_name()
    {
        return $this->name;
    }
    
    function set_color($color)
    {
        $this->color=$color;
    }
    
    function get_color()
    {
        return $this->color;
    }
}

$apple=new fruit();
$ladyfinger=new vegetable();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: ".$apple->get_name();
echo '<br>';
echo "Color: ".$apple->get_color();
echo '<br>';
echo "Directly accessing through object <br>Name: ".$apple->name;
echo '<br>';
echo "Color: ".$apple->color;
echo '<br>';

$apple->name="Bhagyshree";
$apple->color="Rainbow";
echo "Directly accessing through object <br>Name: ".$apple->name;
echo '<br>';
echo "Color: ".$apple->color;
echo '<br><br>';

echo $apple instanceof fruit?"Class Found":"Class Not Found";
echo '<br>';
echo $apple instanceof vegetable?"Class Found":"Class Not Found";