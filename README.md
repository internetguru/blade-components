
# Internetguru Blade Components

This package provides a set of reusable Blade components for your Laravel applications.

## Installation

### Step 1: Install the Package

Require the package via Composer:

```sh
composer require internetguru/blade-components
```

### Step 2: Install Bootstrap

Install or verify Bootstrap via npm in your Laravel project:

```sh
npm install bootstrap
```

### Step 3: Publish the SASS Assets

To publish the SASS assets to your Laravel project's resources directory, run:

```sh
php artisan vendor:publish --tag=sass
```

This will copy the SASS files from the package to `resources/sass/vendor/internetguru/blade-components`.

### Step 5: Compile the SASS

Update your build process to include the new SASS file and compile it. You can use **Vite** or Laravel Mix for this purpose.

#### Vite (`vite.config.js`)

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/sass/vendor/internetguru/blade-components/app.scss',
            ],
            refresh: true,
        }),
    ],
});
```
#### Laravel Mix (`webpack.mix.js`)

```js
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/vendor/internetguru/blade-components/app.scss', 'public/css');
```

### Step 6: Run the Build Process

Compile your SASS files to include Bootstrap styles:

```sh
npm install && npm run dev
```

## Usage

### Using Blade Components

The package registers Blade components under the `ig` namespace. You can use these components in your views as follows:

```html
<x-ig::btn>
    Click Me!
</x-ig::btn>
```
