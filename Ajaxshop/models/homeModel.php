<?php

require_once("Model.php");

class HomeModel extends Model{

    public function get_all_benchmarks(){

      $data =  $this->dbc->Select("SELECT * FROM benchmarks","stdClass", "assoc");
      $_SESSION['benchmarks'] = $data;
      return $data;

    }

    public function save($bid,$uid,$st,$et,$date,$desc ="default"){
        $q = "INSERT INTO scores (userId, benchmarkId , description , startTime, endTime, date ) VALUES (? , ? , ? , ? , ? , ? )";
        $stmt = $this->dbc->Prepare($q);
        $stmt->bind_param("iissss",$bid,$uid,$desc,$st,$et,$date);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function delete(){
        $id = $_GET['id'];
        $q = "DELETE FROM benchmarks where id = $id";
        $stmt = $this->dbc->Prepare($q);
        $stmt->execute();
        return $stmt;
    }
    
}


?>