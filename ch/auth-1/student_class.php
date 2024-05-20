<?php
// Step 1:
class Student{
   private $id;
   private $name;
   private $email;
   private $phone;

   // Constructor
   function __construct($_id, $_name, $_email, $_phone){
       $this->id = $_id;
       $this->name = $_name;
       $this->email = $_email;
       $this->phone = $_phone;
   }

   // CSV function
   public function csv(){
       return $this->id . "," . $this->name . "," . $this->email . "," . $this->phone . PHP_EOL;
   }

   // Save function
   public function save(){
       file_put_contents("data.txt", $this->csv(), FILE_APPEND);
   }

   // Display students
   public static function display_students(){
       $students = file("data.txt");
       echo "<b>ID | Name | EMAIL | PHONE</b><br/>";
       foreach($students as $student){
           list($id, $name, $email, $phone) = explode(",", trim($student));
           echo "$id | $name | $email | $phone<br/>";
       }
   }
}

// End of Student class
?>
