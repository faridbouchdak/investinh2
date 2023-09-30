const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw(
    {
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.css'],
    }
    )
    .js('source/_assets/js/main.js', 'js')
    .vue()
    .postCss('source/_assets/css/main.css', 'css/main.css', [
        require('postcss-import'),
        require('tailwindcss/nesting'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
        // postCss: [
        //     require('tailwindcss'),
        // ],
    })
    .browserSync({
        server: 'build_local',
        files: ['build_local/**'],
    })
    .sourceMaps()
    .version();
