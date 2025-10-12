<?php

/**
 * connection to database
 * credentials :
 * host
 * DB NAME 
 * DB Type
 * Username
 * password
 * 
 */

// $userName = "root";
// $password = "";
// // default ==> 3306
// $host = "localhost";  //$host="localhost:3307";
// $dbType = "mysql";
// $dbName = "iti_4m_pen_test_2025";

// $connection = new PDO("$dbType:host=$host;dbname=$dbName", $userName, $password);
/**
 * users
 * products
 * orders 
 * categories
 */

class DB
{
    protected $userName, $password, $host, $dbType, $dbName, $connection;

    function __construct($userName, $password, $host, $dbType, $dbName)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->host = $host;
        $this->dbType = $dbType;
        $this->dbName = $dbName;

        $this->connection = new PDO("$dbType:host=$host;dbname=$dbName", $userName, $password);
    }



    /**
     * cruds ===========> users 
     * create 
     * read 
     * update 
     * delete 
     */

    // get all data from table

    function index($table)
    {
        /**
         * read all users: select * from users(table name)  ==> data of all users
         */
        $query = "select * from $table";  // string
        // $sqlQuery=$this->connection->prepare($query); // PDOStatement : sql query
        // $sqlQuery->execute(); // execute the query

        $sqlQuery = $this->connection->query($query); // prepare (sql query) + execute  
        // $data= $sqlQuery->fetchAll(PDO::FETCH_ASSOC); // array of objects
        // return $data;
        return $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
    }


    function show($table, $id)
    {
        $query = "select * from $table where id=$id ";
        $sqlQuery = $this->connection->query($query);
        return $sqlQuery->fetch(PDO::FETCH_ASSOC);
    }


    function delete($table, $id) {
        $query = "delete from $table where id=$id ";
        $this->connection->query($query);
        return true;
    }


    function create($table,$data)
    {
        // var_dump($data["name"]);
        $dataKeys = array_keys($data);  // ["name","email","password"]
        // 
        $datakeyString=implode(',',$dataKeys); 
        // ["name","email","password"]=>"name,email,password"
        $dataValues = array_values($data); // ["","",""]
        $dataValuesString=implode("','",$dataValues);

        // exit; 
         
    //    $query = "insert into $table ('name','email','password') values ('$dataValuesString')";
       $query = "insert into $table ($datakeyString) values ('$dataValuesString')";
        // echo $query;
        // exit;
        $this->connection->query($query);
        return true;
    }

    function update($table , $id , $data)
    {
       
}
}

$database = new DB("root", "", "localhost", "mysql", "iti_4m_pen_test_2025");
