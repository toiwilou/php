<?php require 'header.php' ?>

<div class="div-content">
    <form action="form.php" method="POST">
    <div class="form-group">
            <label for="exampleFormControlInput1">Nom</label>
            <input name="nom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom *">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Prénom</label>
            <input name="prenom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre prénom *">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">E-mail</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Votre e-mail... *">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Téléphone</label>
            <input name="telephone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre numéro de téléphone *">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">S'inscrire en</label>
            <select name="classe" class="form-control">
                <option value="">Choisir un niveau *</option>
                <option value="Cours régulier">Première année</option>
                <option value="Cours régulier">Deuxième année</option>
                <option value="Cours régulier">Troisième année</option>
            </select>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Valider">
        </div>
    </form>
</div>

<?php require 'footer.php' ?>