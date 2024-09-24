<!DOCTYPE html>
<html>
<body>
<form method="post">
Enter first number:
<input type="number" name="num1" required> <br><br>
Enter Second number:
<input type="number" name="num2" required> <br><br>
Select Operation
<select name="operation" required>
<option value="Add">Addition</option>
<option value="Subtract">Subraction</option>
<option value="Multiply">Multiply</option>
<option value="Divide">Divide</option>
</select> <br><br>
<input type="submit" name="submit" value="submit" >
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"];
switch ($operation) 
{
case 'Add':
$result = $num1 + $num2;
echo "<h2>Result = $num1 + $num2 = $result</h2>";
break;
        
case 'Subtract':
$result = $num1 - $num2;
echo "<h2>Result = $num1 - $num2 = $result</h2>";
break;
        
case 'Multiply':
$result = $num1 * $num2;
echo "<h2>Result = $num1 * $num2 = $result</h2>";
break;

case 'Divide':
$result = $num1 / $num2;
echo "<h2>Result = $num1 / $num2 = $result</h2>";
break;
        
default:
echo "<h2>Please select a valid operation.</h2>";
break;
}
}
?>