<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!"; 
  }
}

trait massage3 {
  public function msg3(){
    echo "OOP is very simple";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2,massage3;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";


$obj2 = new Welcome2();
$obj2->msg2();
echo "<br>";
$obj2->msg2();
echo "<br>";
$obj2->msg3();
echo "<br>";

?>