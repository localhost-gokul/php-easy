<!DOCTYPE html>
<html>
<body>
<h1>Addition of Two numbers:</h1>
<form method="post">
Enter first number  :
<input type="number" name="num1"> <br><br>
Enter Second number :
<input type="number" name="num2"> <br><br>
<input type="submit" value="Add">
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
function Addtion($num1, $num2)
{
$sum = $num1 + $num2;
echo "<h2>Addition of $num1 + $num2 = $sum</h2>";
}
Addtion($num1, $num2);
}
?>