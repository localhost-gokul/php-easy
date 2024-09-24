<!DOCTYPE html>
<html>
<body>
<h1>Student Registration Form</h1>
<form method="post">
Enter Your Rollno :
<input type="number" name="rollno"> <br><br>
Enter Your Name :
<input type="text" name="name" > <br><br>
Enter Your Age :
<input type="number" name="age" > <br><br>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
class student
{
public $rollno;
public $name;
public $age;
}
$student1 = new student();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$student1 -> rollno = intval($_POST["rollno"]);
$student1 -> name = strval($_POST["name"]);
$student1 -> age = intval($_POST["age"]);
echo "<h2>Student Details: </h2>";
echo "-----------------------------<br><br>";
echo "Roll Number = {$student1 -> rollno}<br><br>";
echo "Name        = {$student1 -> name}<br><br>";
echo "Age         = {$student1 -> age}<br><br>";
}

?>