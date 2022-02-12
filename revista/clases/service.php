<?php
require 'database.php';
require 'revista.php';
class Crud{
    private $pdo;
	

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp(); 
			$this->stm = '';   
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}    

    public function readAll($table){
        
        $query = "SELECT * FROM ".$table;
        
        $this->stm = $this->pdo->prepare($query);
        $this->stm->execute();
        
        return $this->stm->fetchAll(PDO::FETCH_OBJ); 
    }
	public function readById($table, $id){
		
		$query = "SELECT * FROM ".$table." WHERE id_revista=:id";
		
		$this->stm = $this->pdo->prepare($query);
		$this->stm->bindValue(':id', $id, PDO::PARAM_STR);
		
		$this->stm->execute();
		return $this->stm->fetch(PDO::FETCH_OBJ);

	}
	public function readFromRv($id){
		$query = "SELECT * FROM Articulo WHERE revistaID=:id";
		$this->stm = $this->pdo->prepare($query);
		$this->stm->bindValue(':id', $id, PDO::PARAM_STR);
		
		$this->stm->execute();
		return $this->stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function closeConnection(){
		$this->stm = null;
		$this->pdo = null;
	}
}

            

