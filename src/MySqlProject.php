<?php


namespace Nemundo\MySql;


use Nemundo\Project\AbstractProject;

class MySqlProject extends AbstractProject
{

    protected function loadProject()
    {

        $this->project = 'MySql';
        $this->projectName = 'mysql';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR;

    }

}