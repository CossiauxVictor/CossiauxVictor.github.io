<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        #textEffect {
            white-space: nowrap;
            overflow: hidden;
            border-right: 2px solid #000; /* Ajustez la couleur de la bordure selon vos besoins */
            font-size: 250%;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const textElement = document.getElementById('textEffect');
            const textContent = 'Comment aller vous ?'; // Remplacez par le texte que vous souhaitez afficher

            function typeWriter(text, i, cb) {
                if (i < text.length) {
                    textElement.innerHTML += text.charAt(i);
                    setTimeout(function () {
                        typeWriter(text, i + 1, cb);
                    }, 75); // Ajustez la vitesse d'écriture ici (en millisecondes)
                } else {
                    setTimeout(cb, 1000); // Temps d'attente avant de commencer à supprimer
                }
            }

            function deleteText(cb) {
                const currentText = textElement.innerHTML;
                if (currentText.length > 0) {
                    textElement.innerHTML = currentText.slice(0, -1);
                    setTimeout(function () {
                        deleteText(cb);
                    }, 75); // Ajustez la vitesse de suppression ici (en millisecondes)
                } else {
                    cb();
                }
            }

            function startTextAnimation() {
                typeWriter(textContent, 0, function () {
                    deleteText(startTextAnimation);
                });
            }

            startTextAnimation();
        });
    </script>
</head>
<body class="bg-gray-200">
    <?php require_once('\page\header.html');?>
    <!-- <iframe src="page/header.html">-->
        <div class="relative h-screen bg-gray-800 flex items-center">

        <!-- Image en arrière-plan -->
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="image/index/Fond.png" alt="Image 2">
        </div>

        <div class="relative z-10 ml-auto mr-auto text-center text-white">
            <h1 class="text-6xl font-bold">Bonjour, je suis Victor Cossiaux</h1>
            <div id="textEffect"></div>
        </div>

    </div>


 <br>
 <div class="flex justify-center">
    <div class="bg-white rounded-lg p-6 sm:w-4/5">
        <p>Moi ça va ! Actuellement, je suis en 2ème année de BTS SIO. Désolé, je ne vous ai pas dit, si vous n'avez pas de temps, vous pouvez télécharger mon CV.</p>
        
        <!-- Ajoutez un bouton ici -->
        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Télécharger CV</button>

        <p>Du coup, je disais que je suis en 2ème année de BTS SIO SLAM à Saint Luc Cambrai.<br> Si vous ne savez pas ce que signifie BTS SIO SLAM, pas de problème, c'est une formation (Bac +2) en Services informatiques aux organisations, avec une option solutions logicielles et applications métiers.</p>
    </div>
</div>

    

<br>


    <!-- <p>Mais à côté de mes études, j'ai des passions</p>

    Ajoutez des encadrés avec des images ici
    <div class="flex space-x-4">
        <div class="max-w-xs rounded overflow-hidden shadow-lg">
            <img class="w-full" src="lien_de_votre_image1.jpg" alt="Image 1">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Titre de l'image 1</div>
                <p class="text-gray-700 text-base">Description de l'image 1.</p>
            </div>
        </div>

        <div class="max-w-xs rounded overflow-hidden shadow-lg">
            <img class="w-full" src="lien_de_votre_image2.jpg" alt="Image 2">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Titre de l'image 2</div>
                <p class="text-gray-700 text-base">Description de l'image 2.</p>
            </div>
        </div>
    </div> 
    <iframe src="page/footer.html">-->
    <?php require_once('\page\footer.html');?>
</body>
</html>