<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>class_object</title>
</head>
<body>
  <?php

  class Fruit {
    public $name;
    private $color;

    // methods
    function set_name($name){
      $this->name = $name;
    }

    function get_name(){
      return $this->name;
    }

    function set_color($color){
      $this->color = $color;
    }

    function get_color(){
      return $this->color;
    }
  }

  $apple = new Fruit();
  $apple->set_name('mango');
  $apple->set_color('yellow');

  echo "Name: " . $apple->get_name();
  echo "<br>";
  echo "Color: " . $apple->get_color();

  ?>
</body>
</html>
