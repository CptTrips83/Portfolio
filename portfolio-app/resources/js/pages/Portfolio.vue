<template>
    <header>
        <h1>Jan-Peter Wittig</h1>
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
        <Biography />
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2>Meine Projekte</h2>
            <div class="project-card">
                <h3 class="project-title">Projekt 1: Website zu Bewertung von Produkten</h3>
                <p class="project-description">
                    Eine intuitive Web-Anwendung zur Bewertung von Produkten.
                    Benutzer können Produkte bewerten, Administratoren können Produkte erstellen oder bearbeiten.
                    Entwickelt mit Symfony 7, PHP 8.3 & JavaScript.
                </p>
            </div>
            <div class="project-card">
                <h3 class="project-title">Projekt 2: Kanban-Board</h3>
                <p class="project-description">
                    Ein Kanban-Board zur Planung von Aufgaben.
                    Benutzer können neue Aufgaben anlegen. Aufgaben können von Benutzern kommentiert werden.
                    Zu Testzwecken wurde eine einfache Authentifizierung implementiert. Für Besucher kann der Besucher "Gast"
                    verwendet werden. Das zugehörige Passwort ist "guest".
                    Entwickelt mit Symfony 5, PHP 8.3 & Vue.js 3
                </p>
                <div class="project-links">
                    <a target="_blank" class="button align-left" href="https://board.rentner-coding-nordheide.de/home/board">Link zur Website</a>
                    <a target="_blank" class="button align-right" href="https://github.com/CptTrips83/KanbanBoard">Link zum Repository</a>
                </div>
            </div>
            <div class="project-card">
                <h3 class="project-title">Projekt 3: Zeiterfassung</h3>
                <p class="project-description">
                    Einfache Zeiterfassung mit Möglichkeiten zur Auswertung.
                    Zu Testzwecken wurde eine einfache Authentifizierung implementiert. Für Besucher kann der Besucher "Gast"
                    verwendet werden. Das zugehörige Passwort ist "guest".
                    Entwickelt in Symfony 5, PHP 7.4 & JavaScript
                </p>
            </div>
            <div class="project-card">
                <h3 class="project-title">Projekt 4: Catender Prototype</h3>
                <p class="project-description">
                    Ein Sidescroller Tower Defense Spiel.<br>
                    Entwickelt in Unreal Engine 5 und C++.<br>
                    An festen Punkten in der Spielwelt können Rohstoffe dafür verwendet werden,
                    um Gebäude zu bauen oder verschiedene Helfer anzuheuern.
                    Das Ziel des Spiels ist es, so lange wir möglich zu überleben.
                    Das Spiel ist entstanden, um die C++ Entwicklung in der Unreal Engine zu vertiefen.
                </p>
            </div>
            <div class="project-card">
                <h3 class="project-title">Projekt 6: Portfolio Website</h3>
                <p class="project-description">
                    Meine eigene Portfolio-Webseite!
                    Entwickelt mit HTML, CSS und ein bisschen JavaScript.
                    Als Fundament und zu Übungszwecken wurde diese Site mit Laravel 12 und Vue.js 3 entwickelt.
                    Diese Seite ist responsive und bietet eine gute Benutzererfahrung auf allen Geräten.
                </p>
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
                <a href="https://www.linkedin.com/in/jan-peter-wittig-727658228/" target="_blank">LinkedIn</a>
                <a href="https://twitter.com/maxmustermann" target="_blank">Twitter</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Jan-Peter Wittig. Alle Rechte vorbehalten.</p>
    </footer>
</template>

<script setup lang="ts">
    import Biography from "@/components/Portfolio/Biography.vue";
</script>

<style scoped>

</style>
