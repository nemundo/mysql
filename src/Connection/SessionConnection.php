<?php


namespace Nemundo\MySql\Connection;


use Nemundo\Db\Provider\MySql\Connection\MySqlConnection;

class SessionConnection extends MySqlConnection
{
    
    public function __construct()
    {

        parent::__construct();

        $this->connectionParameter->host = 'localhost';
        $this->connectionParameter->port = '3333';  // '3306';
        $this->connectionParameter->user = 'root';
        $this->connectionParameter->password = '123456';


    }

}