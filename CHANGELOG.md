# Changelog

All notable changes to this project will be documented in this file.

## [5.0.0-alpha.1] – 2025-XX-XX

### Release Highlights

- Complete user Interface & Experience overhaul for a more modern and intuitive experience
-

### Added

- **New UI & UX**
  - XX
- **Worker Servers**
  - XX
- **Tests**
  - Complete unit and feature test architecture with a test PostgresDB and automatic database refresh on all test
  - Custom Pest architecture test that enforces Laravel/PHP best practices and ensures security and consistency across the codebase
  - `test.yaml` workflow with `composer.json` validation, Composer and Bun security checks and automatic execution of all test commands (refactoring, linting, unit and feature tests...)
- **Code Quality & Tooling**
  - Strict custom Laravel Pint rules for consistent formatting and code quality enforcement across the codebase
  - Custom composer scripts to run refactors, linting, tests, typo checking, type checking, test-coverage, type-coverage and publish assets after installation
  - Larastan (PHPStan) Level X for code analysiss and type checking
  - Rector with a strict configuration file for automatic PHP modernizations and refactors
  - Strict `AppServiceProvider.php`
    - Optionally enforce HTTPS
    - Enforce strong password validation rules in production
    - Disable destructive artisan commands in production
    - Automatic eager loading of relationships to avoid N+1 queries
    - Strict model configuration and morph map for polymorphic relationships
    - Global immutable dates
    - Fake sleep and prevent stray HTTP requests during testing
    - Prevent exception truncation in development
    - Aggressive Vite prefetching for better performance

### Fixed

-

### Changed

- **Docker**
  - XX
  - Updated `.dockerignore` file to minimize build context and reduce image size
- **Dependencies**
  - Switched package managers from NPM to Bun for XX times faster builds
  - Started using `$schema` in`composer.json` and `package.json` files
  - Upgraded all core NPM, Composer, and Dockerfile dependencies to the latest stable (LTS) versions
- **Laravel Configuration**
  - Reordered, restructured, and cleaned up `.env` files for each environment
  - Password reset tokens now expire after 10 minutes (instead of 60 minutes) for improved security
  - Switched hashing algorithm from `bcrypt` to `argon2id` with a custom configuration for enhanced security
  - Use Redis for sessions (instead of Postgres), encrypt all session data and expire sessions after 7 days of inacticity
  - Updated all Laravel configuration files to the latest versions and removed all unused configuration options
- Updated multiple `.gitignore` files for stricter version control hygiene
- Restructured `versions.json` file and clearer separation of `stable` and `nightly` versions

### Refactored

- **Coolify GitHub**
  - Renamed GitHub action workflows for clarity
  - Cancel in-progress action runs when a new run is triggered
  - Use GitHub action cache to speed up action runs
  - Refactored GitHub issue templates to use issue types instead of labels and improved formatting & wording
  - Cleaned up the pull request template
  - Move `README.md` assets into `.github/assets/` to exclude them from builds and exports
  - Adjusted `SECURITY.md` support policy for the `v5.x` release
  - Removed `chore-remove-labels-and-assignees-on-close.yml` action
- **Database Schema**
  - Completely refactored all database migrations and tables for a cleaner, more consistent database schema
