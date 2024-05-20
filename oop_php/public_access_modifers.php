class Fruit {
  public $name;
  public $color;
  public $weight;

  public function set_name($n) {
    $this->name = $n;
  }

  public function set_color($n) {
    $this->color = $n;
  }

  public function set_weight($n) {
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango');
$mango->set_color('Yellow'); // OK
$mango->set_weight('300'); // OK
