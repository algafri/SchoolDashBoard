<?php
namespace App\students;
use Kreait\Firebase\Factory;
use App\Model\Database;

class student extends Database
{
    public function select(){
        $getData= $this->database->getReference('STUDENT')
            ->getValue();

        return $getData;


    }
    public function insert(array $data=NULL){
        $pushData = $this->database->getReference('STUDENT/');
        $result=$pushData->push($data);




        if($result){
            echo "Successfully Data Inserted";
        }else{
            echo "Sorry! Data Not Inserted";
        }
    }

    public function ed(){

        $editData=$this->database->getReference('STUDENT')->getValue();
        return $editData;
    }

    public function delete()
    {
        if(isset($_POST['delete_dara'])){
            $token=$_POST['ref_toke_delete'];
            $ref="STUDENT/" .$token;
            $deleteData=$this->database->getReference($ref)->remove();
            return $deleteData;
        }

    }

    public function count(){
        $ref=$this->database->getReference('STUDENT')->getSnapshot()->numChildren();
        return $ref;
    }
}