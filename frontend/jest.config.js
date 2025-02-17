module.exports = {
    transform: {
      "^.+\\.(js|jsx)$": "babel-jest"
    },
    transformIgnorePatterns: [
        "/node_modules/(?!axios|other-library-to-transform)/"
      ],
    moduleNameMapper: {
      "\\.(css|scss)$": "identity-obj-proxy"
    }
  };
  