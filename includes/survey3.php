<?php

include_once 'db.php';

class Survey extends DB{

    private $totalVotes;
    private $optionSelected;

    public function setOptionSelected($option){
        $this->optionSelected = $option;
    }
    public function getOptionSelected(){
        return $this->optionSelected;
    }

    public function vote(){
        $query = $this->connect()->prepare('UPDATE lenguajes3 SET votos = votos + 1 WHERE opcion = :opcion');
        $query->execute(['opcion' => $this->optionSelected]);
    }

    public function showResults(){
        return $this->connect()->query('SELECT * FROM lenguajes3');
    }

    public function getTotalVotes(){
        $querySum = $this->connect()->query('SELECT SUM(votos) AS votos_totales3  FROM lenguajes3');
        $this->totalVotes = $querySum->fetch(PDO::FETCH_OBJ)->votos_totales3;

        return $this->totalVotes;
    }

    public function getPercentageVotes($option){
        return round(($option / $this->totalVotes) * 100, 0);
    }
}

?>