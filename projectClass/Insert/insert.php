<?php


namespace App\Insert;
use Kreait\Firebase\Factory;

use App\Model\Database;

class insert extends Database
{
    public function inserts(array $data=NUll){
        $pushData = $this->database->getReference('product/')
            ->push($data);
}}