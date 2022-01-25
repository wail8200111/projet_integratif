<?php
    class Database {
    	private $host = "localhost";
    	private $db_name = "Projet_Integratif";
    	private $username = "root";
    	private $motdepasse = "root";
    	public $connection;

    	public funtion getFunction(){
    		$this->connection = null;

    		try{
    			$this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->motdepasse);
    			$this->connection->exec("set names utf8");
    		} catch(PDOException $exception){
    			echo "erreur : " . $exception->getMessage();
    		}

    		return $this->connection;
    	}
    }
