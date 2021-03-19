<?php

namespace App\grades;
use Kreait\Firebase\Factory;
use App\Model\Database;

class grade extends Database
{
    public function select(){
        $getData= $this->database->getReference('Grades')
            ->getValue();

        return $getData;


    }
    public function insert(array $data=NULL){
        $pushData = $this->database->getReference('Grades/');
        $result=$pushData->push($data);




        if($result){
            echo "Successfully Data Inserted";
        }else{
            echo "Sorry! Data Not Inserted";
        }
    }

    public function ed(){

        $editData=$this->database->getReference('Grades')->getValue();
        return $editData;
    }

    public function delete()
    {
        if(isset($_POST['delete_dara'])){
            $token=$_POST['ref_toke_delete'];
            $ref="Grades/" .$token;
            $deleteData=$this->database->getReference($ref)->remove();
            return $deleteData;
        }

    }

    public function count(){
        $ref=$this->database->getReference('Grades')->getSnapshot()->numChildren();
        return $ref;
    }
}