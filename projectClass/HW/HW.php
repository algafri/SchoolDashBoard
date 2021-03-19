<?php
namespace App\HW;
use Kreait\Firebase\Factory;
use App\Model\Database;
class HW extends Database
{
    public function select(){
        $getData= $this->database->getReference('HWs')
            ->getValue();

        return $getData;


    }
    public function insert(array $data=NULL){
        $pushData = $this->database->getReference('HWs/');
        $result=$pushData->push($data);




        if($result){
            echo "Successfully Data Inserted";
        }else{
            echo "Sorry! Data Not Inserted";
        }
    }

    public function ed(){

        $editData=$this->database->getReference('HWs')->getValue();
        return $editData;
    }

    public function delete()
    {
        if(isset($_POST['delete_dara'])){
            $token=$_POST['ref_toke_delete'];
            $ref="HWs/" .$token;
            $deleteData=$this->database->getReference($ref)->remove();
            return $deleteData;
        }

    }

    public function count(){
        $ref=$this->database->getReference('HWs')->getSnapshot()->numChildren();
        return $ref;
    }
}