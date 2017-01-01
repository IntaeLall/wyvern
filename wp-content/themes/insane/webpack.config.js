const webpack    = require('webpack');
const path       = require('path');
const projectRoot= path.resolve(__dirname, './');

const config = {
    entry: __dirname + '/lib/src/main.js',

    output: {
        path: __dirname + '/lib/dist',
        filename: 'build.js'
    },

    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            'vue$': 'vue/dist/vue.common.js',
        },
        modules: [
            path.resolve('./lib/src'),
            'node_modules'
        ],
    },

    module: {
        loaders: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.js$/,
                loader: 'babel-loader?presets[]=es2015',
                exclude: /node_modules/
            },
        ],
    },

    plugins: [
        new webpack.optimize.UglifyJsPlugin({
            compress: {
                screw_ie8: true,
                warnings: false
            }
        })
    ]

};

module.exports = config;