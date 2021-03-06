<?php

namespace Nemundo\MySql\Site;

use Nemundo\MySql\Page\MySqlPage;
use Nemundo\Web\Site\AbstractSite;

class MySqlSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'MySql';
        $this->url = 'mysql';

        new DatabaseSite($this);
        new DatabaseDeleteSite($this);

    }

    public function loadContent()
    {
        (new MySqlPage())->render();
    }
}