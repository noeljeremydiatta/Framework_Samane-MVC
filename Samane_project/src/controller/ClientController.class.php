<?php
use libs\system\Controller;
class ClientController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function ajout()
    {
        return $this->view->load("client/ajouter");
    }
}




?>