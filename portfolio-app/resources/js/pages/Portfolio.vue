<template>
    <header>
        <h1>Jan-Peter Wittig</h1>
        <p>Software- & Web-Entwickler</p>
    </header>

    <!-- Navigation -->
    <nav aria-label="Hauptnavigation">
        <a
            href="#about"
            aria-label="Über mich"
        >Über mich</a>
        <a
            href="#projects"
            aria-label="Projekte"
        >Projekte</a>
        <a
            href="#contact"
            aria-label="Kontakt"
        >Kontakt</a>
    </nav>
    <div class="content">
        <!-- About Section -->
        <section id="about" class="about">
            <biography></biography>
        </section>
        <!-- Projects Section -->
        <section id="projects" class="projects">
            <div class="container">
                <h2>Meine Projekte</h2>
                <project-card
                    project-title = 'Projekt 1: Website zu Bewertung von Produkten'
                    project-link='https://canrate.rentner-coding-nordheide.de/public/cannabis/product/'
                    project-repo-link="https://github.com/CptTrips83/canRate"
                >
                    Entwickelt mit Symfony 7, PHP 8.3 & JavaScript.<br>
                    Eine intuitive Web-Anwendung zur Bewertung von Produkten.<br>
                    Benutzer können Produkte bewerten, Administratoren können Produkte erstellen oder bearbeiten.
                </project-card>
                <project-card
                    project-title = 'Projekt 2: Kanban-Board'
                    project-link='https://board.rentner-coding-nordheide.de/home/board'
                    project-repo-link="https://github.com/CptTrips83/KanbanBoard"
                >
                    Entwickelt mit Symfony 5, PHP 8.3 & Vue.js 3.<br>
                    Ein Kanban-Board zur Planung von Aufgaben.<br>
                    Benutzer können neue Aufgaben anlegen. Aufgaben können von Benutzern kommentiert werden.
                    Zu Testzwecken wurde eine einfache Authentifizierung implementiert. Für Besucher kann der Besucher "Gast"
                    verwendet werden. Das zugehörige Passwort ist "guest".
                </project-card>
                <project-card
                    project-title = 'Projekt 3: Catender Prototype'
                    project-link='https://cpttrips83.itch.io/catender'
                    project-repo-link="https://github.com/CptTrips83/Catender02"
                >
                    Ein Sidescroller Tower Defense Spiel.<br>
                    Entwickelt in Unreal Engine 5 und C++.<br>
                    An festen Punkten in der Spielwelt können Rohstoffe dafür verwendet werden,
                    um Gebäude zu bauen oder verschiedene Helfer anzuheuern.
                    Das Ziel des Spiels ist es, so lange wir möglich zu überleben.
                    Das Spiel ist entstanden, um die C++ Entwicklung in der Unreal Engine zu vertiefen.
                </project-card>
                <project-card
                    project-title = 'Projekt 4: Portfolio Website'
                    project-link='#'
                    project-repo-link="https://github.com/CptTrips83/Portfolio"
                >
                    Entwickelt mit HTML, CSS und ein bisschen JavaScript.<br>
                    Meine eigene Portfolio-Webseite!<br>
                    Als Fundament und zu Übungszwecken wurde diese Site mit Laravel 12 und Vue.js 3 entwickelt.
                    Diese Seite ist responsive und bietet eine gute Benutzererfahrung auf allen Geräten.
                </project-card>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">
                <h2>Kontakt</h2>
                <p>Hast du Interesse an einer Zusammenarbeit oder möchtest du mehr erfahren? Kontaktiere mich!</p>
                <p>Email: <a href="mailto:max.mustermann@email.com">max.mustermann@email.com</a></p>
                <p>LinkedIn: <a href="https://www.linkedin.com/in/jan-peter-wittig-727658228/" target="_blank">jan-peter-wittig</a></p>
                <div class="social-links">
                    <a href="https://github.com/CptTrips83" target="_blank">GitHub</a>
                    <a href="https://www.linkedin.com/in/jan-peter-wittig-727658228/" target="_blank">LinkedIn</a>
                    <a href="https://www.xing.com/profile/JanPeter_Wittig" target="_blank">Xing</a>
                </div>
            </div>
        </section>
    </div>


    <!-- Footer -->
    <footer>
        <p>&copy; {{ new Date().getFullYear() }}
            Jan-Peter Wittig. Alle Rechte vorbehalten.</p>
    </footer>
</template>

<script setup lang="ts">
    import Biography from "@/components/Portfolio/Biography.vue";
    import ProjectCard from "@/components/Portfolio/ProjectCard.vue";
</script>

<style scoped>

</style>
