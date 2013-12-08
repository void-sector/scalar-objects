<?php

require('./vendor/autoload.php');


use Scalar\String;
use Scalar\Float;



$float1 = new Float(1.01111);
$float2 = new Float(33.0);

$float1->ceil();

echo $float1 . PHP_EOL;

echo $float1 < $float2 ? 'yep' : 'nop';


$string = new String('We love Foo');

$string->str_replace('Foo', 'Bar');
$string->strtoupper();


echo $string . PHP_EOL;

//class User
//{
//    /**
//     * Users Name
//     * @var String 
//     */
//    protected $name;
//
//    /**
//     * Users Age
//     * @var Integer 
//     */
//    protected $age;
//    
//    
//    public function __construct(String $name, Integer $age)
//    {
//        $this->setName($name);
//        $this->setAge($age);
//    }
//    
//    /**
//     * Set Name
//     * @param String $name
//     */
//    public function setName(String $name)
//    {
//        $this->name = $name;
//    }
//    
//    /**
//     * Get Name
//     * @return String
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//    
//    /**
//     * Set Age
//     * @param Integer $age
//     */
//    public function setAge(Integer $age)
//    {
//        $this->age = $age;
//    }
//    
//    /**
//     * Get Age
//     * @return Integer
//     */
//    public function getAge()
//    {
//        return $this->age;
//    }
//}
//
//
//
//$user = new User(
//    new String('Foo'),
//    new Integer(32)
//);
//
//
//
//echo $user->getName()->getValue();
//echo $user->getAge()->getValue();
//
//$user->getAge()->setValue(33);
//// OR
//$user->setAge(new Integer(54));
//
//echo $user->getAge()->getValue();
