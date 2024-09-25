<!DOCTYPE html>
<html>
<body>
<h1>File Handling - Write/Read a Sentence</h1>
<form method="post">
<select name="operation">
<option value="Write">Write</option>
<option value="Read">Read</option>
</select>
Enter your file Name:
<input type="text" name="filename" required><br><br>
Enter a Sentence to Write:<br>
<input type="text" name="sentence" size="50"><br><br>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$filename = $_POST["filename"];
$operation = $_POST["operation"];
if ($operation == "Write")
{
$sentence = $_POST["sentence"];
$file = fopen($filename, "w");
if($file)
{
fwrite($file, $sentence);
fclose($file);
echo "<p>Sentence written to file: $filename</p>";
} 
else
{
echo "<p>Unable to open file for writing.</p>";
}
} 
else if ($operation == "Read")
{
if(file_exists($filename)){
$file = fopen($filename, "r");
if($file){
$content = fread($file, filesize($filename));
fclose($file);
echo "<h2>File content :</h2> <pre>$content</pre>";
} 
else 
{
echo "<p>Unable to open the file for reading.</p>";
}
} 
else 
{
echo "<p>File does not exists. </p>";
}
} 
else 
{
echo "$operation is not found.";
}
}
?>
