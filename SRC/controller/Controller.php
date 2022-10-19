<?php
// require_once("model/mysql/RecettesStorageSQL.php");
// require_once("model/mysql/PlatSQL.php");
// require_once("model/mysql/CategorySQL.php");
// require_once("model/mysql/IngedientSQL.php");

class Controller
{

    protected $view;
    // protected InterfaceStorage $recettesStorage;

    public function __construct(View $view)
    {
        $this->view = $view;

        // $this->recettesStorage = new RecettesStorageSQL($this->view);
        // $this->platStorage = new PlatSQL($this->view);
        // $this->categoryStorage = new CategorySQL($this->view);
        // $this->ingedientStorage = new IngedientSQL($this->view);
    }
    
}
