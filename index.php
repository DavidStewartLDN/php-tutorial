<html>

<head>
<title>This is a tutorial!</title>
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

<h3>
If statement
</h3>
<?php
  $loggedIn = false;
  if ($loggedIn == true) {
    echo "You are logged in";
  } else {
    echo "Please log in (when I have added the functionality :?)";
  }

?>
<h3>
Forms!!
</h3>

<form action="process.php" method="post">
  Enter your name: <input name="name" type="text">
  <input type="submit">
</form>

<h3>
Arrays :o
</h3>

<?php

  $people = array("Alice", "Bob", "Steve", "Gruntilda");

  // print_r - Prints human-readable information about a variable
  print_r($people);

  $key = array_rand($people);
  echo "<br>";echo "<br>";
  echo "Your random person for today is: ", $people[$key];
?>

<h3>
Iteration - For Each
</h3>

<?php

  $people = array("Alice", "Bob", "Steve", "Gruntilda");

  $numbers = array(5,3,7);
  $sum = 0;

  echo 'All the people here today: <br>';

  foreach ($people as $person) {
    echo $person . '<br>';
  };

  echo '<br>';

  echo 'Values in your number array: ' , print_r($numbers) , '<br>';

  foreach ($numbers as $number) {
    $sum += $number;
  };

  echo "Sum is equal to " . $sum

?>

</body>
</html>