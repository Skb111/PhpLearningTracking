<!DOCTYPE html>
<html lang="">

<body>
<h1>
    <?= 'Hello World!' ?>
</h1>
<p>My first paragraph</p>

<?php

// Single line Comment
# Single line Comment

/*
Multi line Comment
*/
$x = 10;

$y = 20;

echo '<p>' . $x . ' ' . $y . '</p>';

// Constant

$firstName = 'Jack';

$firstName = 'Smith';

echo $firstName;

echo '<br>';

define('STATUS_PAID', 'paid');
echo  STATUS_PAID;

echo '<br>';

//The defined key help to check whether a particular const name exists
echo defined('STATUS_PAID');

echo '<br>';

const STATUS_NOT_PAID = 'paid';
echo STATUS_NOT_PAID;

echo '<br>';
echo  PHP_VERSION;

echo '<br>';

// Variable Variable

$foo = 'bar';
$$foo = 'baz';

echo $foo . ' ' . $$foo;

// DATA TYPE AND TYPE CASTING

# 4 SCALAR TYPES
 # bool
 $Completed = false;
 #int
$x = 1;
 #float
$y = 2;
 # string
$name = 'Jack';

echo $Completed;
echo '<br>';
echo $x . ' ' . $y;
echo '<br>';
echo $name;
echo '<br>';

var_dump($name);
# 4 COMPOUND TYPE
 #Array
$companies = [1, 2, 3, -9.3, 'A', 'B', true, false];
echo '<br>';
//echo $companies;
print_r($companies);

echo '<br>';
echo '<br>';
 #Object
 #Callable
 #Iterable

# 2 SPECIAL TYPES
 # Resource
 # null


function sum(int $a, int $b)
{
$a = 3.5;
var_dump($a, $b);
echo '<br>';
return $a + $b;
}

$sum = sum(1, 2);

echo '<br>';

echo $sum;


// BOOLEAN
$isCompleted = true;
if ($isCompleted)
{
    // do something
    echo '<br>';

    echo 'success';

}
else{
    // do something else
    echo 'failed';
}












?>

</body>


</html>