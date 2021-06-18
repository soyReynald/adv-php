<?php

class DatabaseClass{	
    private $connection = null;
    protected $connection_type = null;
    // this function is called everytime this class is instantiated		
    public function __construct($type= "", $dbhost = "", $user = "", $password = "", $dbname = ""){
        if($type == "odbc_pdo"){
            $type = "odbc";
            try{
                // $this->connection = new PDO("", $user, $password);
                 $this->connection = new PDO($type . ":" . $dbhost, $user, $password);
                 $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                 
             }catch(Exception $e){
                 throw new Exception($e->getMessage());   
             }
             $this->connection_type = $type;
        } else if($type == "odbc_connect"){
            try{
                $this->connection = odbc_connect($dbhost, $user, $password);
             }catch(Exception $e){
                 throw new Exception($e->getMessage());   
             }
             $this->connection_type = $type;
        }
    }
    // Insert a row/s in a Database Table
    public function Insert( $statement = "" , $parameters = [] ){
        if($this->connection_type == "odbc"){
            try{
                $this->executeStatement( $statement , $parameters );
                return $this->connection->lastInsertId();
            }catch(Exception $e){
                throw new Exception($e->getMessage());   
            }
        } else if($this->connection_type == "odbc_connect"){
            try{

                return $this->executeStatement($statement, $parameters);

            }catch(Exception $e){
                throw new Exception($e->getMessage());   
            }
        }
        	
    }
    // Select a row/s in a Database Table
    public function Select( $statement = "" , $parameters = [] ){
        if($this->connection_type == "odbc"){   
            try{
                
                $stmt = $this->executeStatement( $statement , $parameters );
                return $stmt->fetchAll();
                
            }catch(Exception $e){
                throw new Exception($e->getMessage());   
            }
        } else if($this->connection_type == "odbc_connect")	{
            try{
                
                return $stmt = odbc_fetch_array($this->executeStatement( $statement , $parameters ));
                
            }catch(Exception $e){
                throw new Exception($e->getMessage());   
            }
        }
    }
    // Update a row/s in a Database Table
    public function Update( $statement = "" , $parameters = [] ){
        try{
            
            return $this->executeStatement( $statement , $parameters );
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }
    // Remove a row/s in a Database Table
    public function Remove( $statement = "" , $parameters = [] ){
        try{
            
            return $this->executeStatement( $statement , $parameters );
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }		
    // execute statement
    private function executeStatement( $statement = "" , $parameters = [] ){
       if($this->connection_type == "odbc"){
            try{
            
                $stmt = $this->connection->prepare($statement);
                $stmt->execute($parameters);
                return $stmt;
                
            }catch(Exception $e){
                throw new Exception($e->getMessage());   
            }	
       } else if($this->connection_type == "odbc_connect") {
            try{
                if($parameters == null){
                    $stmt = odbc_exec($this->connection, $statement);
                    return $stmt;
                } else {
                    // Here place what you want to do with the parameters
                }
            }catch(Exception $e){

                throw new Exception($e->getMessage());   

            }	
       }
    }
    
}

// Way of use:
$db = new Database(
    "MySQLHost",
    "myDatabaseName",
    "myUserName",
    "myUserPassword"
);
for( $x = 1; $x <= 1000; $x++ ){
    $data = $db->Select("Select * from TableName where id = :id",["id"=>$x]);
    // do something with $data
}

// Removing:
/*
    $db->Remove("Delete from TableName where id = :id",[
        'id' => 1
    ]);
*/


// Update:
/*
$db->Update("Update TableName set `column1` = :column1 where id = :id",[
    'id' => 1,
    'column1' => 'a new column1 value'
]);
*/

// Insert
/*
$id = $db->Insert("Insert into `TableName`( `column1` , `column2`) values ( :column1 , :column2 )", [
    'column1' => 'column1 Value',
    'column2' => 'column2 Value',
]);
*/
?>