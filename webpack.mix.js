const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw(
    {
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.css'],
    }
    )
    .js('source/_assets/js/main.js', 'js').vue()
    // .sass('source/_assets/sass/main.scss', 'css/main.css')
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
    .purgeCss({
        extensions: ['html', 'md', 'js', 'php', 'vue'],
        folders: ['source'],
        whitelistPatterns: [/language/, /hljs/, /mce/],
    })
    .sourceMaps()
    .version();
