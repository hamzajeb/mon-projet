<table style="border:2px solid #FDAC53;width:68%;margin:0 15%;margin-bottom:50px " class="table table-dark">

    
    <th style="color:#FDAC53;font-size:25px;font-family:  'Pacifico', cursive; text-align: center;">Nom</th>
    <th style="color:#FDAC53;font-size:25px;font-family:  'Pacifico', cursive; text-align: center;">Prénom</th>
    <th style="color:#FDAC53;font-size:25px;font-family:  'Pacifico', cursive; text-align: center;">Age</th>
    <th style="color:#FDAC53;font-size:25px;font-family:  'Pacifico', cursive; text-align: center;">Cne</th>
    <th style="color:#FDAC53;font-size:25px;font-family:  'Pacifico', cursive; text-align: center;">Modification</th>
    <th style="color:#FDAC53;font-size:25px;font-family:  'Pacifico', cursive; text-align: center;">Suppression</th>

    <?php foreach ($etudiants as $etudiant) : ?>
        <tr>
            
            <td style="font-size:25px;font-family:  'Pacifico', cursive; text-align: center;"><?= $etudiant->getNom() ?></td>
            <td style="font-size:25px;font-family:  'Pacifico', cursive; text-align: center;"><?= $etudiant->getPrenom() ?></td>
            <td style="font-size:25px;font-family:  'Pacifico', cursive; text-align: center;"><?= $etudiant->getAge() ?></td>
            <td style="font-size:25px;font-family:  'Pacifico', cursive; text-align: center;"><?= $etudiant->getcne() ?></td>

            <td><a href="<?= "index1.php?action=modifier&id=" . $etudiant->getId(); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background-color: #FDAC53;font-family:  'Pacifico', cursive;border:none; display: block; margin-left: auto; margin-right: auto; width:150px;">modifier</a></td>
            <td><a href="<?= "index1.php?action=supprimer&id=" . $etudiant->getId(); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background-color: #FDAC53;font-family:  'Pacifico', cursive;border:none; display: block; margin-left: auto; margin-right: auto; width:150px; ">supprimer</a></td>
        </tr>
    <?php endforeach; ?>
</table>