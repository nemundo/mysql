<?php


namespace Nemundo\MySql\Com\Form;


use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Type\File\File;
use Nemundo\Db\Provider\MySql\Connection\MySqlConnection;
use Nemundo\Db\Provider\MySql\Dump\MySqlDumpRestore;
use Nemundo\Package\Bootstrap\Form\BootstrapForm;
use Nemundo\Package\Bootstrap\FormElement\BootstrapFileUpload;
use Nemundo\Package\Bootstrap\FormElement\BootstrapTextBox;
use Nemundo\Project\Path\TmpPath;

class SqlFileImportForm extends BootstrapForm
{

    /**
     * @var BootstrapTextBox
     */
    private $host;

    /**
     * @var BootstrapTextBox
     */
    private $port;

    /**
     * @var BootstrapTextBox
     */
    private $user;

    /**
     * @var BootstrapTextBox
     */
    private $password;

    /**
     * @var BootstrapFileUpload
     */
    private $file;


    public function getContent()
    {

        $this->host = new BootstrapTextBox($this);
        $this->host->label = 'Host';
        $this->host->value = 'localhost';

        $this->port = new BootstrapTextBox($this);
        $this->port->label = 'Port';
        $this->port->value = '3306';

        $this->user = new BootstrapTextBox($this);
        $this->user->label = 'User';
        $this->user->value = 'root';

        $this->password = new BootstrapTextBox($this);
        $this->password->label = 'Password';
        $this->password->value = '';

        $this->file = new BootstrapFileUpload($this);
        $this->file->label = 'Sql File';
        $this->file->acceptFileType = '.sql';
        $this->file->validation = true;

        return parent::getContent(); // TODO: Change the autogenerated stub

    }


    protected function onSubmit()
    {



/*        $filename = (new TmpPath())
            ->addPath('import.sql')
            ->getFilename();*/

        $filename='import.sql';

        $this->file->getFileRequest()->saveFile($filename);

        $conn = new MySqlConnection();
        $conn->connectionParameter->host = $this->host->getValue();
        $conn->connectionParameter->port = $this->port->getValue();
        $conn->connectionParameter->user = $this->user->getValue();
        $conn->connectionParameter->password = $this->password->getValue();


        $import = new MySqlDumpRestore();
        $import->connection=$conn;
        $import->filename = $filename;
        $import->restoreDumpFile();


        (new File($filename))->deleteFile();

        (new Debug())->write('Import finished');


        exit;


    }


}