<?php

namespace DAB;

interface DabInterface
{
    public function debit(float $soldes, float $montant, string $num_compte);
    public function credit(float $soldes, float $montant, string $num_compte);
}