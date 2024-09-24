<!DOCTYPE html>
<html>
<body>
<h1>Calculate Area of Rectangle</h1>
<form method='post'>
Enter Length:
<input type='number' name='length' required> <br><br>
Enter Width:
<input type='number' name='width' required> <br><br>
<input type='submit' name='submit' value='Calculate'>
</form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
$length = $_POST['length'];
$width = $_POST['width'];
$area = $length * $width;
echo "<h2>The area of the rectangle is: $area</h2>";
}
?>