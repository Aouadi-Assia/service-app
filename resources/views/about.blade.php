<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>À propos de nous</h1>
        <img src=<img src="/images/about.jpg" class="img-fluid mb-4" alt="À propos de nous">
        <p>Nous sommes une entreprise innovante dédiée à fournir des solutions de qualité à nos clients. Notre équipe est composée d'experts dans divers domaines, prêts à répondre à vos besoins.</p>
        
        <h2>Notre Mission</h2>
        <p>Notre mission est de transformer vos idées en réalité. Nous croyons en l'innovation, la qualité et le service client.</p>

        <h2>Notre Équipe</h2>
        <p>Notre équipe est composée de professionnels passionnés qui travaillent ensemble pour atteindre l'excellence. Nous valorisons la collaboration et l'engagement.</p>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Mon Application. Tous droits réservés.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>