<?php
class EtudiantTransaction
{

    private $_db; // Instance de PDO

    public function __construct()
    {
        $this->_db = new PDO('mysql:host=localhost;dbname=student;charset=utf8', 'root', '');
    }
    public function add($etu)
    {
        $q = $this->_db->prepare("INSERT INTO étudiant (nom, prenom, age,cne) VALUES(:nom, :prenom, :age,:cne )");
        $q->bindValue(':nom', $etu->getNom());
        $q->bindValue(':prenom', $etu->getPrenom());
        $q->bindValue(':age', $etu->getAge(), PDO::PARAM_INT);
        $q->bindValue(':cne', $etu->getcne());
      
        $q->execute();
    }
    public function delete($id)
    {
        $this->_db->exec('DELETE FROM étudiant WHERE id_etudiant = ' . $id);
    }
    public function get($id)
    {
        $id = (int) $id;
        $q = $this->_db->query('SELECT id_etudiant ,nom, prenom, age,cne FROM étudiant WHERE id_etudiant = ' . $id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Etudiant($donnees['id_etudiant'], $donnees['nom'], $donnees['prenom'], $donnees['age'],  $donnees['cne']);
    }
    
    
    public function getList()
    {

        $etds = [];
        $q = $this->_db->query('SELECT * FROM étudiant ');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            // die($donnees['nom']);
            $p = new Etudiant($donnees['id_etudiant'], $donnees['nom'], $donnees['prenom'], $donnees['age'], $donnees['cne']);

            array_push($etds, $p);
            //$persos.push($p) ; 
        }
        return $etds;
    }
    public function updates($etu, $id)
    {
        $q = $this->_db->prepare('UPDATE étudiant SET id_etudiant=:id,nom = :nom, prenom = :prenom, age = :age,cne =:cne WHERE id_etudiant =' . $id);
        $q->bindValue(':nom', $etu->getNom());
        $q->bindValue(':prenom', $etu->getPrenom());
        $q->bindValue(':age', $etu->getAge(), PDO::PARAM_INT);
        $q->bindValue(':cne', $etu->getcne());
        $q->bindValue(':id', $etu->getId());
        $q->execute();
    }
    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}
