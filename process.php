<html>
<head>
<title>This is a tutorial!</title>
</head>

<body>
<h1>
Hello, World still...
</h1>
<?php

  $name = $_POST["name"];
  echo "Your name is ", $name;
  echo "<br>";
  echo "You did tell me this on the previous page! I am not a mind reader...";
?>

<form action="index.php">
    <input type="submit" value="Go back from whence you came" />
</form>


</body>

</html>