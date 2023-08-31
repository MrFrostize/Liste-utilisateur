<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Utilisateurs</title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<div id="particles-js"></div>
    <h1>Liste des Utilisateurs</h1>
    <form action="index.php" method="get">
        <input type="text" name="firstnameSearch" placeholder="Rechercher par prénom" value="<?php echo htmlspecialchars($firstnameSearch); ?>">
        <input type="text" name="lastnameSearch" placeholder="Rechercher par nom" value="<?php echo htmlspecialchars($lastnameSearch); ?>">
        <input type="text" name="emailSearch" placeholder="Rechercher par email" value="<?php echo htmlspecialchars($emailSearch); ?>">
        <input type="submit" value="Rechercher">
    </form>
    <a href="index.php?action=create" class="create-user-btn">Créer un nouvel utilisateur</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Détails</th>
            </tr>
        </thead>
        <tbody>
    <?php
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($user['id']) . "</td>";
        echo "<td>" . htmlspecialchars($user['email']) . "</td>";
        echo "<td>" . htmlspecialchars($user['firstname']) . "</td>";
        echo "<td>" . htmlspecialchars($user['lastname']) . "</td>";
        echo "<td><a href='index.php?action=detail&id=" . $user['id'] . "'>Voir détails</a></td>"; 
        echo "</tr>";
    }
    ?>
</tbody>

    </table>
    <script src="/assets/js/particles-config.js"></script>
</body>
</html>
