<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($user['id']) ? 'Fiche Utilisateur' : 'Créer un Utilisateur'; ?></title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<div id="particles-js"></div>

<h1><?php echo isset($user['id']) ? 'Fiche Utilisateur' : 'Créer un Utilisateur'; ?></h1>

<form action="index.php?action=<?php echo isset($user['id']) ? 'update&id=' . $user['id'] : 'create'; ?>" method="post">
    <div class="form-group">
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($user['firstname'] ?? ''); ?>">
    </div>
    
    <div class="form-group">
        <label for="lastname">Nom:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($user['lastname'] ?? ''); ?>">
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>">
    </div>
    
    <input type="submit" value="<?php echo isset($user['id']) ? 'Mettre à jour' : 'Créer'; ?>">
</form>

<?php if (isset($user['id'])): ?>
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
<?php endif; ?>

<a href="index.php" class="back-btn">Retour à la liste</a>

<script src="/assets/js/particles-config.js"></script>
</body>
</html>
