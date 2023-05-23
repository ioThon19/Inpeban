const path = require('path');

module.exports = {
  // Konfigurasi lainnya...
  module: {
    rules: [
        {
          test: /\.(png|jpg|jpeg|gif)$/i,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: '[name].[ext]',
                outputPath: 'images/',
                publicPath: 'images/',
              },
            },
          ],
        },
      ],
  },
};
