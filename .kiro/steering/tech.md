# Technology Stack

## Core Framework
- **Jigsaw**: PHP static site generator by Tighten
- **PHP**: Server-side language for build process
- **Blade Templates**: Laravel's templating engine

## Frontend
- **Tailwind CSS**: Utility-first CSS framework
- **Alpine.js**: Lightweight JavaScript framework for interactivity
- **Laravel Mix**: Asset compilation and build tool
- **PostCSS**: CSS processing with plugins

## Build System
- **Composer**: PHP dependency management
- **NPM**: Node.js package management
- **Webpack**: Module bundler (via Laravel Mix)

## Key Dependencies
- `tightenco/jigsaw`: Static site generator
- `tailwindcss`: CSS framework
- `@tailwindcss/typography`: Typography plugin
- `laravel-mix-jigsaw`: Jigsaw integration for Mix
- `novaway/open-graph`: OpenGraph meta tags
- `guzzlehttp/guzzle`: HTTP client library

## Common Commands

### Development
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Build assets for development
npm run dev

# Watch for changes and rebuild
npm run watch

# Build and serve locally
npm run go
./vendor/bin/jigsaw serve
```

### Production
```bash
# Build optimized assets
npm run prod

# Build static site
./vendor/bin/jigsaw build

# Deploy to GitHub Pages
git subtree push --prefix build_production origin gh-pages-{CURRENT_DATETIME_STRING}
```

### Asset Management
- Source assets: `source/_assets/`
- Compiled assets: `source/assets/build/`
- Static assets: `source/assets/`
- Images expected to be uploaded to Amazon S3