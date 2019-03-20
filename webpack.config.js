const path = require('path');
var webpack = require('webpack');
module.exports = {
    // モードの設定、v4系以降はmodeを指定しないと、webpack実行時に警告が出る
    mode: 'development',
    // エントリーポイントの設定
    entry: './resources/js/index.js',
    // 出力の設定
    output: {
        // 出力するファイル名
        filename: 'bundle.js',
        // 出力先のパス（絶対パスを指定する必要がある）
        path: path.join(__dirname, 'public/js')
    },
    module: {
        rules: [
            {
                // ローダー対象のファイル
                test: /\.js$/,
                // 処理対象から除外するディレクトリ
                exclude: '/node_modules/',
                use: [
                    {
                        // 利用するローダー
                        loader: 'babel-loader',
                        // オプション
                        // babelの設定
                        options: {
                            presets: [
                                ['@babel/preset-env', { modules: false }],
                                ['@babel/react']//jsxを解釈
                            ]
                        }
                    }
                ]
            },
            {
                enforce: 'pre',
                test: /\.js$/,
                exclude: '/node_modules/',
                loader: 'eslint-loader'
            }
        ]
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery',
            // perfect-scrollbarがcoreuiで必要
            Popper: ['popper.js', 'perfect-scrollbar', 'default'],
        })
    ]
};
