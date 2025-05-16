<template>
    <div class="impressum-container">
        <h1>Impressum</h1>

        <div class="impressum-content">
            <section class="contact-info">
                <h2>Angaben gemäß § 5 TMG</h2>
                <p>Jan-Peter Wittig</p>
                <p>Adolfstr. 19</p>
                <p>21244 Buchholz</p>

                <h2>Kontakt</h2>
                <p>Telefon: +49 (0) 176/85707754</p>
                <p>E-Mail: <a href="mailto:janpeter.wittig@gmail.com">janpeter.wittig@gmail.com</a></p>
            </section>

            <section class="source">
                <p>Quelle: <a href="https://www.e-recht24.de" target="_blank">https://www.e-recht24.de</a></p>
            </section>
        </div>

        <div class="back-link">
            <Link href="/" class="back-button">Zurück zur Startseite</Link>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>
.impressum-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}

.impressum-content {
    margin: 2rem 0;
}

.contact-info h2 {
    margin-top: 1.5rem;
    margin-bottom: 0.5rem;
}

.source {
    margin-top: 2rem;
    font-size: 0.9rem;
}

.back-link {
    margin-top: 2rem;
}

.back-button {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color: #333;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.back-button:hover {
    background-color: #555;
}
</style>
