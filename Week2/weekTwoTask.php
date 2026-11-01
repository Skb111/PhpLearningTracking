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

//OPERATOR PART
$a = 5;

$b = $a;
echo '<pre>';
echo $a;

//OPERATOR PRECEDENCE AND ASSOCIATIVITY
$x = 5 + 3 * 5;
echo '<pre>';
echo $x;

$p = 5;
$q = 2;
$r = 10;
echo '<pre>';

$result = $p / $q * $r;
echo '<pre>';
echo $result;
//CONTROL STRUCTURE-IF/ELSE

$score = 50;
if ($score >= 90){
    echo '<pre>';
    echo 'A';
}elseif ($score >= 80){
    echo 'B';
}elseif ($score >= 70){
    echo 'C';
}elseif ($score >= 60){
    echo 'D';
}elseif ($score >= 50){
    echo 'E';
}elseif ($score >= 40){
    echo 'F';
}
//LOOP-BREAK AND CONTINUE

echo '</pre>';
$i = 0;
while ($i < 5){
    echo $i++;
}

for ($i = 0; $i < 5; $i++){
    echo $i++;
}
//SWITCH STATEMENT

$paymentStatus = 'paid';

switch ($paymentStatus){
    case 'paid':
        echo 'Paid';
        break;

        case 'unpaid':
            echo 'Unpaid';
            break;

        case 'declined':
              echo 'Declined';
              break;

              case 'pending':
                  echo 'Pending';
                  break;

                  default:
                      echo 'Unknown Payment Status';

}