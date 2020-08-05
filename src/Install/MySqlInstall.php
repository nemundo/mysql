<?php
namespace Nemundo\MySql\Install;
use Nemundo\Project\Install\AbstractInstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\MySql\Data\MySqlCollection;
use Nemundo\MySql\Application\MySqlApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class MySqlInstall extends AbstractInstall {
public function install() {
(new ApplicationSetup())->addApplication(new MySqlApplication());
(new ModelCollectionSetup())->addCollection(new MySqlCollection());
}
}