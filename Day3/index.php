<?php

/**
 * Methedology ===> 
 * PP ===> Procedural paradigm  ==> function (native code)
 * OOP ==> object origented programming paradigm (Class , Object)
 * --->way for writing code  casuse make code resuable(inheritance)
 * class --> blue print  ==> structure  (person , car ) 
 * object --> instace ==> copy of class 
 * 
 * this --> refrence refer on object
 * self --> refrence refer on class
 * class variables ====> const , static
 * 
 * ------------> class (properties , methods (function))
 * Access Modefires ==> 
 * Public ==> any class can use it (use inheritance)
 * Protected ==> can be inhertance 
 * Private  ==> only for class
 * -------> Acess (get data , Set data)
 * 
 * constructor ==> function has no return
 * -------> initial value
 *   --> prametarized  , Non parametarized
 * 
 * 
 * ================> princibles in oop
 * Encapsulation (كبسوله)=> save data (hidden data )
 * private ===> setter , getter 
 * 
 * Inheritance ==> parent -> child
 *============= Not Perimted In PHP ===============
 * ----> sigle inheritance  (parent -> child)
 * ----> multilevel inheritance (parent->child1->child2 )
 * ----> hyratchcial inheritance ==> parent -> child2
 *                                          -> child1
 * ============= Not Perimted In PHP ===============
 * ----> multible inheritance ===> 
 * ----> Hypried Inheritance
 * 
 * polymorphism (التعدد) ===> overriding ===>  permited in php 
 * function fun_name() ===> signature of function (fun , parametes)
 *                           --> body (return)
 *                   
 *                      ===> overloading ===> not permited in php
 *                          ---> signarure (parametes , datatype)
 * 
 * 
 * Abstraction ===> Abstract class ==> hidden implementation(code) of function
 * can not take object from it 
 * must be inherited to use it 
 * class extend on abstract class
 * 
 * Interface ==> implementation 
 * --- can not take attribute (can not take any variables)
 * ---> can extend another interface
 * ---> class can implement more than one interface
 * ---> all functions in interface is abstract methods ==> you must implement code of it 
 * 
 */

// class person
// {
//     public $name = "userName";
//     public $age;
//     public $address;
//     protected $phone;
//     static $count=0;
//     public const PI=3.14; // valiable constant (class)
//     function __construct($name = "userName", $age = "userAge", $address = "userAddress", $phone = "userPhone")
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//         $this->phone = $phone;
//         self::$count+=1;
//         // $this->name="userName";
//         // $this->age="userAge";
//         // $this->address="userAddress";
//         // $this->phone="userPhone";

//     }
//     function setPhone($phone)
//     {
//         // this --->  refrence on object
//         $this->phone = $phone;
//         // $p->phone=$phone
//     }

//     function getPhone()
//     {
//         return $this->phone;
//     }
//     function printData()
//     {

//            echo "PI : ",self::PI ,"<br>";
//         echo "Person Name : $this->name <br> Person Age: $this->age <br>
//     Person Address : $this->address <br>
//     ";
//     }
// }

// class Human extends Person{
//     public $email;
//     function __construct($email,$name = "humanName", $age = "humanAge", $address = "humanAddress", $phone = "humanPhone")
//     {
//         parent::__construct($name ,$age,$address,$phone);
//         $this->email=$email;
//         // $this->name=$name;
//         // $this->age=$age;
//         // $this->phone=$phone;
//         // $this->address=$address;

//     }
//   function print()
//   {
//           parent::printData();
//           echo "human email : $this->email";
//   }

//   function printData()
//   {
//     return "Human Name : $this->name <br> Human Age: $this->age <br>
//     Human Address : $this->address <br> human email : $this->email";

//   }

// }
// class child extends Human{
//     public $test;
//     function __construct($test,$name = "humanName", $age = "humanAge", $address = "humanAddress", $phone = "humanPhone")
//     {
//         parent::__construct($name ,$age,$address,$phone);
//         $this->test=$test;
//         // $this->name=$name;
//         // $this->age=$age;
//         // $this->phone=$phone;
//         // $this->address=$address;

//     }
//   function print()
//   {
//           parent::printData();
//           echo "human test : $this->test";
//   }

//   function printData()
//   {
//     return "Human Name : $this->name <br> Human Age: $this->age <br>
//     Human Address : $this->address <br> human email : $this->test";

//   }

// }
// class Woman extends Person{
//     public $hoppy;
//     function __construct($hoppy,$name = "womanName", $age = "womanAge", $address = "womanAddress", $phone = "womanPhone")
//     {
//         parent::__construct($name ,$age,$address,$phone);
//         $this->hoppy=$hoppy;
//         // $this->name=$name;
//         // $this->age=$age;
//         // $this->phone=$phone;
//         // $this->address=$address;

//     }
//   function print()
//   {
//           parent::printData();
//           echo "woman hoppy : $this->hoppy";
//   }

//   function printData()
//   {
//     return "woman Name : $this->name <br> woman Age: $this->age <br>
//     woman Address : $this->address <br> woman hoppy : $this->hoppy";

//   }

// }


// abstract class B
// {
//     protected $testB="abstract Class B";

//     abstract function print(): string; // function must return value string
//     abstract function sayHello();
//     function test()
//     {
//         echo $this->testB;
//     }
// }
// abstract class C extends B 
// {
//     protected $testC="abstract Class C";

 
//     // function test()
//     // {
//     //     echo $this->testC;
//     // }
// }


// class A extends C 
// {
//     function print(): string
//     {
//         return "test abstract class";
//     }
//     function SayHello()
//     {
//         echo "<h1> HEllo </h1>";
//     }
// }
// $a=new A();
// print_r($a->test());

// interface InterF{
//    function sayHi();  // abstract 
//    function testInterface():string;

// }
// interface InterF2 extends InterF{
//    function intF2();  // abstract 
//    function testInterface2():string;

// }

// /** handle  Multible inheritance */
// class D implements InterF ,InterF2{
//    function sayHi(){
//     echo "hi";
//    }
//     function testInterface():string{
//         return "test";
//     }
//     function intF2(){

//     }
//    function testInterface2():string {
//  return "test interface 2";
//     }
// }



// $p = new Person("iti", 30, "cairo", "010255975");
// // echo Person::PI;
// $p1 = new Person($name = "iti46", $address = "NaserCity");
// $p2 = new Person($name = "iti46", $address = "NaserCity");
// $p3 = new Person($name = "iti46", $address = "NaserCity");
// $p4 = new Person($name = "iti46", $address = "NaserCity");
// echo "count : ", Person::$count, "<br>";
// $p->printData();
// $h = new Human("human@gamil.com");
// $p->name="iti";
// $p->age=30;
// $p->address="cairo";
// $p->phone="12345";
// $p->setPhone("0102011458");
// echo "<br>";
// echo $p->getPhone();
// echo "<br>";
// $p1->printData();
// print_r($h->printData());



// ===================== Composition  (الاعتماديه)  ==> has a
class Engine{
public $gasType;
function __construct($gas)

{
     $this->gasType=$gas;
}
function engineStart()
{
    echo "Class Engine";
}
}
class Car {
public $model , $type ,$color, $engine;

function __construct($model , $type , $color,Engine $engine)
{
    $this->model=$model;
    $this->color=$color;
    $this->type=$type;
    $this->engine=$engine;
  
}

function start()
{
    echo $this->engine->gasType;

}
}

$e=new Engine("solar");
$c=new Car("mmj","marcedies","red",$e);
$c->start();
echo "<br>";
$c->engine->engineStart();


