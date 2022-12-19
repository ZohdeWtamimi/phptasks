<?php
// class Initalize {
//   // Properties
//   public $stmt;

//   // Methods
//   function set_name($stmt) {
//     return $this->stmt = $stmt;
//   }
// }

// $init = new Initalize();

// echo $init->set_name('MyClass class has initialized!');

// echo "<hr>";


// class Display{
//     // Properties
//     public $stmt;
    
//     function __construct($stmt) {
//         $this->stmt = $stmt;
//       }
    
//     // Methods
//     function get_name() {
//       return "Hello All, I am " . $this->stmt;
//     }
//   }

//  $display = new Display("Scott");

//  echo $display->get_name();

//  echo "<hr>";


//  class Factorial{
//     // Properties
//     public $num;
//     public $res;
//     public $sum;
    
//     function __construct($num) {
//         $this->num = $num;
//       }
    
//     // Methods
//     function factorial(){
//       if($this->num <= 1) return 1;
//       $this->res = $this->num;
//       while($this->num > 1){
//         $this->num--;
//         $this->res *= $this->num;
//       }
//       return $this->res;
//     }
//   }

//   $factor = new Factorial(6);
//   echo $factor->factorial() . "<br>";



// function factorial($num){
//   if($num <= 1) return 1;
//   $res = $num;
//   while($num > 1){
//     $num--;
//     $res *= $num;
//   }
//   return $res;
// }
// echo factorial(6);













// recursive version
function factorial($num){
  if($num <= 1) return 1;
  return $num * factorial($num - 1);
}
echo factorial(5);
















// code explain
// 5 * factorial(5 - 1 => 4)
// 4 * factorial(4 - 1 => 3)
// 3 * factorial(3 - 1 => 2)
// 2 * factorial(2 - 1 => 1)
// 1

// how it is work
// 5 * (factorial(5 - 1 => 4)  => 4 * (factorial(4 - 1 => 3) => 3 * (factorial(3 - 1 => 2) => 2 * (factorial(2 - 1 => 1) => 1))))
?> 
