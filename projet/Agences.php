<?php
class Stades{
    private $connexion;
    private $table = "stade";

    public $id;
    public $nom;
    public $lat;
    public $lon;

    public function __construct($db){
        $this->connexion = $db;
    }

    public function lire(){
        $sql = "SELECT * FROM " . $this->table;

        $query = $this->connexion->prepare($sql);

        $query->execute();

        return $query;
    }
}