<?php

require 'Require.php';

$pikachu = new \Pokemon\Pikachu();
$charmeleon = new \Pokemon\Charmeleon();

// Print health before fight
print "Health before fight:";
print '<br><br>';
print($pikachu . ' health: ' . $pikachu->getHealth() . '<br>');
print($charmeleon . ' health: ' . $charmeleon->getHealth() . '<br><br>');

$pikachu->doAttack(new \Attack\ElectricRing(), $charmeleon);
$charmeleon->doAttack(new \Attack\Flare(), $pikachu);

// Print health after fight
print "health after fight:";
print '<br><br>';
print($pikachu . ' health: ' . $pikachu->getHealth() . '<br>');
print($charmeleon . ' health: ' . $charmeleon->getHealth() . '<br>');