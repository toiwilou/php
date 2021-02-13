<?php require 'header.php' ?>

<?php require 'base.php' ?>

<div class="div-content">
    <h1 style="text-decoration: underline; color: blue;">Liste des élèves</h1>
    <div>
        <table style="margin-top: 50px;" border="1">
        <th>Index</th><th>Nom</th><th>Prénom</th><th>E-mail</th><th>Téléphone</th><th>Classe</th>
        <?php for ($i = 0 ; $i < count($eleves) ; $i++){ ?>
            <tr>
        <td><?php echo $i+1 ?></td>
        <td><?php echo $eleve->getNom() ?></td>
        <td><?php echo $eleve->getPrenom() ?></td>
        <td><?php echo $eleve->getEmail() ?></td>
        <td><?php echo $eleve->getTelephone() ?></td>
        <td><?php echo $eleve->getClasse() ?></td>
        </tr>
        <?php } ?>
        </table>
    </div>
</div>

<?php require 'footer.php' ?>