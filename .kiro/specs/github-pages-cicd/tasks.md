# Implementation Plan: GitHub Pages CI/CD

## Overview

Create a GitHub Actions workflow that automates building and deploying the Jigsaw static site to GitHub Pages on every push to `main`. The workflow uses the artifact-based Pages deployment method.

## Tasks

- [x] 1. Create the GitHub Actions workflow file
  - [x] 1.1 Create `.github/workflows/deploy.yml` with the build job
    - Set up workflow trigger on push to `main`
    - Configure permissions (`pages: write`, `id-token: write`, `contents: read`)
    - Configure concurrency group to prevent overlapping deploys
    - Add checkout step using `actions/checkout@v4`
    - Add PHP setup step using `shivammathur/setup-php@v2` with PHP 8.2
    - Add Composer dependency caching using `actions/cache@v4` keyed on `composer.lock`
    - Add `composer install --no-dev --prefer-dist` step
    - Add Node.js setup using `actions/setup-node@v4` with `node-version-file: '.nvmrc'` and `cache: 'npm'`
    - Add `npm ci` step
    - Add `npm run prod` build step
    - _Requirements: 1.1, 1.2, 1.3, 1.4, 4.1, 4.2, 4.3_

  - [x] 1.2 Add CNAME handling and validation to the build job
    - Add step to copy root `CNAME` file into `build_production/CNAME`
    - Add validation step that fails the job if `build_production/CNAME` does not exist or does not contain `washbearchess.club`
    - _Requirements: 3.1, 3.3_

  - [x] 1.3 Add artifact upload and deploy job
    - Add `actions/upload-pages-artifact@v3` step with `path: build_production`
    - Add deploy job that depends on the build job
    - Configure deploy job with `github-pages` environment and `actions/deploy-pages@v4`
    - _Requirements: 2.1, 2.2, 2.3, 2.4_

- [ ] 2. Validate workflow file
  - [ ] 2.1 Verify the workflow YAML is valid
    - Run `actionlint` or manually review the YAML for syntax correctness
    - Confirm all action versions are pinned (`@v4`, `@v3`, `@v2`)
    - Verify the workflow structure matches the design (two jobs: build → deploy)
    - _Requirements: 1.1, 1.2, 1.3, 2.1, 2.2, 4.4_

- [ ] 3. Checkpoint - Review and test
  - Ensure the workflow file is syntactically valid
  - Ask the user to: (1) change GitHub Pages source to "GitHub Actions" in repo settings, (2) push to `main` and verify the deployment succeeds at washbearchess.club

## Notes

- No property-based tests are applicable — the deliverable is a YAML configuration file
- The one-time manual step (changing Pages source to "GitHub Actions") must be done by the repo owner in GitHub settings
- After the first successful deploy, the old `gh-pages-*` branches can be cleaned up
