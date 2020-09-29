<?php


namespace Nemundo\MySql\Site;


use Nemundo\Db\Provider\MySql\Database\MySqlDatabase;
use Nemundo\MySql\Connection\SessionConnection;
use Nemundo\MySql\Parameter\DatabaseParameter;
use Nemundo\Package\FontAwesome\Site\AbstractDeleteIconSite;
use Nemundo\Web\Url\UrlReferer;

class DatabaseDeleteSite extends AbstractDeleteIconSite
{

    /**
     * @var DatabaseDeleteSite
     */
    public static $site;

    protected function loadSite()
    {

        parent::loadSite();
        DatabaseDeleteSite::$site = $this;

    }


    public function loadContent()
    {

        $db = (new MySqlDatabase((new DatabaseParameter())->getValue()));
        $db->connection = new SessionConnection();
        $db->dropDatabase();

        (new UrlReferer())->redirect();

    }

}