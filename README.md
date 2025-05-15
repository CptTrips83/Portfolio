# Portfolio Webseite

Eine persönliche Portfolio-Webseite für Jan-Peter Wittig, entwickelt mit Laravel 12 und Vue.js 3.

## Beschreibung

Diese Portfolio-Webseite dient zur Präsentation der Projekte und Fähigkeiten von Jan-Peter Wittig, einem Software- und Web-Entwickler. Die Webseite ist responsive und bietet eine gute Benutzererfahrung auf allen Geräten.

## Funktionen

- Responsive Design für alle Gerätetypen
- Abschnitte für "Über mich", "Projekte" und "Kontakt"
- Projektgalerie mit Beschreibungen und Links
- Dunkelmodus-Unterstützung
- Server-Side Rendering (SSR) für verbesserte Performance und SEO

## Technologien

- **Frontend**:
  - Vue.js 3 mit TypeScript
  - Inertia.js für Frontend-Backend-Kommunikation
  - Tailwind CSS für Styling
  - Vite für Asset-Bundling

- **Backend**:
  - Laravel 12
  - Inertia.js für Server-Side Rendering
  - SQLite für Entwicklung/Tests (konfigurierbar für andere Datenbanken in Produktion)

## Voraussetzungen

- PHP 8.2 oder höher
- Composer
- Node.js und npm
- SQLite (für Tests)

## Installation

1. Repository klonen:
   ```
   git clone https://github.com/CptTrips83/Portfolio.git
   cd Portfolio/portfolio-app
   ```

2. PHP-Abhängigkeiten installieren:
   ```
   composer install
   ```

3. JavaScript-Abhängigkeiten installieren:
   ```
   npm install
   ```

4. Umgebungsdatei kopieren und anpassen:
   ```
   copy .env.example .env
   ```

5. Anwendungsschlüssel generieren:
   ```
   php artisan key:generate
   ```

6. SQLite-Datenbank erstellen (für Entwicklung):
   ```
   touch database/database.sqlite
   ```

7. Migrationen ausführen:
   ```
   php artisan migrate
   ```

## Entwicklungsumgebung

Das Projekt enthält ein praktisches Entwicklungsskript, das alle notwendigen Dienste startet:
```
composer dev
```

Dieser Befehl startet:
- Laravel-Entwicklungsserver
- Queue-Worker
- Vite-Entwicklungsserver

Für SSR (Server-Side Rendering) Entwicklung:
```
composer dev:ssr
```

## Für Produktion bauen

1. Frontend-Assets bauen:
   ```
   npm run build
   ```

2. Für SSR:
   ```
   npm run build:ssr
   ```

## Tests

### Tests ausführen
Alle Tests ausführen:
```
composer test
```

Spezifischen Test ausführen:
```
php artisan test --filter=TestName
```

### Wichtiger Hinweis
Bei Tests, die Frontend-Rendering beinhalten, müssen die Vite-Assets gebaut sein (`npm run build`), sonst können die Tests mit einem `ViteManifestNotFoundException` fehlschlagen.

## Code-Stil

### PHP
- Laravel Pint wird für PHP-Code-Styling verwendet
- `./vendor/bin/pint` ausführen, um PHP-Code zu formatieren

### JavaScript/TypeScript/Vue
- ESLint und Prettier werden für Code-Linting und -Formatierung verwendet
- 4-Leerzeichen-Einrückung (außer für YAML-Dateien, die 2 Leerzeichen verwenden)
- Einfache Anführungszeichen werden bevorzugt
- Semikolons sind erforderlich
- Maximale Zeilenlänge beträgt 150 Zeichen
- `npm run format` ausführen, um alle Ressourcen zu formatieren
- `npm run lint` ausführen, um Probleme zu beheben

## Nützliche Befehle
- `php artisan route:list` - Alle registrierten Routen auflisten
- `php artisan make:controller ControllerName` - Einen neuen Controller erstellen
- `php artisan make:component ComponentName` - Eine neue Vue-Komponente erstellen
- `php artisan make:test TestName` - Eine neue Testklasse erstellen
- `php artisan db:seed` - Datenbank mit Testdaten füllen

## Debugging
- Laravel Pail ist für die Protokollansicht während der Entwicklung verfügbar
- `dd()` oder `dump()` für das Debugging von PHP-Code verwenden
- `console.log()` für das Debugging von JavaScript-Code verwenden

## Kontakt

- Email: kontakt@jp-wittig.de
- LinkedIn: [jan-peter-wittig](https://www.linkedin.com/in/jan-peter-wittig-727658228/)
- GitHub: [CptTrips83](https://github.com/CptTrips83)
- Xing: [JanPeter_Wittig](https://www.xing.com/profile/JanPeter_Wittig)
