<?php


namespace App\Model;

use Kreait\Firebase\Factory;
use Exception;
class Database
{


    protected $database;

    private function is_conected($connected){

        if($connected){
            return true;
        }else{
            throw new Exception( 'Internet Connection Lost');
        }
    }

    public function __construct(){
        try{
            $connected = @fsockopen( "www.google.com", "80");
            $this->is_conected($connected);
            $serverAccount="vendors/secret/emtiaz-c0796-5b8e1156fb14.json";

            $factory=(new Factory)->withServiceAccount($serverAccount);
            $this->database=$factory->createDatabase();
        }catch(Exception $error){
            echo $error->getMessage();
            die();
        }
    }



}