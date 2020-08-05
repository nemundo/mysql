<?php

require __DIR__ . "/../../../config.php";

(new \Nemundo\Core\Debug\Debug())->write('Import Sql File');
//(new \Nemundo\Core\Debug\Debug())->write(\Nemundo\Db\DbConfig::$defaultConnection->connectionParameter->port);

$filename = 'D:\Tmp\mysql\jahr.sql';


//$import=new \Nemundo\Db\Provider\MySql\Dump\MySqlDump()

$import = new \Nemundo\Db\Provider\MySql\Dump\MySqlDumpRestore();
$import->filename = $filename;
$import->restoreDumpFile();