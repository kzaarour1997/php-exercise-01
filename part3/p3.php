<?php
function check_palindrome($strin) 
{
  if ($strin == strrev($strin))
      return "true";
  else
	  return "false";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
</head>
<body>
    <div>
<form method="POST" action="">
    Enter-Sentence:<input type="text" name="text" value="" required>
    <br>
    <input type="submit" name="submit" value="submit">
</form>
</div>
<div>
<?php
echo $_POST["text"]."\n";
echo check_palindrome($_POST["text"])."\n";

?>
    </div>
</body>
</html>