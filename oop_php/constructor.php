<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }

  function get_details() {
    return array(
      'name' => $this->name,
      'color' => $this->color
    );
  }
}

$apple = new Fruit("Apple", "red");

$details = $apple->get_details();

echo "Name: " . $details['name'] . "<br>";
echo "Color: " . $details['color'];
?> 
</body>
</html>
