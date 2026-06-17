<?php // Portfolio de Fatma Sliti ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio de Fatma</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="mediaqueries.css" />
</head>

<body>
  <nav id="desktop-nav">
    <div class="logo">Fatma Sliti</div>
    <div>
      <ul class="nav-links">
        <li><a href="#about" data-i18n="nav-about">À propos</a></li>
        <li><a href="#experience" data-i18n="nav-experience">Expérience</a></li>
        <li><a href="#projects" data-i18n="nav-projects">Projets</a></li>
        <li><a href="#contact" data-i18n="nav-contact">Contact</a></li>
        <li><button class="btn btn-lang" onclick="toggleLanguage()" data-i18n="lang-btn">EN</button></li>
      </ul>
    </div>
  </nav>
  <nav id="hamburger-nav">
    <div class="logo">Fatma Sliti</div>
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu-links">
        <li><a href="#about" onclick="toggleMenu()" data-i18n="nav-about">À propos</a></li>
        <li><a href="#experience" onclick="toggleMenu()" data-i18n="nav-experience">Expérience</a></li>
        <li><a href="#projects" onclick="toggleMenu()" data-i18n="nav-projects">Projets</a></li>
        <li><a href="#contact" onclick="toggleMenu()" data-i18n="nav-contact">Contact</a></li>
        <li><button class="btn btn-lang" onclick="toggleLanguage()" data-i18n="lang-btn">EN</button></li>
      </div>
    </div>
  </nav>
  <section id="profile">
    <div class="section__pic-container profile-pic">
      <img class="profile-pic" src="./assets/fatmaa.png" alt="Photo de profil de Fatma Sliti" />
    </div>
    <div class="section__text">
      <p class="section__text__p1" data-i18n="profile-greeting">Bonjour, je suis</p>
      <h1 class="title">Fatma Sliti</h1>
      <p class="section__text__p2" data-i18n="profile-title">Développeuse Frontend</p>
      <div class="btn-container">
        <button class="btn btn-color-2" onclick="window.open('./assets/CV-Fatma-Sliti-FR.pdf')" data-i18n="btn-cv">
          Télécharger le CV
        </button>
        <button class="btn btn-color-1" onclick="location.href='./#contact'" data-i18n="btn-contact">
          Me contacter
        </button>
      </div>
      <div id="socials-container">
        <img src="./assets/linkedin.png" alt="Mon profil LinkedIn" class="icon"
          onclick="location.href='https://www.linkedin.com/in/fatma-sliti/'" />
        <img src="./assets/github.png" alt="Mon profil Github" class="icon"
          onclick="location.href='https://github.com/FatmaSliti/'" />
      </div>
    </div>
  </section>
  <section id="about">
    <p class="section__text__p1" data-i18n="about-subtitle">En savoir plus</p>
    <h1 class="title" data-i18n="about-title">À propos de moi</h1>
    <div class="section-container">
      <div class="about-details-container">
        <div class="about-containers">
          <div class="details-container">
            <img src="./assets/experience.png" alt="Icône expérience" class="icon" />
            <h3 data-i18n="about-exp-label">Expérience</h3>
            <p data-i18n-html="about-exp-value">2+ ans <br />Développement Full Stack</p>
          </div>
          <div class="details-container">
            <img src="./assets/education.png" alt="Icône formation" class="icon" />
            <h3 data-i18n="about-edu-label">Formation</h3>
            <p data-i18n-html="about-edu-value">Licence en Informatique <br /> Génie Logiciel</p>
            <p data-i18n-html="about-edu-value2">Master en Informatique <br /> Systèmes, réseau et cloud computing</p>
          </div>
        </div>
        <div class="text-container">
          <p data-i18n="about-text">
            Depuis toujours, le design occupe une place importante dans ma vie. Ce qui a commencé par de simples croquis d'interfaces dans mes cahiers d'école est devenu, au fil du temps, une véritable passion pour la création d'expériences numériques intuitives et esthétiques.

Mon intérêt pour le développement Frontend est né de cette envie de concevoir des interfaces à la fois fonctionnelles, agréables à utiliser et visuellement attractives. Grâce à ma formation en informatique et à mon sens du design, je suis en mesure de transformer des idées en solutions numériques modernes, centrées sur les besoins des utilisateurs.

Aujourd'hui, j'aime relever de nouveaux défis, apprendre continuellement et participer à la création d'applications web offrant une expérience utilisateur de qualité.
          </p>
        </div>
      </div>
    </div>
    <img src="./assets/arrow.png" alt="Icône flèche" class="icon arrow" onclick="location.href='./#experience'" />
  </section>
  <section id="experience">
    <p class="section__text__p1" data-i18n="exp-subtitle">Découvrez mon</p>
    <h1 class="title" data-i18n="exp-title">Expérience</h1>
    <div class="experience-details-container">
      <div class="about-containers">
        <div class="details-container">
          <h2 class="experience-sub-title" data-i18n="exp-frontend">Développement Frontend</h2>
          <div class="article-container">
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>HTML</h3>
                <p data-i18n="skill-exp">Expérimentée</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>CSS</h3>
                <p data-i18n="skill-exp">Expérimentée</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>JavaScript</h3>
                <p data-i18n="skill-inter">Intermédiaire</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>ReactJs</h3>
                <p data-i18n="skill-exp">Expérimentée</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>TypeScript</h3>
                <p data-i18n="skill-basic">Notions de base</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>Bootstrap</h3>
                <p data-i18n="skill-exp">Expérimentée</p>
              </div>
            </article>
          </div>
        </div>
        <div class="details-container">
          <h2 class="experience-sub-title" data-i18n="exp-backend">Développement Backend</h2>
          <div class="article-container">
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>MongoDB</h3>
                <p data-i18n="skill-basic">Notions de base</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>Python</h3>
                <p data-i18n="skill-inter">Intermédiaire</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>FastAPI</h3>
                <p data-i18n="skill-basic">Notions de base</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>Django</h3>
                <p data-i18n="skill-basic">Notions de base</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>Node Js</h3>
                <p data-i18n="skill-basic">Notions de base</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>RestAPI</h3>
                <p data-i18n="skill-exp">Expérimentée</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>Docker</h3>
                <p data-i18n="skill-inter">Intermédiaire</p>
              </div>
            </article>
            <article>
              <img src="./assets/checkmark.png" alt="Icône expérience" class="icon" />
              <div>
                <h3>Git</h3>
                <p data-i18n="skill-exp">Expérimentée</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <img src="./assets/arrow.png" alt="Icône flèche" class="icon arrow" onclick="location.href='./#projects'" />
  </section>
  <section id="projects">
    <p class="section__text__p1" data-i18n="proj-subtitle">Parcourez mes récents</p>
    <h1 class="title" data-i18n="proj-title">Projets</h1>
    <div class="experience-details-container">
      <div class="about-containers cards-container ">
        <h1 class="underlined" data-i18n="proj-react-title">Projets React JS</h1>
        <div class="extra-container">
          <div class="alone details-container color-container ">
            <div class="article-container alone">
              <img src="./assets/easyrecipe.png" alt="Projet 2" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-easy-recipes">Recettes Faciles</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/FatmaSliti/react-easy-recipes-site'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://react-easy-recipe-site.vercel.app/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
        </div>
        <div class="extra-container">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/att.png" alt="Projet 2" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title smaller" data-i18n="proj-market">Gestion de Marché</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/FatmaSliti/react-easy-recipes-site'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://react-easy-recipe-site.vercel.app/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/foodOrder.png" alt="Projet 1" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-food">Commande de Repas</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/gpt.png" alt="Projet 1" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-gpt">GPT3</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
        </div>
        <div class="extra-container">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/expense.png" alt="Projet 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-expense">Suivi des Dépenses</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/courseTracker.png" alt="Projet 1" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-course">Suivi de Cours</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/memegenerator.png" alt="Projet 1" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-meme">Générateur de Mèmes</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
        </div>
        <div class="extra-container">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/quiz.png" alt="Projet 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-quiz">Application Quiz</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/FatmaSliti/react-quiz-app'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://react-quiz-app-lyart-zeta.vercel.app/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/todoapp.png" alt="Projet 2" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-todo">Liste de Tâches</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/poster.png" alt="Projet 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-poster">Application Affiche</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
        </div>
        <h1 class="underlined" data-i18n="proj-html-title">Projets HTML/CSS</h1>
        <div class="extra-container">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/temp1.png" alt="Projet 1" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-temp1">Modèle 1</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/temp2.png" alt="Projet 2" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-temp2">Modèle 2</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/FatmaSliti/HTML-CSS-Template2'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/temp3.png" alt="Projet 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-temp3">Modèle 3</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
        </div>

        <h1 class="underlined" data-i18n="proj-challenges-title">Défis Frontend Mentor</h1>
        <div class="extra-container">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/challenge1.png" alt="Projet 1" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-chat">App de Chat</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/challenge5.png" alt="Projet 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-qr">QR Code</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/challenge6.png" alt="Projet 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-stats">Carte Aperçu Statistiques</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
        </div>

        <div class="extra-container">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/challenge4.png" alt="Projet 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-product">Carte Aperçu Produit</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/challenge2.png" alt="Projet 2" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-four-cards">Section quatre cartes</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/challenge3.png" alt="Projet 3" class="project-img" />
            </div>
            <h2 class="experience-sub-title project-title" data-i18n="proj-huddle">Page d'accueil Huddle</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'" data-i18n="btn-live">
                Démo en ligne
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="./assets/arrow.png" alt="Icône flèche" class="icon arrow" onclick="location.href='./#contact'" />
  </section>
  <section id="contact">
    <p class="section__text__p1" data-i18n="contact-subtitle">Entrer en contact</p>
    <h1 class="title" data-i18n="contact-title">Me Contacter</h1>
    <div class="contact-info-upper-container">
      <div class="contact-info-container">
        <img src="./assets/email.png" alt="Icône email" class="icon contact-icon email-icon" />
        <p><a href="mailto:fatmasliti289@gmail.com">fatmasliti289@gmail.com</a></p>
      </div>
      <div class="contact-info-container">
        <img src="./assets/linkedin.png" alt="Icône LinkedIn" class="icon contact-icon" />
        <p><a href="https://www.linkedin.com/in/fatma-sliti/">LinkedIn</a></p>
      </div>
    </div>
  </section>
  <footer>
    <nav>
      <div class="nav-links-container">
        <ul class="nav-links">
          <li><a href="#about" data-i18n="footer-about">À propos</a></li>
          <li><a href="#experience" data-i18n="footer-experience">Expérience</a></li>
          <li><a href="#projects" data-i18n="footer-projects">Projets</a></li>
          <li><a href="#contact" data-i18n="footer-contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <p data-i18n="footer-copy">Copyright &#169; 2024 Fatma Sliti. Tous droits réservés.</p>
  </footer>
  <script src="script.js"></script>
</body>

</html>
