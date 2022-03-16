<?php
require_once 'Controller/ControllerEtudiant.php';
require_once 'View/view.php';

class Route
{


        private $ctrlEtudiant;

        public function __construct()
        {
                $this->ctrlEtudiant = new ControllerEtudiant();
        }

        public function routeRequest()
        {

                try {
                        if (isset($_GET['action'])) {
                                if ($_GET['action'] == 'AjouterEtudiant') {
                                        $view = new View("create");
                                        $view->generate(array('titre' => "formulaire"));
                                } else if ($_GET['action'] == 'ajouter') {
                                        $this->ctrlEtudiant->ajouter($_GET['id'], $_GET['nom'], $_GET['prenom'], $_GET['age'], $_GET['cne']);
                                } else if ($_GET['action'] == 'supprimer') {
                                        $this->ctrlEtudiant->supprimer($_GET['id']);
                                } else if ($_GET['action'] == 'modifier') {
                                        $this->ctrlEtudiant->modifier($_GET['id']);
                                } else if ($_GET['action'] == 'update') {
                                        $this->ctrlEtudiant->update($_GET['id'], $_GET['nom'], $_GET['prenom'], $_GET['age'], $_GET['cne']);
                                } else if ($_GET['action'] == 'ListeEtudiant') {
                                        $this->ctrlEtudiant->Liste();
                                } else {
                                        throw new Exception("Action not valid");
                                }
                        } else {
                                throw new Exception("Controller not valid");
                        }
                } catch (Exception $e) {

                        $this->erreur($e->getMessage());
                }
        }
        // Affiche une erreur
        private function erreur($msgErreur)
        {

                $view = new View("Error");
                $view->generate(array('msgErreur' => $msgErreur));
        }
}
