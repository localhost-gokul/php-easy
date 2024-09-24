<!DOCTYPE html>
<html>
<body>
<form method="post">
Enter a number:
<input type="number" name="number" required> <br><br>
<input type="submit" value="Check">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$number = intval($_POST["number"]);
if ($number % 2 == 0) {
echo "<h1>$number is an even number.</h1>";
} 
else 
{
echo "<h1>$number is an odd number.</h1>";
}
}
?>