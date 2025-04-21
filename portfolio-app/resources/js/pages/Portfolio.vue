<template>
    <header>
        <h1>Max Mustermann</h1>
        <p>Software- & Web-Entwickler</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#about">Über mich</a>
        <a href="#projects">Projekte</a>
        <a href="#contact">Kontakt</a>
    </nav>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>Über mich</h2>
            <p>Ich bin ein leidenschaftlicher Software- und Web-Entwickler mit Erfahrung in modernen Web-Technologien. Ich liebe es, Lösungen zu entwickeln, die die Benutzererfahrung verbessern und echte Probleme lösen. Meine Kenntnisse umfassen JavaScript, Python, React, Node.js und mehr.</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2>Meine Projekte</h2>
            <div class="project-card">
                <h3 class="project-title">Projekt 1: Web-App für Task Management</h3>
                <p class="project-description">Eine intuitive Web-Anwendung zur Verwaltung von Aufgaben. Entwickelt mit React und Node.js. Benutzer können Aufgaben erstellen, bearbeiten und in verschiedene Kategorien unterteilen.</p>
            </div>
            <div class="project-card">
                <h3 class="project-title">Projekt 2: E-Commerce Website</h3>
                <p class="project-description">Ein Online-Shop, der mit modernen Web-Technologien und einem benutzerfreundlichen Design entwickelt wurde. Implementiert mit HTML, CSS, JavaScript und einer Backend-API in Python.</p>
            </div>
            <div class="project-card">
                <h3 class="project-title">Projekt 3: Portfolio Website</h3>
                <p class="project-description">Meine eigene Portfolio-Webseite! Entwickelt mit HTML, CSS und ein bisschen JavaScript. Diese Seite ist responsive und bietet eine gute Benutzererfahrung auf allen Geräten.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Kontakt</h2>
            <p>Hast du Interesse an einer Zusammenarbeit oder möchtest du mehr erfahren? Kontaktiere mich!</p>
            <p>Email: <a href="mailto:max.mustermann@email.com">max.mustermann@email.com</a></p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/max-mustermann" target="_blank">max-mustermann</a></p>
            <div class="social-links">
                <a href="https://github.com/maxmustermann" target="_blank">GitHub</a>
                <a href="https://www.linkedin.com/in/max-mustermann" target="_blank">LinkedIn</a>
                <a href="https://twitter.com/maxmustermann" target="_blank">Twitter</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Max Mustermann. Alle Rechte vorbehalten.</p>
    </footer>
</template>

<script setup lang="ts">

</script>

<style scoped>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        color: #333;
        @media (prefers-color-scheme: dark) {
            background-color: #333;
            color: #f4f4f4 ;
        }
    }

    header {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 2.5rem;
    }

    nav {
        background-color: #444;
        padding: 10px;
        text-align: center;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-size: 1.1rem;
    }

    nav a:hover {
        text-decoration: underline;
    }

    section {
        padding: 50px 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .about, .projects, .contact {
        margin-bottom: 40px;
    }

    h2 {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .project-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: transform 0.3s ease-in-out;
        @media (prefers-color-scheme: dark) {
            background-color: #333;
        }
    }

    .project-card:hover {
        transform: scale(1.05);
    }

    .project-title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 10px;
        @media (prefers-color-scheme: dark) {
            color: #fff;
        }
    }

    .project-description {
        color: #666;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 15px;
        position: fixed;
        width: 100%;
        bottom: 0;
    }

    .social-links a {
        margin: 0 10px;
        color: white;
        font-size: 1.2rem;
        text-decoration: none;
    }

    .social-links a:hover {
        color: #aaa;
    }
</style>
