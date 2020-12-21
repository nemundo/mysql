<?php


namespace Nemundo\MySql\Page;


use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\App\MySqlAdmin\Com\Table\MySqlDataTable;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Db\Provider\MySql\Connection\MySqlConnection;
use Nemundo\Db\Provider\MySql\Database\MySqlDatabaseReader;
use Nemundo\MySql\Connection\SessionConnection;

class DatabasePage extends AbstractTemplateDocument
{

    public function getContent()
    {


        /*
        $table=new MySqlDataTable($this);
        $table->tableName=()


/*
        $table = new AdminTable($this);

        $header = new TableHeader($table);
        $header->addText('Database');



        $reader = new MySqlDatabaseReader();
        $reader->connection = new SessionConnection();
        foreach ($reader->getData() as $database) {
            $row = new TableRow($table);
            $row->addText($database->databaseName);
        }

*/


        return parent::getContent();
    }

}