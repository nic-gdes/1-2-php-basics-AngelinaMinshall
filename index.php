<?php
// Variable
$string = "I had a dream";
$integer = 15;
$float = 3.14;
$boolean = true;

echo "I " . "love " . "PHP" . " ";

$my_array = [1,2,3,4];

 class Car {
    public $make;
    function set_make($make) {
        $this ->make = $make;
    }
      function get_make () {
         return $this->make;
      }


    public $model;
    function set_model($model) {
        $this ->model =$model;
    }
    function get_model () {
      return $this->model;
   }

    public $year;
    function set_year($year) {
        $this ->year =$year;
 } 
      function get_year () {
         return $this->year;
      }
}


 $lambo = new Car();

 $lambo-> set_make('Lambo');


 $lambo-> set_year("2001");


 $lambo-> set_model("Revuelto");
 
 echo "<br />";
 echo("I have a " . $lambo -> get_year() . " " . $lambo -> get_make() ." " .  $lambo -> get_model() . ".");
 
 // Conditionals
 echo "<br />";
 if ($integer >= 10) {
    echo "The statement is fr";
 }
 else {
    echo "The statement is cap";
 }

 //Standard
 echo "<br />";
 for ($i = 0; $i < count($my_array); $i++) {
    echo $my_array[$i] . "<br />";
 }
    foreach ($my_array as $item) {
   echo $item . "<br />";
} 
 
?>



 