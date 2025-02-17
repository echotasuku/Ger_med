module.exports = {
    transform: {
      "^.+\\.(js|jsx)$": "babel-jest"
    },
    transformIgnorePatterns: [
      "/node_modules/(?!axios)/" // Transforma o axios e outras bibliotecas ES Modules
    ],
    moduleNameMapper: {
      "\\.(css|scss)$": "identity-obj-proxy"
    },
    testEnvironment: "jsdom" // Adiciona suporte ao ambiente de navegador
  };