function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}

const translations = {
  fr: {
    "nav-about": "À propos",
    "nav-experience": "Expérience",
    "nav-projects": "Projets",
    "nav-contact": "Contact",
    "profile-greeting": "Bonjour, je suis",
    "profile-title": "Développeuse Frontend",
    "btn-cv": "Télécharger le CV",
    "btn-contact": "Me contacter",
    "about-subtitle": "En savoir plus",
    "about-title": "À propos de moi",
    "about-exp-label": "Expérience",
    "about-exp-value": "2+ ans <br />Développement Full Stack",
    "about-edu-label": "Formation",
    "about-edu-value": "Licence en Informatique <br /> Génie Logiciel",
    "about-edu-value2": "Master en Informatique <br /> Systèmes, réseau et cloud computing",
    "about-text": "Depuis toujours, le design occupe une place importante dans ma vie. Ce qui a commencé par de simples croquis d'interfaces dans mes cahiers d'école est devenu, au fil du temps, une véritable passion pour la création d'expériences numériques intuitives et esthétiques.\n\nMon intérêt pour le développement Frontend est né de cette envie de concevoir des interfaces à la fois fonctionnelles, agréables à utiliser et visuellement attractives. Grâce à ma formation en informatique et à mon sens du design, je suis en mesure de transformer des idées en solutions numériques modernes, centrées sur les besoins des utilisateurs.\n\nAujourd'hui, j'aime relever de nouveaux défis, apprendre continuellement et participer à la création d'applications web offrant une expérience utilisateur de qualité.",
    "exp-subtitle": "Découvrez mon",
    "exp-title": "Expérience",
    "exp-frontend": "Développement Frontend",
    "exp-backend": "Développement Backend",
    "skill-exp": "Expérimentée",
    "skill-inter": "Intermédiaire",
    "skill-basic": "Notions de base",
    "proj-subtitle": "Parcourez mes récents",
    "proj-title": "Projets",
    "proj-react-title": "Projets React JS",
    "proj-html-title": "Projets HTML/CSS",
    "proj-challenges-title": "Défis Frontend Mentor",
    "proj-easy-recipes": "Recettes Faciles",
    "proj-market": "Gestion de Marché",
    "proj-food": "Commande de Repas",
    "proj-gpt": "GPT3",
    "proj-expense": "Suivi des Dépenses",
    "proj-course": "Suivi de Cours",
    "proj-meme": "Générateur de Mèmes",
    "proj-quiz": "Application Quiz",
    "proj-todo": "Liste de Tâches",
    "proj-poster": "Application Affiche",
    "proj-temp1": "Modèle 1",
    "proj-temp2": "Modèle 2",
    "proj-temp3": "Modèle 3",
    "proj-chat": "App de Chat",
    "proj-qr": "QR Code",
    "proj-stats": "Carte Aperçu Statistiques",
    "proj-product": "Carte Aperçu Produit",
    "proj-four-cards": "Section quatre cartes",
    "proj-huddle": "Page d'accueil Huddle",
    "btn-live": "Démo en ligne",
    "contact-subtitle": "Entrer en contact",
    "contact-title": "Me Contacter",
    "footer-about": "À propos",
    "footer-experience": "Expérience",
    "footer-projects": "Projets",
    "footer-contact": "Contact",
    "footer-copy": "Copyright © 2024 Fatma Sliti. Tous droits réservés.",
    "lang-btn": "EN",
  },
  en: {
    "nav-about": "About",
    "nav-experience": "Experience",
    "nav-projects": "Projects",
    "nav-contact": "Contact",
    "profile-greeting": "Hello, I'm",
    "profile-title": "Frontend Developer",
    "btn-cv": "Download CV",
    "btn-contact": "Contact Me",
    "about-subtitle": "Get To Know More",
    "about-title": "About Me",
    "about-exp-label": "Experience",
    "about-exp-value": "2+ years <br />Full Stack Development",
    "about-edu-label": "Education",
    "about-edu-value": "Bachelor's in Computer Science <br /> Software Engineering",
    "about-edu-value2": "Master's in Computer Science <br /> Systems, Network and Cloud Computing",
    "about-text": "Design has always held an important place in my life. What began as simple interface sketches in my school notebooks has grown, over time, into a genuine passion for creating intuitive and aesthetically pleasing digital experiences.\n\nMy interest in Frontend development grew from this desire to build interfaces that are functional, enjoyable to use, and visually appealing. With my background in computer science and my sense of design, I'm able to turn ideas into modern digital solutions centered on user needs.\n\nToday, I love taking on new challenges, continuously learning, and contributing to the creation of web applications that deliver a quality user experience.",
    "exp-subtitle": "Explore My",
    "exp-title": "Experience",
    "exp-frontend": "Frontend Development",
    "exp-backend": "Backend Development",
    "skill-exp": "Experienced",
    "skill-inter": "Intermediate",
    "skill-basic": "Basic",
    "proj-subtitle": "Browse My Recent",
    "proj-title": "Projects",
    "proj-react-title": "React JS Projects",
    "proj-html-title": "HTML/CSS Projects",
    "proj-challenges-title": "Frontend Mentor Challenges",
    "proj-easy-recipes": "Easy Recipes",
    "proj-market": "Market Management",
    "proj-food": "Meal Order",
    "proj-gpt": "GPT3",
    "proj-expense": "Expense Tracker",
    "proj-course": "Course Tracker",
    "proj-meme": "Meme Generator",
    "proj-quiz": "Quiz App",
    "proj-todo": "Todo List",
    "proj-poster": "Poster App",
    "proj-temp1": "Template 1",
    "proj-temp2": "Template 2",
    "proj-temp3": "Template 3",
    "proj-chat": "Chat App",
    "proj-qr": "QR Code",
    "proj-stats": "Stats Preview Card",
    "proj-product": "Product Preview Card",
    "proj-four-cards": "Four Cards Section",
    "proj-huddle": "Huddle Landing Page",
    "btn-live": "Live Demo",
    "contact-subtitle": "Get In Touch",
    "contact-title": "Contact Me",
    "footer-about": "About",
    "footer-experience": "Experience",
    "footer-projects": "Projects",
    "footer-contact": "Contact",
    "footer-copy": "Copyright © 2024 Fatma Sliti. All rights reserved.",
    "lang-btn": "FR",
  },
};

let currentLang = "fr";

function setLanguage(lang) {
  currentLang = lang;
  document.documentElement.lang = lang;
  const t = translations[lang];

  document.querySelectorAll("[data-i18n]").forEach((el) => {
    const key = el.getAttribute("data-i18n");
    if (t[key] !== undefined) el.textContent = t[key];
  });

  document.querySelectorAll("[data-i18n-html]").forEach((el) => {
    const key = el.getAttribute("data-i18n-html");
    if (t[key] !== undefined) el.innerHTML = t[key];
  });

  localStorage.setItem("lang", lang);
}

function toggleLanguage() {
  setLanguage(currentLang === "fr" ? "en" : "fr");
}

document.addEventListener("DOMContentLoaded", () => {
  const saved = localStorage.getItem("lang");
  setLanguage(saved === "en" ? "en" : "fr");
});
