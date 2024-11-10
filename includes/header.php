<header>
    <nav>
        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>
            <a href="profil.php">Profil</a>
<<<<<<< HEAD
            <a href="my-events.php">Mes événements</a>
=======
<<<<<<< HEAD
=======
            <a href="mes-events.php">Mes événements 2</a>
>>>>>>> conflit
>>>>>>> 7a0440a26c7b114caeba43fe04a5e73dfde8420e
            <a href="event-list.php">Lister événements</a>
            <a href="creation-event.php">Créer événement</a>
            <a href="logout.php">Déconnexion</a>
        <?php else : ?>
            <a href="index.php">Accueil</a>
            <a href="inscription.php">Inscription</a>
        <?php endif; ?>
    </nav>
</header>