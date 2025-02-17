module.exports = {
    presets: [
      'react-app', // Preset usado pelo Create React App, que já inclui tudo o que você precisa
    ],
    plugins: [
      '@babel/plugin-proposal-private-methods',  // Se necessário
      '@babel/plugin-proposal-private-property-in-object',  // Se necessário
    ],
  };
  