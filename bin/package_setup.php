<?php

require __DIR__.'/../vendor/autoload.php';


//\Nemundo\Project\ProjectConfig::$projectPath = __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;

\Nemundo\Web\WebConfig::$webPath =__DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'web'.DIRECTORY_SEPARATOR;
(new \Nemundo\Core\Debug\Debug())->write(\Nemundo\Web\WebConfig::$webPath);


(new \Nemundo\Com\Package\PackageSetup())
    ->addPackage(new \Nemundo\Package\Jquery\Package\JqueryPackage())
    ->addPackage(new \Nemundo\Package\JqueryUi\JqueryUiPackage())
    ->addPackage(new \Nemundo\Package\FontAwesome\FontAwesomePackage())
    ->addPackage(new \Nemundo\Package\Bootstrap\Package\BootstrapPackage());

//$setup=new \Nemundo\Com\Package\PackageSetup();
//$setup->addPackage(new \Nemundo\Package\Jquery\Package\JqueryPackage());


