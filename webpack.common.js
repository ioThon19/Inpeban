const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
  entry: {
    app: path.resolve(__dirname, 'src/scripts/index.js'),
    login: path.resolve(__dirname, 'src/scripts/login.js'),
    daftar: path.resolve(__dirname, 'src/scripts/daftar.js'),
    index2: path.resolve(__dirname, 'src/scripts/index2.js'),
    ditolak: path.resolve(__dirname, 'src/scripts/ditolak.js'),
    masuk: path.resolve(__dirname, 'src/scripts/masuk.js'),
    proses: path.resolve(__dirname, 'src/scripts/proses.js'),
    selesai: path.resolve(__dirname, 'src/scripts/selesai.js'),
    detail: path.resolve(__dirname, 'src/scripts/detail.js'),
  },
  output: {
    filename: '[name].bundle.js',
    path: path.resolve(__dirname, 'dist'),
    clean: true,
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          {
            loader: 'style-loader',
          },
          {
            loader: 'css-loader',
          },
        ],
      },
    ],
  },
  plugins: [
    new HtmlWebpackPlugin({
      filename: 'index.html',
      template: path.resolve(__dirname, 'src/templates/index.html'),
    }),
    new HtmlWebpackPlugin({
      filename: 'login.html',
      template: path.resolve(__dirname, 'src/templates/login.html'),
      chunks: ['login'],
    }),
    new HtmlWebpackPlugin({
      filename: 'daftar.html',
      template: path.resolve(__dirname, 'src/templates/daftar.html'),
      chunks: ['daftar'],
    }),
    new HtmlWebpackPlugin({
      filename: 'index2.html',
      template: path.resolve(__dirname, 'src/templates/index2.html'),
      chunks: ['index2'],
    }),
    new HtmlWebpackPlugin({
      filename: 'ditolak.html',
      template: path.resolve(__dirname, 'src/templates/ditolak.html'),
      chunks: ['ditolak'],
    }),
    new HtmlWebpackPlugin({
      filename: 'proses.html',
      template: path.resolve(__dirname, 'src/templates/proses.html'),
      chunks: ['proses'],
    }),
    new HtmlWebpackPlugin({
      filename: 'masuk.html',
      template: path.resolve(__dirname, 'src/templates/masuk.html'),
      chunks: ['masuk'],
    }),
    new HtmlWebpackPlugin({
      filename: 'selesai.html',
      template: path.resolve(__dirname, 'src/templates/selesai.html'),
      chunks: ['selesai'],
    }),
    new HtmlWebpackPlugin({
      filename: 'detail.html',
      template: path.resolve(__dirname, 'src/templates/detail.html'),
      chunks: ['detail'],
    }),
    new CopyWebpackPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, 'src/public/'),
          to: path.resolve(__dirname, 'dist/'),
        },
      ],
    }),
  ],
};
