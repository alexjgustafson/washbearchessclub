# Requirements Document

## Introduction

Automate the build and deployment of the Washbear Chess Club static site to GitHub Pages using GitHub Actions. The current workflow is entirely manual: the developer runs `npm run prod` locally, pushes `build_production` to a timestamped `gh-pages-*` branch via `git subtree push`, then manually selects that branch in GitHub Pages settings. This spec replaces that process with a CI/CD pipeline triggered on push to `main`, eliminating manual steps and the stale-branch problem.

## Glossary

- **Pipeline**: A GitHub Actions workflow that builds and deploys the site
- **Build_Process**: The sequence of `composer install`, `npm install`, `npm run prod` that produces the `build_production` directory
- **Deploy_Action**: The GitHub Actions step that publishes `build_production` to GitHub Pages
- **CNAME_File**: A file containing the custom domain (`washbearchess.club`) required by GitHub Pages for custom domain routing
- **Source_Branch**: The `main` branch containing source code and templates

## Requirements

### Requirement 1: Automated Build on Push

**User Story:** As a developer, I want the site to build automatically when I push to main, so that I do not need to run the build locally before deploying.

#### Acceptance Criteria

1. WHEN a push is made to the Source_Branch, THE Pipeline SHALL install PHP dependencies using Composer
2. WHEN a push is made to the Source_Branch, THE Pipeline SHALL install Node.js dependencies using NPM
3. WHEN dependencies are installed, THE Pipeline SHALL execute the production build command (`npm run prod`) to generate the `build_production` directory
4. IF the Build_Process fails at any step, THEN THE Pipeline SHALL report the failure and stop execution

### Requirement 2: Automated Deployment to GitHub Pages

**User Story:** As a developer, I want the built site to deploy to GitHub Pages automatically, so that I do not need to manually push subtree branches or change settings in the GitHub UI.

#### Acceptance Criteria

1. WHEN the Build_Process completes successfully, THE Deploy_Action SHALL publish the contents of the `build_production` directory to GitHub Pages
2. THE Deploy_Action SHALL use the GitHub Actions Pages deployment method (artifact-based) rather than deploying to a separate branch
3. WHEN deploying, THE Deploy_Action SHALL include the CNAME_File with the value `washbearchess.club` in the published output
4. WHEN deployment completes, THE Pipeline SHALL make the site available at the custom domain within the normal GitHub Pages propagation time

### Requirement 3: CNAME Preservation

**User Story:** As a developer, I want my custom domain configuration to persist across deployments, so that the site remains accessible at washbearchess.club without manual intervention.

#### Acceptance Criteria

1. THE Build_Process SHALL include a CNAME_File containing `washbearchess.club` in the `build_production` output directory
2. WHEN the Deploy_Action publishes to GitHub Pages, THE Deploy_Action SHALL preserve the CNAME_File so GitHub Pages continues serving the custom domain
3. IF the CNAME_File is missing from the build output, THEN THE Pipeline SHALL fail with a clear error message

### Requirement 4: Build Environment Configuration

**User Story:** As a developer, I want the CI environment to match my local build tooling, so that builds are reproducible and consistent.

#### Acceptance Criteria

1. THE Pipeline SHALL use a PHP version compatible with the project's Composer dependencies
2. THE Pipeline SHALL use the Node.js version specified in the `.nvmrc` file
3. THE Pipeline SHALL cache Composer and NPM dependencies to reduce build times on subsequent runs
4. WHEN the workflow file is committed to the repository, THE Pipeline SHALL require no additional manual GitHub settings changes beyond enabling GitHub Actions Pages deployment source
