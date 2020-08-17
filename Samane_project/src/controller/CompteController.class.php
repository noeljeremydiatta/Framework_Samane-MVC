<?php
use libs\system\Controller;
class CompteController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function ajout()
    {
        return $this->view->load("compte/ajouter");
    }
}




?>