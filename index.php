<html>

<head>
<title>A nice title goes here!</title>
</head>

<body>
<h1>
Hello, World!
</h1>
<p>
<?php
  echo "Hello, this is PHP speaking!";
?>
</p>

<p>
<?php
  $myvar = 'This is my variable: ';
  $number = 5;
  $number2 = 3;
  $sum = $number + $number2;

  echo $myvar, $sum;
?>
</p>
</body>
</html>