const yaml = require('js-yaml');

module.exports = contents => yaml.load(contents);
