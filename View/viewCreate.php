<div style="background-color:rgb(238 238 238/31%);width: 50%;margin:0 25%;padding:20px;border-radius:20px;border:2px solid #FDAC53;">
    <form action="index1.php" method="get">
        <div style="text-align: center;font-family:  'Pacifico', cursive;font-size:30px;"><?php echo $titre; ?></div>
        <div class="mb-3">
            <input type="hidden" name="action" class="form-control" value="ajouter">
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;"></label>
            <input type="hidden" name="id" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;">Prénom</label>
            <input type="text" name="prenom" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;">Age</label>
            <input type="text" name="age" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label" style="font-family:  'Pacifico', cursive;font-size:20px;">Cne</label>
            <input type="text" name="cne" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" style="background-color:#FDAC53 ;border:none">Submit</button>
    </form>
</div>