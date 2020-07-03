<html>

<head>
<title>A nice title goes here!</title>
</head>

<body>
<h1>
Hello, World!
</h1>
<p>
<h3>
Basic Echo
</h3>
<?php
  echo "Hello, this is PHP speaking!";
?>
</p>
<h3>
Variables and Numbers
</h3>
<p>
<?php
  $myvar = 'This is my variable: ';
  $number = 5;
  $number2 = 3;
  $sum = $number + $number2;

  echo $myvar, $sum;
?>
</p>
<!-- String interpolation -->
<h3>
String interpolation
</h3>
<p>
<?php
  $name = 'David';

  echo "Hello, " . $name;
?>

<h3>
Comparitors
</h3>
<?php
  $small_number = 5;
  $big_number = 500;
  echo "Is {$small_number} equal to {$big_number}: ", var_export($small_number == $big_number);
  echo "<br>";
  echo "Is {$small_number} less than or equal to {$big_number}: ", var_export($small_number <= $big_number);
?>
</p>
</body>
</html>