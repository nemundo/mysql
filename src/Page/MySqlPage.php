<?php

namespace Nemundo\MySql\Page;

use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Db\Provider\MySql\Connection\MySqlConnection;
use Nemundo\Db\Provider\MySql\Database\MySqlDatabaseReader;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\MySql\Com\Form\SqlFileImportForm;

class MySqlPage extends AbstractTemplateDocument
{

    public function getContent()
    {

        $p = new Paragraph($this);
        $p->content = 'MySql';

        //$p=new Paragraph($this);
        //$p->content='Tmp Path: '.(new TmpPath())->getPath();


        new SqlFileImportForm($this);


        $table = new AdminTable($this);

        $header = new TableHeader($table);
        $header->addText('Database');


        $conn = new MySqlConnection();
        $conn->connectionParameter->host = 'localhost';
        $conn->connectionParameter->port = '3306';
        $conn->connectionParameter->user = 'root';
        $conn->connectionParameter->password = '';


        $reader = new MySqlDatabaseReader();
        $reader->connection = $conn;
        foreach ($reader->getData() as $database) {
            $row = new TableRow($table);
            $row->addText($database->databaseName);
        }


        return parent::getContent();
    }
}