const mix = require('laravel-mix');
const path = require('path');

mix
  .js('resources/vue/main.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [])
  .browserSync('localhost:8000')
  .webpackConfig({
    resolve: {
      alias: {
        '@': path.resolve(__dirname, 'resources/vue'),
      },
    },
  })
  .vue();
