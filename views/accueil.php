<?php  
    echo "<p>Bienvenue " .  $_SESSION['pseudo'] . "</p>"; 

?>

<a href="index.php?c=deconnexion&a=logout">
    <button class="" type="button"> Se déconnecter </button>
</a>

<?php
    $lesPosts = $pdo->afficherPosts();
?>
    <table>
        <thead>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Like</th>
            <th>Dislike</th>
        </thead>
        <tbody>
        <?php foreach($lesPosts as $unPost): ?>   
            <tr>
                <tb><?= $unPost["titre"]; ?> </tb>
                <tb><?= $unPost["contenu"]; ?></tb>
                <tb><?= $unPost["nbr_like"]; ?></tb>
                <tb><?= $unPost["nbr_dislike"]; ?></tb>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

