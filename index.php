<?php
require 'head.php';
?>
<title>Document</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>
        <?php
        echo (isset($_SESSION['nom'])) ? 'Bonjour ' . $_SESSION['nom'] : 'Bonjour inconnu';
        ?>
    </h1>
    <form action="crea-json.php" method="post">
        <label for="nom">Nom: </label>
        <input type="text" name="nom" required>
        <label for="prenom">Prénom: </label>
        <input type="text" name="prenom" required>
        <label for="age">Age: </label>
        <input type="number" name="age" required>
        <input type="submit" value="Valider">
    </form>

    <table>
        <thead>
            <tr>
                <td>COOKIE</td>
                <td>Valeur</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nom</td>
                <td><?php echo $_COOKIE['nom'] ?></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><?php echo $_COOKIE['prenom'] ?></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><?php echo $_COOKIE['age'] ?></td>
            </tr>
        </tbody>
    </table>
    <?php
    require 'footer.php';
    ?>