<?php

namespace Nemundo\MySql\Page;

use Nemundo\Admin\MySql\Com\MySqlTableListBox;
use Nemundo\Admin\MySql\Form\MySqlDatabaseForm;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\MySql\Com\Form\SqlFileImportForm;

class MySqlPage extends AbstractTemplateDocument
{

    public function getContent()
    {

        $p=new Paragraph($this);
        $p->content='MySql';


        new SqlFileImportForm($this);







        return parent::getContent();
    }
}