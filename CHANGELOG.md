# Changelog

All notable changes to this project will be documented in this file.

## [5.0.0-alpha.1] – 2025-XX-XX

### Release Highlights

- New UI and UX
-

### Added

- **New UI & UX**
  - XX
- **Worker Servers**
  - XX
- **Tests**
  - XX
  - A custom Pest architecture test that enforces Laravel/PHP best practices and ensures security and consistency across the codebase
  - `test.yaml` workflow with `composer.json` validation, Composer and Bun security checks and execution of all test commands
- **Code Quality & Tooling**
  - Strict custom Laravel Pint rules for consistent formatting and code quality enforcement
  - Custom composer scripts to run refactors, linting, tests, typo checking, type checking, test-coverage, type-coverage and to run after installation
  - Larastan (PHPStan) Level X for static analysis and type checking
  - Rector with a strict configuration for automatic PHP modernizations and refactors
  - Strict `AppServiceProvider.php`
    - Optionally enforce HTTPS in production
    - Stronger password rules in production
    - Disable destructive artisan commands in production
    - Strict model configuration and morph maps for polymorphic relationships
    - Immutable dates
    - Fake sleep and prevent stray HTTP requests in tests
    - Prevent exception truncation in development
    - Aggressive Vite prefetching for better performance

### Fixed

-

### Changed

- **Docker**
  - XX
  - Stricter `.dockerignore` file for smaller image builds
- **Dependencies**
  - Switched from NPM to Bun for XX times faster builds
  - Upgraded all core NPM, Composer, and Dockerfile dependencies to the latest stable (LTS) versions
- **Laravel Configuration**
  - Changed hashing algorithm to `argon2id` instead of `bcrypt` for more secure password hashing
  - XX
  - Updated all Laravel config files to latest versions
- Stricter `.gitignore` file
- A better structured `versions.json` file with clearer `nightly` and `stable` versions

### Refactored

- **Coolify GitHub**
  - Renamed GitHub action workflows for clarity
  - Cancel in-progress action runs when a new run is triggered
  - Removed `chore-remove-labels-and-assignees-on-close.yml` action
  - Refactored GitHub issue templates to use issue types instead of labels and improved formatting & wording
  - Move `README.md` assets into `.github/assets/` to exclude them from builds
  - Adjust `SECURITY.md` support policy for the `v5.x` release
