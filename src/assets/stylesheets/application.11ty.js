const fs = require('fs');
const path = require('path');
const postcss = require('postcss');

const postcssPlugins = [
  require('postcss-easy-import'),
  require('postcss-nesting'),
  require('cssnano')({
    preset: 'default'
  })
];

module.exports = class {
  data() {
    return {
      permalink: '/assets/stylesheets/application.css'
    };
  }

  render({ permalink }) {
    const inputFilePath = path.join('./src', permalink);
    const css = fs.readFileSync(inputFilePath).toString();

    return postcss(postcssPlugins).process(css, { from: inputFilePath, to: permalink }).then(result => result.css);
  }
};
