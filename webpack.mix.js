let mix = require('webpack-mix');


mix
.js('src/alertify/alertify.min.js', 'dist/')
.js('src/app.js', 'dist/js/')
.copy('src/alertify/alertify.min.css', 'dist/')
.copy('src/tailwind.min.css', 'dist/');


mix.webpackConfig({
    output:{
        chunkFilename:'dist/vuejs_code_split/[name].js',
    }
})
