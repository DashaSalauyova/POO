<?php

namespace DAB;
require 'dabClass.php';

$retrait = new Dab();
echo $retrait->debit(500, 100, 1565468);

$depot = new Dab();
echo $depot->credit(500, 100, 1565468);
// echo $depot;