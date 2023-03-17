<?php 

namespace DAB;

use DAB\DabInterface;

require 'dabInterface.php';

class Dab implements DabInterface
{
    protected $soldes;
    protected $montant;
    protected $num_compte;

    public function debit($soldes, $montant, $num_compte){
        $soldes = $soldes - $montant;
        return $soldes;
    }
    public function credit($soldes, $montant, $num_compte){
        $soldes = $soldes + $montant;
        return $soldes;
    }
}