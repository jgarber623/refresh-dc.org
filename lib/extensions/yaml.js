const yaml = require('js-yaml');

module.exports = contents => yaml.safeLoad(contents);
