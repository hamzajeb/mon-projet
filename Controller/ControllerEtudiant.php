<?php
require_once 'Model/Etudiant.php';
require_once 'Model/EtudiantTransaction.php';
require_once 'View/view.php';

class ControllerEtudiant
{
    private $etudiant;
    private $etudiantTransaction;

    public function __construct()
    {

        $this->etudiant = new Etudiant();
        $this->etudiantTransaction = new EtudiantTransaction();
    }
    // Affiche la liste de tous les billets du blog 
    public function ajouter($id, $nom, $prenom, $age, $cne)

    {   
        if(!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['age']) && !empty($_GET['cne'])){
           
            $etu = new Etudiant($id, $nom, $prenom, $age, $cne);
            
                    $this->etudiantTransaction->add($etu);
                    $etudiants = $this->etudiantTransaction->getList();
                    $view = new View("Liste");
                    $view->generate(array('etudiants' => $etudiants)); 
        }
        else{
            $msgErreur = "l'ajout est impossible! Remplir tout les champs s'il vous plaît";
            $view = new View("Error");
            $view->generate(array('msgErreur' => $msgErreur));
    }
    }

    public function supprimer($id)
    {
        $this->etudiantTransaction->delete($id);
        $etudiants = $this->etudiantTransaction->getList();
        $view = new View("Liste");
        $view->generate(array('etudiants' => $etudiants));
    }

    public function modifier($id)
    {
        $etudiant = $this->etudiantTransaction->get($id);
        $view = new View("Modifier");
        $view->generate(array('etudiant' => $etudiant));
    }
    public function update($id, $nom, $prenom, $age, $cne)
    {
        $etudiant1 = new Etudiant($id, $nom, $prenom, $age, $cne);
        $this->etudiantTransaction->updates($etudiant1, $id);
        $etudiants = $this->etudiantTransaction->getList();
        $view = new View("Liste");
        $view->generate(array('etudiants' => $etudiants));
    }

    public function Liste()
    {
        $etudiants = $this->etudiantTransaction->getList();
        $view = new View("Liste");
        $view->generate(array('etudiants' => $etudiants));
    }
}
