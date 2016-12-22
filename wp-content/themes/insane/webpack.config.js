var LiveReloadPlugin = require('webpack-livereload-plugin');
var webpackUglifyJsPlugin = require('webpack-uglify-js-plugin');

module.exports = {
    entry: './lib/src/main.js',
    output: {
        path: './lib/dist',
        filename: 'build.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [{
                    loader: 'babel-loader',
                }],
            },
            {
                test: /\.vue$/,
                use: [{
                    loader: 'vue-loader',
                }],
            }
        ]
    },
    plugins: [
        new LiveReloadPlugin({appendScriptTag: true}),

        new webpackUglifyJsPlugin({
            cacheFolder: './lib/dist',
            debug: true,
            minimize: true,
            sourceMap: false,
            output: {
                comments: false
            },
            compressor: {
                warnings: false
            }
        }),
    ],
}