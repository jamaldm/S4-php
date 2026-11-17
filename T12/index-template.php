<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MON PORTFOLIO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <h2>JAMAL DMAMI</h2>
            <a href="">Accueil</a>
            <a href="">À propos</a>
            <a href="">Contact me</a>
        </div>
        <img src="images/Gemini_Generated_Image_1egzgt1egzgt1egz.jpg" alt="photoprofil">
    </header>
    <main>
        <section>
            <h2 class="nomsection">A PROPOS</h2>
            <div class="apropos">
                <img src="images/jamal-bureau-frame-nobg (2).png" alt="photo bureau">
                <p>Je m’appelle Jamal Dmami, apprenant en développement web. J’apprends à créer des sites avec HTML,
                     CSS et JavaScript, en accordant de l’importance au design et à une présentation claire. 
                     Je développe aussi peerIQ, une plateforme sociale qui permet de discuter et de jouer entre amis.
                      À travers mes projets, je progresse, j’expérimente de nouvelles 
                      idées et je construis peu à peu mon expérience.</p>
            </div>
        </section>

        <h2 class="nomsection">MES PROJETS</h2>
        <section class="lescartes">
         <?php foreach ($projets as $projet): ?>
        <div class="carte">
        <h2><?= htmlspecialchars($projet['titre']) ?></h2>
        <img src="<?= htmlspecialchars($projet['image']) ?>" alt="<?= htmlspecialchars($projet['titre']) ?>">
        <p><?= htmlspecialchars($projet['description']) ?></p>
    </div>
<?php endforeach; ?>

        </section>
    </main>
    <footer>
        <h2 class="nomsection">CONTACTER MOI</h2>
        <div class="contactme">
            <a href=""><img src="images/instagram.png" alt="instagramicon"></a>
            <a href=""><img src="images/Telegram_logo.svg.webp" alt="telegramicon"></a>
        </div>
    </footer>
</body>
</html>
