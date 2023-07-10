module.exports = {
  extends: '@jgarber/stylelint-config',
  rules: {
    'property-no-vendor-prefix': [
      true,
      {
        ignoreProperties: ['text-decoration-skip', 'text-size-adjust']
      }
    ]
  }
};
