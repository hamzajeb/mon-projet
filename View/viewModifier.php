<div style="background-color:rgb(238 238 238/31%);width: 50%;margin:0 25% 70px;padding:20px;border-radius:20px;border:2px solid #FDAC53;">
    <form action="index1.php" method="get">
        <div style="text-align: center;font-family:  'Pacifico', cursive;font-size:30px;">Modification</div>
        <div class="mb-3">
            <input type="hidden" name="action" class="form-control" value="update">
        </div>
        <div class="mb-3">
            <input type="hidden" name="id" class="form-control" value=<?= $etudiant->getId() ?>>
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;">nom</label>
            <input type="text" name="nom" class="form-control" value=<?= $etudiant->getNom() ?>>
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;">prenom</label>
            <input type="text" name="prenom" class="form-control" value=<?= $etudiant->getPrenom() ?>>
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;">age</label>
            <input type="text" name="age" class="form-control" value=<?= $etudiant->getAge() ?>>
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;">cne</label>
            <input type="text" name="cne" class="form-control" value=<?= $etudiant->getcne() ?>>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color:#FDAC53 ;border:none">Modifier</button>
    </form>
</div>