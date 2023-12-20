<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Site</title>
    <!-- Inclure le fichier CSS de Tailwind -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        /* Ajouter un style pour que le header soit fixé en haut */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #f7fafc; /* Gris clair pour le header */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Ombre sous le header */
        }

        /* Ajouter un style pour espacer le contenu sous le header */
        body {
            margin-top: 64px; /* Ajustez selon la hauteur de votre header */
        }
    </style>
</head>
<body>

    <header class="bg-gray-100 p-4 flex justify-between items-center">
        <!-- Logo à gauche avec un lien vers la page d'accueil -->
        <a href="/" class="text-blue-800">
            <img src="image/Logo.png" alt="Logo" class="h-10">
        </a>

        <!-- Liens à droite -->
        <nav class="flex items-center space-x-4">
            <a href="#" class="text-gray-800 hover:underline">Accueil</a>
            <a href="#" class="text-gray-800 hover:underline">Étude</a>
            <a href="#" class="text-gray-800 hover:underline">Expérience</a>
            <a href="#" class="text-gray-800 hover:underline">Compétence</a>
            <a href="#" class="text-gray-800 hover:underline">Projet</a>
            <a href="#" class="text-gray-800 hover:underline">Veille</a>
        </nav>
    </header>

    <!-- Le reste du contenu de votre page va ici -->

</body>
</html>
