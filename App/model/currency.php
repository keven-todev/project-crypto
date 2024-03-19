<?php       

namespace model;

use PDOException;

class Currency {
    protected $name;
    protected $valueEUR;
    protected $date;

    // get
    public function getName(){
        return $this->name;
    }     
    public function getValueEUR(){
        return $this->valueEUR;
    }     
    public function getDate(){
        return $this->date;
    } 
    
    // set

    public function setName(string $n){
        $this->name = $n;
    }

    public function setValueEUR(int $v){
        $this->valueEUR = $v;
    }

    public function setDate(int $d){
        $this->date = $d;
    }

    public function getAll(){
        try{
            $pdo = Database::connect();
            $stmt = $pdo->query('SELECT name, ValueEUR FROM crypto');
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            
        }
    }

}





?>