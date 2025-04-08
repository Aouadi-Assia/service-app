<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Mon Application</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">À propos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Nos Services</h1>
        <img src="/images/services.jpg" class="img-fluid mb-4" alt="Nos Services">
        <p>Nous offrons une gamme complète de services pour répondre à vos besoins :</p>
        <ul>
            <li><strong>Consultation :</strong> Nous offrons des consultations personnalisées pour comprendre vos besoins et vous proposer des solutions adaptées.</li>
            <li><strong>Développement Web :</strong> Création de sites web sur mesure, optimisés pour le référencement et adaptés à tous les appareils.</li>
            <li><strong>Marketing Digital :</strong> Stratégies de marketing digital pour augmenter votre visibilité en ligne et attirer plus de clients.</li>
            <li><strong>Support Technique :</strong> Assistance technique pour résoudre tous vos problèmes informatiques rapidement et efficacement.</li>
        </ul>

        <h2>Pourquoi Choisir Nos Services ?</h2>
        <p>Nous nous engageons à fournir des services de haute qualité, avec un accent sur la satisfaction du client. Notre équipe est toujours prête à aller au-delà pour vous aider à atteindre vos objectifs.</p>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Mon Application. Tous droits réservés.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>