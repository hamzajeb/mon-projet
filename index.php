<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--boostap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
if (isset($_POST['envoi'])) {
    header("location: index1.php?action=" . $_POST['action']);
}
?>

<body>

    <form method="post" style="width: 50%;margin:15% auto;border:5px solid #FDAC53;border-radius:30px;padding:30px;">
        <div class="mb-3">
            
            <label class="form-label" style="font-size: 20px;font-weight:bold;color:#FDAC53">Action :</label><br>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" type="text" class="form-control" name="action" id="id"><br>
                <option selected>------selectionner une action-------</option>
                <option value="AjouterEtudiant">Ajouter un Etudiant</option>
                <option value="ListeEtudiant">Afficher la Liste des étudiants</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="envoi" style="background-color:#FDAC53; border-color:#FDAC53;">Submit</button>
    </form>
</body>

</html>