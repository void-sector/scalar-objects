<?php

error_reporting(-1);
ini_set('display_errors', true);

require('./vendor/autoload.php');


use Scalar\String;

$string = new String('We love Foo');

$string->replace('Foo', 'Bar');
$string->toUpper();

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
