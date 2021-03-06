<?php
// Récupération du contrôleur principal MainController
require_once("./controllers/MainController.controller.php");
// Récupération des données contenues dans le model visiteur
require_once("./models/Visiteur/Visiteur.model.php");

// création de l'héritage de notre class MaintController
class VisiteurController extends MainController{
    private $visiteurManager;

// constructeur avec l'instanciaton du visiteur Manager
    public function __construct(){
        $this->visiteurManager = new VisiteurManager();
    }
  
    public function accueil(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Accueil",
            "view" => "views/Visiteur/accueil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function alcool(){
        $data_page = [
            "page_description" => "Page des alcools",
            "page_title" => "Alcools",
            "view" => "views/Visiteur/alcool.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function cocktail(){
        $data_page = [
            "page_description" => "Page des cocktails",
            "page_title" => "Cocktails",
            "view" => "views/Visiteur/cocktail.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function soft(){
        $data_page = [
            "page_description" => "Page des softs",
            "page_title" => "Softs",
            "view" => "views/Visiteur/soft.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function login(){
        $data_page = [
            "page_description" => "Page de connexion",
            "page_title" => "Page de connexion",
            "view" => "views/Visiteur/login.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    
    public function creerCompte(){
        $data_page = [
            "page_description" => "Page de création de compte",
            "page_title" => "Page de création de compte",
            "view" => "views/Visiteur/creerCompte.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    
    public function pageErreur($msg){
        parent::pageErreur($msg);
    }
}