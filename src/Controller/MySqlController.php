<?php


namespace Nemundo\MySql\Controller;


use Nemundo\MySql\Site\MySqlSite;
use Nemundo\Web\Controller\AbstractWebController;

class MySqlController extends AbstractWebController
{

    protected function loadController()
    {

        new MySqlSite($this);

    }

}