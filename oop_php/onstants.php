<?php
class Goodbye {
  const LEAVING_MESSAGE = "valo thakun";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>