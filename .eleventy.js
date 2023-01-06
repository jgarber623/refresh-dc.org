module.exports = eleventyConfig => {
  eleventyConfig.setLibrary('md', require('./lib/libraries/markdown.js'));
  eleventyConfig.setLiquidOptions(require('./lib/libraries/liquid.js'));

  eleventyConfig.addPlugin(require('./lib/plugins/postcss.js'));

  eleventyConfig
    .addPassthroughCopy('./src/assets/images')
    .addPassthroughCopy('./src/*.{ico,txt}');

  return {
    dir: {
      input: './src',
      layouts: '_layouts',
      output: './public'
    }
  };
};
