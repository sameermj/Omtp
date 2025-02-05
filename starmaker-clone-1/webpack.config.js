const path = require('path');

module.exports = {
    entry: './src/frontend/index.js',
    output: {
        path: path.resolve(__dirname, 'public_html'),
        filename: 'bundle.js',
        publicPath: '/',
    },
    resolve: {
        extensions: ['.js', '.jsx', '.ts', '.tsx'],
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env', '@babel/preset-react'],
                    },
                },
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
            {
                test: /\.(png|jpg|gif|svg)$/,
                use: {
                    loader: 'file-loader',
                    options: {
                        name: '[path][name].[ext]',
                    },
                },
            },
        ],
    },
    devServer: {
        contentBase: path.join(__dirname, 'public_html'),
        compress: true,
        port: 9000,
        historyApiFallback: true,
    },
    mode: 'development',
};