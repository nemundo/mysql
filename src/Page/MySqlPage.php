<?php

namespace Nemundo\MySql\Page;

use Nemundo\Admin\MySql\Com\MySqlTableListBox;
use Nemundo\Admin\MySql\Form\MySqlDatabaseForm;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\MySql\Com\Form\SqlFileImportForm;
use Nemundo\Project\Path\TmpPath;

class MySqlPage extends AbstractTemplateDocument
{

    public function getContent()
    {

        $p=new Paragraph($this);
        $p->content='MySql';

        //$p=new Paragraph($this);
        //$p->content='Tmp Path: '.(new TmpPath())->getPath();



        new SqlFileImportForm($this);







        return parent::getContent();
    }
}