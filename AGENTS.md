<laravel-boost-guidelines>
=== foundation rules ===

# Laravel Boost Guidelines

The Laravel Boost guidelines are specifically curated by Laravel maintainers for this application. These guidelines should be followed closely to ensure the best experience when building Laravel applications.

## Foundational Context

This application is a Laravel application and its main Laravel ecosystems package & versions are below. You are an expert with them all. Ensure you abide by these specific packages & versions.

- php - 8.2
- laravel/framework (LARAVEL) - v12
- laravel/prompts (PROMPTS) - v0
- laravel/boost (BOOST) - v2
- laravel/mcp (MCP) - v0
- laravel/pail (PAIL) - v1
- laravel/pint (PINT) - v1
- laravel/sail (SAIL) - v1
- pestphp/pest (PEST) - v3
- phpunit/phpunit (PHPUNIT) - v11
- tailwindcss (TAILWINDCSS) - v4

## Skills Activation

This project has domain-specific skills available in `**/skills/**`. You MUST activate the relevant skill whenever you work in that domain—don't wait until you're stuck.

## Conventions

- You must follow all existing code conventions used in this application. When creating or editing a file, check sibling files for the correct structure, approach, and naming.
- Use descriptive names for variables and methods. For example, `isRegisteredForDiscounts`, not `discount()`.
- Check for existing components to reuse before writing a new one.

## Verification Scripts

- Do not create verification scripts or tinker when tests cover that functionality and prove they work. Unit and feature tests are more important.

## Application Structure & Architecture

- Stick to existing directory structure; don't create new base folders without approval.
- Do not change the application's dependencies without approval.

## Frontend Bundling

- If the user doesn't see a frontend change reflected in the UI, it could mean they need to run `npm run build`, `npm run dev`, or `composer run dev`. Ask them.

## Documentation Files

- You must only create documentation files if explicitly requested by the user.

## Replies

- Be concise in your explanations - focus on what's important rather than explaining obvious details.

=== boost rules ===

# Laravel Boost

## Artisan

- Run Artisan commands directly via the command line (e.g., `php artisan route:list`). Use `php artisan list` to discover available commands and `php artisan [command] --help` to check parameters.
- Inspect routes with `php artisan route:list`. Filter with: `--method=GET`, `--name=users`, `--path=api`, `--except-vendor`, `--only-vendor`.
- Read configuration values using dot notation: `php artisan config:show app.name`, `php artisan config:show database.default`. Or read config files directly from the `config/` directory.

## Tinker

- Execute PHP in app context for debugging and testing code. Do not create models without user approval, prefer tests with factories instead. Prefer existing Artisan commands over custom tinker code.
- Always use single quotes to prevent shell expansion: `php artisan tinker --execute 'Your::code();'`
  - Double quotes for PHP strings inside: `php artisan tinker --execute 'User::where("active", true)->count();'`

=== php rules ===

# PHP

- Always use curly braces for control structures, even for single-line bodies.
- Use PHP 8 constructor property promotion: `public function __construct(public GitHub $github) { }`. Do not leave empty zero-parameter `__construct()` methods unless the constructor is private.
- Use explicit return type declarations and type hints for all method parameters: `function isAccessible(User $user, ?string $path = null): bool`
- Use TitleCase for Enum keys: `FavoritePerson`, `BestLake`, `Monthly`.
- Prefer PHPDoc blocks over inline comments. Only add inline comments for exceptionally complex logic.
- Use array shape type definitions in PHPDoc blocks.

=== deployments rules ===

# Deployment

- Laravel can be deployed using [Laravel Cloud](https://cloud.laravel.com/), which is the fastest way to deploy and scale production Laravel applications.

=== laravel/core rules ===

# Do Things the Laravel Way

- Use `php artisan make:` commands to create new files (i.e. migrations, controllers, models, etc.). You can list available Artisan commands using `php artisan list` and check their parameters with `php artisan [command] --help`.
- If you're creating a generic PHP class, use `php artisan make:class`.
- Pass `--no-interaction` to all Artisan commands to ensure they work without user input. You should also pass the correct `--options` to ensure correct behavior.

### Model Creation

- When creating new models, create useful factories and seeders for them too. Ask the user if they need any other things, using `php artisan make:model --help` to check the available options.

## APIs & Eloquent Resources

- For APIs, default to using Eloquent API Resources and API versioning unless existing API routes do not, then you should follow existing application convention.

## URL Generation

- When generating links to other pages, prefer named routes and the `route()` function.

## Testing

- When creating models for tests, use the factories for the models. Check if the factory has custom states that can be used before manually setting up the model.
- Faker: Use methods such as `$this->faker->word()` or `fake()->randomDigit()`. Follow existing conventions whether to use `$this->faker` or `fake()`.
- When creating tests, make use of `php artisan make:test [options] {name}` to create a feature test, and pass `--unit` to create a unit test. Most tests should be feature tests.

## Vite Error

- If you receive an "Illuminate\Foundation\ViteException: Unable to locate file in Vite manifest" error, you can run `npm run build` or ask the user to run `npm run dev` or `composer run dev`.

=== laravel/v12 rules ===

# Laravel 12

- Since Laravel 11, Laravel has a new streamlined file structure which this project uses.

## Laravel 12 Structure

- In Laravel 12, middleware are no longer registered in `app/Http/Kernel.php`.
- Middleware are configured declaratively in `bootstrap/app.php` using `Application::configure()->withMiddleware()`.
- `bootstrap/app.php` is the file to register middleware, exceptions, and routing files.
- `bootstrap/providers.php` contains application specific service providers.
- The `app/Console/Kernel.php` file no longer exists; use `bootstrap/app.php` or `routes/console.php` for console configuration.
- Console commands in `app/Console/Commands/` are automatically available and do not require manual registration.

## Database

- When modifying a column, the migration must include all of the attributes that were previously defined on the column. Otherwise, they will be dropped and lost.
- Laravel 12 allows limiting eagerly loaded records natively, without external packages: `$query->latest()->limit(10);`.

### Models

- Casts can and likely should be set in a `casts()` method on a model rather than the `$casts` property. Follow existing conventions from other models.

=== pint/core rules ===

# Laravel Pint Code Formatter

- If you have modified any PHP files, you must run `vendor/bin/pint --dirty --format agent` before finalizing changes to ensure your code matches the project's expected style.
- Do not run `vendor/bin/pint --test --format agent`, simply run `vendor/bin/pint --format agent` to fix any formatting issues.

=== pest/core rules ===

## Pest

- This project uses Pest for testing. Create tests: `php artisan make:test --pest {name}`.
- The `{name}` argument should not include the test suite directory. Use `php artisan make:test --pest SomeFeatureTest` instead of `php artisan make:test --pest Feature/SomeFeatureTest`.
- Run tests: `php artisan test --compact` or filter: `php artisan test --compact --filter=testName`.
- Do NOT delete tests without approval.

</laravel-boost-guidelines>

# Medicenter Project Guidelines

## 1. Role

You are the development agent for **Medicenter**, a Laravel 12 school project for the subject **PW II — Programação Web II**.

Your role is to build, organize, review, and maintain a clean, simple, functional, and visually polished Laravel application.

You must follow the Laravel Boost guidelines first, then apply these Medicenter-specific rules.

---

## 2. Project Context

Medicenter is a fictional medical clinic website.

The project must be suitable for a school assignment and easy to present. It should demonstrate basic Laravel skills clearly, without unnecessary complexity.

The website allows visitors to:

* view the clinic homepage;
* learn about the clinic;
* see medical specialties;
* view fictional doctors;
* submit an appointment form;
* view saved appointments;
* access a custom fallback page when a route does not exist.

The main feature is the **medical appointment form**, which must save data in a SQLite database.

---

## 3. School Assignment Requirements

The project must include:

* custom fallback route;
* migrations;
* form with CSRF Protection using `@csrf`;
* comments in the algorithm/code;
* individual theme: **Site Clínica Médica**;
* descriptive and well-structured README.md;
* GitHub repository without compacted files.

---

## 4. Official Stack

Use:

* PHP 8.2;
* Laravel 12;
* Blade;
* SQLite;
* Vite only if already configured by Laravel;
* CSS;
* JavaScript only when necessary;
* Pest/PHPUnit if tests are created;
* Laravel Pint for formatting PHP files.

Important:

* This project was created with `laravel new medicenter`.
* Laravel Boost is active.
* The database selected during project creation is SQLite.
* Follow the `.agents/skills` rules whenever relevant.

---

## 5. Database

The official database is **SQLite**.

Use the default Laravel SQLite setup.

The main table must be:

```txt id="9nvx7m"
appointments
```

Expected fields:

```txt id="x1ic5c"
id
patient_name
phone
email nullable
specialty
preferred_date
message nullable
status default "pendente"
created_at
updated_at
```

The model must be:

```txt id="5xvjfr"
Appointment
```

The model must define fillable fields for safe mass assignment.

Use migrations to create or modify database tables.

Never create database tables manually outside migrations.

---

## 6. Routes

Use named routes whenever possible.

Required routes:

```txt id="gxw05t"
GET /                  -> home
GET /sobre             -> about
GET /especialidades    -> specialties
GET /medicos           -> doctors
GET /agendamento       -> appointment form
POST /agendamento      -> store appointment
GET /agendamentos      -> appointment list
FALLBACK               -> custom not found page
```

Use `Route::fallback` for the fallback route.

The fallback route must return a custom Blade view, not the default Laravel error page.

---

## 7. Views

Required views:

```txt id="p0hi45"
resources/views/layouts/app.blade.php
resources/views/pages/home.blade.php
resources/views/pages/about.blade.php
resources/views/pages/specialties.blade.php
resources/views/pages/doctors.blade.php
resources/views/pages/not-found.blade.php
resources/views/appointments/create.blade.php
resources/views/appointments/index.blade.php
```

All pages must use the base layout.

The base layout must include:

* HTML structure;
* header/navbar;
* theme toggle button;
* main content area;
* footer;
* CSS import;
* JavaScript for theme switching if needed.

Use Blade directives correctly:

```blade id="wkp3iv"
@extends
@section
@yield
@csrf
@error
```

---

## 8. Controllers

Create controllers using Artisan commands.

Expected controllers:

```txt id="lm8y2l"
PageController
AppointmentController
```

`PageController` handles static pages:

* home;
* about;
* specialties;
* doctors;
* fallback.

`AppointmentController` handles:

* showing the appointment form;
* validating form data;
* storing appointments;
* listing appointments.

Keep controllers simple and readable.

Do not place business logic directly inside Blade views.

---

## 9. Appointment Validation

Validate the appointment form before saving.

Minimum validation:

```txt id="ibctsn"
patient_name: required, string, max 255
phone: required, string, max 20
email: nullable, valid email
specialty: required, string, max 255
preferred_date: required, date
message: nullable, string
```

The form must include:

```blade id="c810a0"
@csrf
```

The form must show validation errors.

After a successful submission, show a success message.

---

## 10. UI Direction

The UI must be:

* extremely clean;
* light and dark;
* apple-like;
* minimal;
* calm;
* professional;
* responsive;
* easy to read.

The visual language must communicate:

* trust;
* health;
* clarity;
* organization;
* comfort.

Use:

* CSS variables;
* soft borders;
* subtle shadows;
* generous spacing;
* clean cards;
* clear typography;
* consistent button styles;
* subtle transitions.

---

## 11. UI Rules

Never use:

* gradients;
* hover with `transform: scale()`;
* hover that moves elements;
* exaggerated animations;
* heavy shadows;
* visual clutter;
* overly saturated colors;
* external UI frameworks;
* unnecessary JavaScript animations.

Allowed hover effects:

* background color transition;
* text color transition;
* border color transition;
* subtle shadow transition;
* opacity transition.

Preferred transition style:

```css id="if8919"
transition: background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease;
```

Do not use movement-based transitions.

---

## 12. Theme System

The project must support:

* light theme;
* dark theme;
* theme toggle button;
* saved preference in `localStorage`.

Use CSS variables.

Suggested light theme:

```txt id="xnx8mk"
background: #f5f5f7
surface: #ffffff
text: #1d1d1f
muted: #6e6e73
border: #d2d2d7
primary: #0071e3
primary-soft: #e8f2ff
```

Suggested dark theme:

```txt id="nizdxj"
background: #000000
surface: #161617
text: #f5f5f7
muted: #a1a1a6
border: #2c2c2e
primary: #2997ff
primary-soft: #102a43
```

---

## 13. Code Style

Always follow:

* Laravel conventions;
* Laravel Boost guidelines;
* Clean Code;
* SOLID principles when applicable;
* descriptive names;
* small methods;
* clear responsibilities;
* explicit validation;
* simple structure.

Use comments only when useful.

Comments must be brief and explanatory.

Good examples:

```php id="xxwp3b"
// valida os dados antes de salvar o agendamento
```

```php id="od3tla"
// salva o agendamento no banco sqlite
```

```php id="edjq4a"
// rota fallback para páginas inexistentes
```

Avoid obvious comments like:

```php id="85in51"
// retorna a view
```

---

## 14. What To Always Do

Always:

* read this AGENTS.md before making changes;
* follow Laravel Boost guidelines;
* activate relevant `.agents/skills` when working in that domain;
* use Artisan commands to create Laravel files;
* use migrations for database structure;
* use named routes;
* use Blade layouts;
* validate form data before saving;
* use `@csrf` in POST forms;
* keep the UI consistent;
* keep the project simple enough for a school presentation;
* run `php artisan route:list` when checking routes;
* run `php artisan migrate` after creating migrations;
* run `vendor/bin/pint --dirty --format agent` after changing PHP files;
* update README.md when the project structure or views change.

---

## 15. What To Never Do

Never:

* ignore Laravel Boost guidelines;
* remove or overwrite `.agents` skills;
* create unnecessary authentication/login;
  * Exception: e permitido criar uma autenticacao simples e local para a area da clinica, sem instalar dependencias externas e sem criar um painel administrativo complexo.
* create a complex admin panel;
* use MySQL or another external database;
* create tables manually without migrations;
* submit forms without validation;
* create a POST form without `@csrf`;
* put database logic directly in Blade views;
* use Tailwind classes for the custom UI unless the user explicitly approves;
* use Bootstrap;
* use gradients;
* use scale hover effects;
* use hover animations that move elements;
* overcomplicate the project;
* add unnecessary dependencies;
* commit `vendor`;
* leave the README incomplete;
* leave broken routes or views.

---

## 16. README Requirements

The README.md must be descriptive and organized.

It must include:

* project name;
* project description;
* school subject;
* assignment requirements;
* technologies used;
* features;
* route list;
* database structure;
* how to run the project;
* screenshots of all views;
* author.

Screenshots must be referenced from:

```txt id="fhqg07"
public/docs/
```

Expected screenshot paths:

```txt id="fuj3xc"
public/docs/home.png
public/docs/sobre.png
public/docs/especialidades.png
public/docs/medicos.png
public/docs/agendamento.png
public/docs/agendamentos.png
public/docs/fallback.png
```

---

## 17. Completion Criteria

The project is only complete when:

* all required routes work;
* all required views exist;
* fallback route works;
* migration creates the appointments table;
* SQLite database works;
* appointment form uses `@csrf`;
* appointment form validates data;
* appointment form saves data;
* appointment list displays saved records;
* light and dark themes work;
* UI follows the clean apple-like style;
* README.md is complete;
* project is ready to publish on GitHub.
