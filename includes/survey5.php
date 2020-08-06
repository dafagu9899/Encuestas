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
        $query = $this->connect()->prepare('UPDATE lenguajes5 SET votos = votos + 1 WHERE opcion = :opcion');
        $query->execute(['opcion' => $this->optionSelected]);
    }

    public function showResults(){
        return $this->connect()->query('SELECT * FROM lenguajes5');
    }

    public function getTotalVotes(){
        $querySum = $this->connect()->query('SELECT SUM(votos) AS votos_totales5  FROM lenguajes5');
        $this->totalVotes = $querySum->fetch(PDO::FETCH_OBJ)->votos_totales5;

        return $this->totalVotes;
    }

    public function getPercentageVotes($option){
        return round(($option / $this->totalVotes) * 100, 0);
    }
}

?>