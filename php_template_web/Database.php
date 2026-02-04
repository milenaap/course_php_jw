
<?php

class Database
{

    public $connection; // Se declara la variable
    public $statement;


    public function __construct($config, $username = 'phpuser', $password = 'phppass')
    {

        $dns = 'mysql:' . (http_build_query($config, '', ';'));

        // $dns = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        $this->connection = new PDO($dns, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($query, $params = [])
    { // Inicio del ámbito de la función query()

        

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    } // Fin del ámbito de la función query()

    /**
     * Encuentra TODOS los registros en la DB
     */
    public function get()
    {

        return $this->statement->fetchAll();
    }


    /**
     * Encuentra un solo registro en la DB
     */
    public function find()
    {
        return $this->statement->fetch();
    }


    /**
     * Encuentra un solo registro en la DB y manda un error si no lo encuentra
     */
    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
