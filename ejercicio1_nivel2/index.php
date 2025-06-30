<?php
require_once 'PokerDice.php';

$dice = [];
for ($i = 0; $i < 5; $i++) {
    $dice[$i] = new PokerDice();
    $dice[$i]->throw();
}


echo "Mano de póker: <br>";
foreach ($dice as $index => $face) {
    echo "Dado " . ($index + 1) . ": " . $face->shapeName() . "<br>";
}

echo "Total de lanzamientos: " . PokerDice::getTotalThrows() . "<br>";
?>