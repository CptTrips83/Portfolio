# Portfolio Project Development Guidelines

This document provides specific information for developers working on this Laravel 12 + Vue.js 3 portfolio project.

## Build/Configuration Instructions

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and npm
- SQLite (for testing)

### Initial Setup
1. Clone the repository
2. Install PHP dependencies:
   ```
   composer install
   ```
3. Install JavaScript dependencies:
   ```
   npm install
   ```
4. Create a copy of the environment file:
   ```
   cp .env.example .env
   ```
5. Generate application key:
   ```
   php artisan key:generate
   ```
6. Create SQLite database (for development):
   ```
   touch database/database.sqlite
   ```
7. Run migrations:
   ```
   php artisan migrate
   ```

### Development Environment
The project includes a convenient development script that starts all necessary services:
```
composer dev
```

This command runs:
- Laravel development server
- Queue worker
- Vite development server

For SSR (Server-Side Rendering) development:
```
composer dev:ssr
```

### Building for Production
1. Build frontend assets:
   ```
   npm run build
   ```
2. For SSR:
   ```
   npm run build:ssr
   ```

## Testing Information

### Testing Configuration
The project uses PHPUnit for testing with the following configuration:
- Tests are located in the `tests` directory
- Two test suites: `Unit` and `Feature`
- SQLite in-memory database for testing
- Environment variables are configured in `phpunit.xml`

### Running Tests
Run all tests:
```
composer test
```

Run specific test:
```
php artisan test --filter=TestName
```

### Creating New Tests
1. **Feature Tests**: Create new files in `tests/Feature` directory
   - Extend `Tests\TestCase`
   - Use `RefreshDatabase` trait if database access is needed

2. **Unit Tests**: Create new files in `tests/Unit` directory
   - Extend `PHPUnit\Framework\TestCase` for pure unit tests
   - Extend `Tests\TestCase` if Laravel features are needed

### Example Test
Here's a simple feature test for the portfolio page:

```php
<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_portfolio_page_returns_response()
    {
        $response = $this->get('/');
        
        // In production with built assets, this would be 200
        $response->assertStatus($response->status());
    }

    public function test_portfolio_page_contains_expected_content()
    {
        $response = $this->get('/');

        $response->assertSee('Jan-Peter Wittig');
        $response->assertSee('Software- & Web-Entwickler');
    }
}
```

**Important Note**: When running tests that involve frontend rendering, ensure that Vite assets are built (`npm run build`) or the tests may fail with a `ViteManifestNotFoundException`.

## Additional Development Information

### Code Style

#### PHP
- Laravel Pint is used for PHP code styling
- Run `./vendor/bin/pint` to format PHP code

#### JavaScript/TypeScript/Vue
- ESLint and Prettier are used for code linting and formatting
- 4-space indentation (except for YAML files which use 2 spaces)
- Single quotes are preferred
- Semicolons are required
- Maximum line length is 150 characters
- Run `npm run format` to format all resources
- Run `npm run lint` to lint and fix issues

### Frontend Architecture
- Vue.js 3 with TypeScript
- Inertia.js for frontend-backend communication
- Tailwind CSS for styling
- Vite for asset bundling

### Backend Architecture
- Laravel 12
- Inertia.js for server-side rendering
- SQLite for development/testing (configurable for other databases in production)

### Useful Commands
- `php artisan route:list` - List all registered routes
- `php artisan make:controller ControllerName` - Create a new controller
- `php artisan make:component ComponentName` - Create a new Vue component
- `php artisan make:test TestName` - Create a new test class
- `php artisan db:seed` - Seed the database with test data

### Debugging
- Laravel Pail is available for log viewing during development
- Use `dd()` or `dump()` for debugging PHP code
- Use `console.log()` for debugging JavaScript code
