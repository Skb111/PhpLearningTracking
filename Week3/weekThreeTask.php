<?php
$paymentStatus = 'paid';

switch ($paymentStatus){
    case 1:
        echo 'Paid';
        break;

    case 2:
        echo 'Unpaid';
        break;

    case 3:
        echo 'Declined';
        break;

    case 4:
        echo 'Pending';
        break;

    default:
        echo 'Unknown Payment Status';

}

echo '<br>';

$paymentStatusDisplay = match ($paymentStatus) {
    1 => 'Paid',
    2 => 'Unpaid',
    3 => 'Declined',
    4 =>  'Pending',
    default => print 'Unknown Payment Status',
};

echo '<br>';
echo $paymentStatusDisplay;

// declare - ticks
echo '<br>';

function onTicks()
{
 echo 'Tick<br/>';
}

register_tick_function('onTicks');

declare(ticks = 1);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ . '<br/>';
}
