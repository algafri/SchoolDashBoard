<?php
namespace App\courses;
use Kreait\Firebase\Factory;
use App\Model\Database;

class courses extends Database
{
    public function select(){
        $getData= $this->database->getReference('Notes')
            ->getValue();

        return $getData;


    }
    public function insert(array $data=NULL){
        $pushData = $this->database->getReference('Notes/');
        $result=$pushData->push($data);




        if($result){
            echo "Successfully Data Inserted";
        }else{
            echo "Sorry! Data Not Inserted";
        }
    }

    public function ed(){

        $editData=$this->database->getReference('Notes')->getValue();
        return $editData;
    }

    public function delete()
    {
        if(isset($_POST['delete_dara'])){
            $token=$_POST['ref_toke_delete'];
            $ref="Notes/" .$token;
            $deleteData=$this->database->getReference($ref)->remove();
            return $deleteData;
        }

    }

    public function count(){
        $ref=$this->database->getReference('Notes')->getSnapshot()->numChildren();
        return $ref;
    }
}