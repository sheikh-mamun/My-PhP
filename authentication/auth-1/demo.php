<?php 
 session_start();

 if(!isset($_SESSION["sname"])){
	 header("location:login.php");
  }
//step 2:
require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
	$id=$_POST["txtId"];
	$name=$_POST["txtName"];
	$email=$_POST["email"];
	$phone=$_POST["txtPhone"];
	
	if(!preg_match("/^[0-9+]{11,14}$/",$phone)){
		
		echo "Phone is not valid";
		
	}elseif(!preg_match("/^[a-zA-Z0-9]{4,}[@][a-zA-Z]{4,6}[.][a-zA-Z]{2,3}$/",$email)){
		
		echo "Email is not valid";
		
	}else{
		$student=new Student($id,$name,$email,$phone);
		$student->save();
		echo "Sucess !";
		
	}
	
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            background-color: #f2f2f2;
        }

        form {
            display: inline-block;
            text-align: left;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        div {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #333;
            margin-left: 10px;
        }

        a:hover {
            color: #0066cc;
        }
    </style>
</head>
<body>

<form action="#" method="post">
    <div>
        <label for="txtId">Id:</label><br/>
        <input type="text" id="txtId" name="txtId"/>
    </div>

    <div>
        <label for="txtName">Name:</label><br/>
        <input type="text" id="txtName" name="txtName"/>
    </div>

    <div>
        <label for="email">Email:</label><br/>
        <input type="text" id="email" name="email"/>
    </div>

    <div>
        <label for="txtPhone">Phone:</label><br/>
        <input type="text" id="txtPhone" name="txtPhone"/>
    </div>

    <div>
        <input type="submit" name="btnSubmit" value="Submit"/>
        <a href="logout.php">Logout</a>
    </div>
</form>

<?php
Student::display_students();
?>

</body>
</html>
