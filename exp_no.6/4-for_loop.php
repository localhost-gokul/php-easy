<!DOCTYPE html>
<html>
<body>
<form method="post">
Enter your Number :
<input type="number" name="number" min="0" required><br><br>
<input type="submit" value="calculate factorial">
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$number = $_POST["number"];
$factorial = 1;
for($i= 1;$i <= $number; $i++)
{
$factorial *= $i;
}
echo "<h1>Factorial of $number is $factorial.</h1>";
}
?>