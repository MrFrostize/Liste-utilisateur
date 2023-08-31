<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche Utilisateur</title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<div id="particles-js"></div>
    <h1>Fiche Utilisateur</h1>

    <form action="index.php?action=update&id=<?php echo $user['id']; ?>" method="post">
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($user['firstname']); ?>">
        
        <label for="lastname">Nom:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($user['lastname']); ?>">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>">
        
        <input type="submit" value="Mettre à jour">
    </form>

    <div class="user-details">
        <h2>Informations de l'utilisateur</h2>
        <table>
            <tr>
                <th>ID</th>
                <td><?php echo htmlspecialchars($user['id']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td><?php echo htmlspecialchars($user['firstname']); ?></td>
            </tr>
            <tr>
                <th>Nom</th>
                <td><?php echo htmlspecialchars($user['lastname']); ?></td>
            </tr>
        </table>
    </div>

    <a href="index.php">Retour à la liste</a>

    <script src="/assets/js/particles-config.js"></script>
</body>
</html>
