

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation de l'équipe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @media screen and (max-width : 1100px){
            .chart-section {
            display: inline;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            }
        }
        @media screen and (min-width : 1101px){
            .chart-section {
            flex: 1;
            display: inline;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            }
        }
        .chart-section {
            flex: 1;
            display: inline;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }
        #foo {
            width: 100%;
            bottom :0 ;
            background-color: rgb(50, 50, 50);
            color: white ;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 10px;
            font-size: 15px;
            margin: 0;
            margin-top: 0;
            padding-top: 2rem !important;
            padding-bottom: 1rem !important;
        }

        .text-body-secondary {
            --bs-text-opacity: 1;
            color: white !important ;
        }

        .youtube{
            color : red ;
        }
        .instagram{
            color :#fb92d1;
        }
        .facebook{
            color : rgb(67, 67, 242) ;
        }
        .linkedin{
            color : rgb(14, 171, 244) ;
        }
        .water {
            height: 15px;
        }
        .avofoot{
            margin-bottom: 257px;
        }
        .text{
            background-color: white;
            color: black;
            border-radius: 1em;
            border: solid 2px black;
            padding: 6px;
            margin: 3px;
            opacity: 0.5;
        }

        .text p{
            opacity: 1;
            font-weight: 800;
        }

        .text h2{
            opacity: 1;
            font-weight: 950;
        }

        #logo{
            width: 100px;
            height: auto;
            border-radius: 50%;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em 0;
        }
        main {
            flex-grow: 1;
            padding: 20px;
        }
        h1{
            text-align: center;
        }
        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }
        .text-section {
            flex: 1;
            margin-right: 20px;
            text-align: justify;
        }
        .text-section h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .text-section p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        canvas {
            width: 100% !important;
            height: 100% !important;
        }
        .team-container {
            margin-top: 50px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            justify-content: center;
            align-content: start;
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }
        .team-member {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 10px 20px;
            width: 200px; /* Largeur identique pour chaque membre */
            height: 250px; /* Hauteur identique pour chaque membre */
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: inline;
        }
        .team-container div{
            
        }
        .team-member:hover {
            transform: translate(5px, -5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
        .team-member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .team-member h3 {
            margin: 10px 0 5px;
            font-size: 1em;
        }
        .team-member p {
            margin: 0;
            font-size: 0.9em;
            color: #666;
        }
        .team-container:last-child {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .hover-info {
            position: fixed;
            top: 54%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 80%;
            height: 92%;
            max-width: 600px;
            padding: 20px;
            display: none;
            flex-direction: column;
            align-items: center;
            text-align: center;
            z-index: 1000;  
        }
        .hover-info img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .hover-info .graph img{
            width: 100%;
            border-radius: 0%;
            height: 100%;
        }
        .team-container .graph img{
            width: 100%;
            border-radius: 0%;
            height: 100%;
            margin: 0;
        }
        .hover-info h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }
        .hover-info p {
            font-size: 1.2em;
        }
        .close{
            margin-bottom: 2px;
        }
        section .scroller {
            overflow-y: hidden;
        }
        .scroller {
            overflow-y: scroll;
        }
        .navbar-scrolled{
            background-color: #000;
        }
        .navbar{
            transition: all 0.5s;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<?php
    require_once 'navbar.html';
?>
    <header>
        <h1>Statistiques et Équipe</h1>
        <p>Découvrez notre équipe et nos performances</p>
    </header>
    <main>
        <section class="content">
            <div class="text-section">
                <h2>À propos de notre équipe</h2>
                <p>
                    Notre équipe est composée de 11 membres talentueux, chacun apportant ses compétences uniques 
                    pour relever les défis. Nous travaillons ensemble pour atteindre nos objectifs et fournir 
                    des solutions innovantes dans divers domaines comme le développement web, le design et la gestion de projets.
                </p>
                <p>
                    Le graphique à droite présente une répartition de nos compétences principales, mettant en avant 
                    nos forces en développement, design et gestion. Cela reflète notre polyvalence et notre engagement.
                </p>
            </div>
            <div class="chart-section">
                <canvas id="teamChart"></canvas>
            </div>
        </section>
        </br>
        </br>
        </br>
        <h1>L'équipe</h1>
        </br>
        </br>
        <section class="team-container">
            <!-- Membres de l'équipe -->
            <div class="team-member scroller">
                <img src="images/Omar.jpg" alt="Photo du membre">
                <h3>OMAR ID EL MOUMEN</h3>
                <p>Chef d'équipe</p>
                <p id="hidden" hidden = "true">Omar est notre chef d'équipe dynamique et motivé, actuellement en troisième année de BUT Informatique. Il s'investit pleinement dans ses responsabilités, notamment en prenant en charge l'index de notre site web. Grâce à ses compétences et à son souci du détail, il a également amélioré significativement l'accessibilité de notre projet, rendant notre site plus inclusif et performant. Un véritable leader qui inspire confiance et donne le meilleur de lui-même pour atteindre nos objectifs communs.</p>
                <p class="graph"><img src="images/graph/Graphique_Omar.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Teo.jpg" alt="Photo du membre">
                <h3>TEO LEMESLE</h3>
                <p>Directeur de projet</p>
                <p>Développeur</p>
                <p id="hidden" hidden = "true">Téo est notre directeur de projet, un leader calme mais redoutablement efficace. Étudiant en deuxième année de BUT Informatique, il allie organisation et compétences techniques remarquables. En plus de sa gestion du projet, Téo brille en tant que développeur chevronné, prenant seul en charge la conception et le développement de la page body de notre site web, une tâche particulièrement complexe. Sa productivité et son sang-froid en font un atout essentiel pour notre équipe.</p>
                <p class="graph"><img src="images/graph/Graphique_Teo.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Mathew.jpg" alt="Photo du membre">
                <h3>MATHEW PRADES</h3>
                <p>Développeur</p>
                <p id="hidden" hidden = "true">Mathew est un développeur talentueux et enjoué, actuellement en deuxième année de BUT Informatique. D’un naturel calme et toujours de bonne humeur, il contribue à une ambiance positive au sein de l’équipe. Aux côtés de ses camarades, il travaille sur la page index du site, apportant sa rigueur et son esprit collaboratif pour garantir un résultat de qualité. Un membre essentiel à la cohésion et à la réussite de notre projet.</p>
                <p class="graph"><img src="images/graph/Graphique_Mathew.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Moi-meme.jpg" alt="Photo du membre">
                <h3>ELLIOT BIERNAT</h3>
                <p>Développeur</p>
                <p id="hidden" hidden = "true">Elliot est un développeur plein d’énergie et de créativité, actuellement en première année de BUT SD. Avec son côté déjanté et son humour communicatif, il contribue largement à la bonne ambiance du groupe. Cela ne l’empêche pas d’être un travailleur appliqué : il a joué un rôle clé dans la création de la page de crédits, mettant à profit son dynamisme pour enrichir le projet. Un atout précieux, aussi bien pour son talent que pour sa personnalité !</p>
                <p class="graph"><img src="images/graph/Graphique_Elliot.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Enrike.jpg" alt="Photo du membre">
                <h3>ENRIKE CHAMPION</h3>
                <p>Développeur</p>
                <p id="hidden" hidden = "true">Elliot est un développeur plein d’énergie et de créativité, actuellement en première année de BUT SD. Avec son côté déjanté et son humour communicatif, il contribue largement à la bonne ambiance du groupe. Cela ne l’empêche pas d’être un travailleur appliqué : il a joué un rôle clé dans la création de la page de crédits, mettant à profit son dynamisme pour enrichir le projet. Un atout précieux, aussi bien pour son talent que pour sa personnalité !</p>
                <p class="graph"><img src="images/graph/Graphique_Enrike.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Gabrielle.jpg" alt="Photo du membre">
                <h3>GABRIELLE DE BAETS</h3>
                <p>Stagiaire</p>
                <p id="hidden" hidden = "true">Gabrielle, étudiante en première année de BUT SD, est une personne pétillante et pleine d'humour, toujours de bonne humeur. Sa créativité débordante en fait une contributrice précieuse pour notre projet. Elle a joué un rôle clé dans des domaines variés, notamment le montage du podcast et la création du logo. Son énergie et ses idées originales apportent une touche unique et inspirante à l’équipe.</p>
                <p class="graph"><img src="images/graph/Graphique_Gabrielle.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Mohamed_1.jpg" alt="Photo du membre">
                <h3>MOHAMED BOUGHRARA</h3>
                <p>Web designer</p>
                <p id="hidden" hidden = "true">Mohamed Boughraras, étudiant en première année de BUT SD, est une personne calme et réfléchie, dotée d'excellentes idées. Sa créativité et son imagination débordante en font un véritable atout pour l’équipe. En tant que web designer, il a joué un rôle essentiel dans la conception des différents sites, apportant une touche esthétique et fonctionnelle qui reflète parfaitement sa vision et son talent. Un pilier incontournable du projet !</p>
                <p class="graph"><img src="images/graph/Graphique_Mohamed_1.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Mohamed_2.jpg" alt="Photo du membre">
                <h3>MOHAMED RAHMANI</h3>
                <p>Directeur défi Captcha</p>
                <p>Développeur</p>
                <p id="hidden" hidden = "true">Mohamed Rahamani, étudiant en troisième année de BUT Informatique, est une personne posée et déterminée, avec des idées claires et une vision précise de ses objectifs. Développeur talentueux, il a joué un rôle crucial dans la réalisation du projet Captcha, mettant à profit ses compétences techniques et sa rigueur pour garantir un résultat de grande qualité. Un membre fiable et efficace de l’équipe !</p>
                <p class="graph"><img src="images/graph/Graphique_Mohamed_2.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Romain.jpg" alt="Photo du membre">
                <h3>ROMAIN WAGNER</h3>
                <p>Développeur</p>
                <p id="hidden" hidden = "true">Romain, étudiant en troisième année de BUT Informatique, est une personne calme mais incroyablement productive. Développeur compétent et efficace, il a joué un rôle déterminant dans la réalisation du projet Captcha. Grâce à son sérieux et son savoir-faire, il a contribué à l’avancement et à la qualité de notre travail. Un atout précieux pour l’équipe !</p>
                <p class="graph"><img src="images/graph/Graphique_Romain.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Viturzen.jpg" alt="Photo du membre">
                <h3>VITHURZEN VILVARAJAHS</h3>
                <p>Développeur</p>
                <p id="hidden" hidden = "true">Vithurzen, étudiant en troisième année de BUT Informatique, est une personne calme et posée, mais d'une productivité remarquable. Développeur compétent et impliqué, il a joué un rôle clé dans la réalisation du projet Captcha, apportant rigueur et efficacité au travail. Un membre essentiel de l’équipe, sur qui l’on peut toujours compter pour des résultats de qualité.</p>
                <p class="graph"><img src="images/graph/Graphique_Virthurzen.png" alt="graph"></p>
            </div>
            <div class="team-member scroller">
                <img src="images/Leo_joyaux.jpg" alt="Photo du membre">
                <h3>LEO BERQUET</h3>
                <p>Directeur défi Ubisoft</p>
                <p id="hidden" hidden = "true">Léo, étudiant en première année de BUT SD, est une personne hilarante et pleine de folie, toujours prêt à détendre l’atmosphère. Cependant, derrière son côté déjanté se cache un travailleur efficace et productif. Doté d’une imagination débordante, il a mis à profit son esprit créatif et ses talents de gamer pour relever, à lui seul, le défi Ubisoft. Un véritable atout, aussi bien pour son talent que pour l’énergie qu’il apporte à l’équipe !</p>
                <p class="graph"><img src="images/graph/Graphique_Leo.png" alt="graph"></p>
            </div>
        </section>

    </main>
    <div id="hover-info" class="hover-info scroller">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <img src="" alt="Photo du membre">
        <h3></h3>
        <p></p>
        <p id="resultat"></p>
        <p id="graph" class = "graph"></p>
    </div>

    <script>
        const hoverInfo = document.getElementById('hover-info');
        const allDivs = document.querySelectorAll('.team-member');
        const Close = hoverInfo.querySelector('button');

        allDivs.forEach(div => {
            div.addEventListener('click', (info) => {
                const img = div.querySelector('img');
                const h3 = div.querySelector('h3');
                const p = div.querySelectorAll('p');

                if (img && h3 && p) {
                    console.log(p);
                    const imgSrc = img.src;
                    const name = h3.textContent;
                    let i = 0;
                    hoverInfo.querySelector('p').textContent = '';
                    while(i < p.length - 3){
                        const role = p[i].textContent;
                        hoverInfo.querySelector('p').textContent += role+', ';
                        i++;
                    }
                    const role = p[i].textContent;
                    hoverInfo.querySelector('p').textContent += role;
                    i++;
                    const resultat = p[i].textContent;
                    const resultat_finale = resultat;
                    i++;
                    const resultat_graph = p[i].children;

                    hoverInfo.querySelector('img').src = imgSrc;
                    hoverInfo.querySelector('h3').textContent = name;
                    hoverInfo.querySelector('#resultat').textContent = resultat_finale;
                    hoverInfo.querySelector('#graph').textContent = '';
                    hoverInfo.querySelector('#graph').append(resultat_graph[0].cloneNode(true));

                    hoverInfo.style.display = 'flex';
                }
            });

            Close.addEventListener('click', () => {
                hoverInfo.style.display = 'none';
            });
        });
    </script>
    <script>
        // Configuration du graphique
        const ctx = document.getElementById('teamChart').getContext('2d');
        const teamChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Développement', 'Design', 'Gestion de projet', 'Support', 'Autres'],
                datasets: [{
                    label: 'Compétences de l\'équipe',
                    data: [50, 15, 20, 10, 5],
                    backgroundColor: ['#4CAF50', '#FF9800', '#2196F3', '#9C27B0', '#FFC107'],
                    borderColor: '#fff',
                    borderWidth: 2,
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                resizable: true,
                                minSize: 12,
                                maxSize: 18,
                            }
                        }
                    }
                }
            }
        });
    </script>
<?php
require_once "footer.html";
?>