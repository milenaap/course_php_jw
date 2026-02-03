
<?php

class Database
{

    public $connection; // Se declara la variable

    
    public function __construct($config, $username = 'phpuser', $password = 'phppass'){

        
        $dns = 'mysql:' . (http_build_query($config, '', ';'));
       

        // $dns = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        $this->connection = new PDO($dns, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($query, $params = [])
    {

        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}