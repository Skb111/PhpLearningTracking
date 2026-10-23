<?php

// NULL
$x = null;
var_dump((array) $x);

//ARRAY
$programmingLanguages = ['PHP', 'C#', 'Javascript', 'Java', 'Python'];
echo '<pre>';
$programmingLanguages[0] = '.Net';
echo '</pre>';
echo $programmingLanguages[0];
$programmingLanguages[] = 'NodeJs';

array_push($programmingLanguages, 'Express', 'Go');
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);

$programmingLanguages = [
    'php' => '8.0',
    'javascript' => '7.0',
    'python' => '7.1',
    'java' => '8.0',
    'express' => '8.0',
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php'];
//EXPRESSION

unset($programmingLanguages['php']);

echo '<pre>';
print_r($programmingLanguages);

//OPERATOR PART 1


//OPERATOR PART 2


//OPERATOR PRECEDENCE AND ASSOCIATIVITY


//CONTROL STRUCTURE-IF/ELSE


//LOOP-BREAK AND CONTINUE


//SWITCH STATEMENT