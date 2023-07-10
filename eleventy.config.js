module.exports = function(eleventyConfig) {
  // Passthrough File Copy
  eleventyConfig
    .addPassthroughCopy('./src/*.{ico,txt}')
    .addPassthroughCopy('./src/assets/images');

  // Libraries
  eleventyConfig.setLibrary('md', require('./lib/libraries/markdown.js'));
  eleventyConfig.setLiquidOptions(require('./lib/libraries/liquid.js'));

  // Plugins
  eleventyConfig.addPlugin(require('./lib/plugins/postcss.js'));

  return {
    dir: {
      input: './src',
      layouts: '_layouts',
      output: './public'
    }
  };
};
