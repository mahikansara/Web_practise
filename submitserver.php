<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name))
    {
        echo "Name is empty";
    }
    else
    {
        echo $name;
    }
}
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    echo 'hell';
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name))
    {
        echo "Name is empty";
    } if($name == "Bhagyshree choudhry")
    {
        echo "Bhagyshree Naresh Choudhry";
    }
 else {
     echo $name;   
    }
}
?>
