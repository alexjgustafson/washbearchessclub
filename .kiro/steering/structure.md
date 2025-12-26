# Project Structure

## Root Directory
- `source/`: Main content and templates
- `build_local/`: Local build output
- `build_production/`: Production build output
- `vendor/`: PHP dependencies (Composer)
- `node_modules/`: Node.js dependencies
- `lib/`: Custom PHP classes (PSR-4 autoloaded as `Washbear\`)

## Source Directory (`source/`)
- `index.blade.php`: Homepage
- `about.blade.php`, `tournaments.blade.php`, etc.: Main pages
- `_layouts/`: Blade layout templates
  - `main.blade.php`: Primary site layout
  - `tournament.blade.php`: Tournament-specific layout
- `_components/`: Reusable Blade components
- `_molecules/`: Larger UI components (homepage sections, footer)
- `_tournaments/`: Individual tournament pages
- `_assets/`: Source assets for compilation
  - `css/main.css`: Main stylesheet
  - `js/main.js`: Main JavaScript file
- `assets/`: Static and compiled assets
  - `build/`: Compiled assets (CSS/JS)
  - `images/`: Static images with responsive variants

## Configuration Files
- `config.php`: Main Jigsaw configuration
- `config.production.php`: Production overrides
- `composer.json`: PHP dependencies and autoloading
- `package.json`: Node.js dependencies and scripts
- `webpack.mix.js`: Laravel Mix build configuration
- `tailwind.config.js`: Tailwind CSS configuration

## Content Organization
- **Collections**: Tournaments are organized as a Jigsaw collection
- **Naming Convention**: Tournament files use descriptive names (e.g., `trash-panda-throwdown-001.blade.php`)
- **Image Assets**: Multiple responsive sizes generated for each image
- **Components**: Atomic design pattern with components and molecules

## Build Outputs
- **Local**: `build_local/` for development
- **Production**: `build_production/` for deployment to GitHub Pages
- **Assets**: Compiled to `source/assets/build/` then copied to build directories