<!DOCTYPE html>
<html>
<body>
<h1>Generate Multiplication table</h1>
<form method="post">
Enter your number :
<input type="number" name="number" required> <br><br>
<input type="submit" value="submit" value="Generate Table">
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$number = $_POST["number"];
$i = 1;
echo "<h2>Multiplication Table for $number</h2>";
while($i <= 10){
$result = $number * $i;
echo "<p>$i x $number = $result</p>";
$i++;
}
}
?>