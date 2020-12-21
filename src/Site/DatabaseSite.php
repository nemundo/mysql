<?php

namespace Nemundo\MySql\Site;

use Nemundo\MySql\Page\DatabasePage;
use Nemundo\Web\Site\AbstractSite;

class DatabaseSite extends AbstractSite
{

    /**
     * @var DatabaseSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Database';
        $this->url = 'database';
        DatabaseSite::$site = $this;
    }

    public function loadContent()
    {
        (new DatabasePage())->render();
    }
}