module.exports = {
    presets: [
      '@babel/preset-env', // Transpila código moderno para ES5
      '@babel/preset-react' // Adiciona suporte ao React
    ],
    plugins: [
      '@babel/plugin-proposal-private-methods', // Se necessário
      '@babel/plugin-proposal-private-property-in-object' // Se necessário
    ]
  };