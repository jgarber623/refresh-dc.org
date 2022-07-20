module.exports = eleventyConfig => {
  eleventyConfig.setLibrary('md', require('./lib/libraries/markdown.js'));
  eleventyConfig.setLiquidOptions(require('./lib/libraries/liquid.js'));

  eleventyConfig.addDataExtension('yml', require('./lib/extensions/yaml.js'));
  eleventyConfig.addExtension('css', require('./lib/extensions/css.js'));

  eleventyConfig.addPassthroughCopy('./src/assets/images');
  eleventyConfig.addPassthroughCopy('./src/favicon.ico');
  eleventyConfig.addPassthroughCopy('./src/robots.txt');

  return {
    dir: {
      input: './src',
      layouts: '_layouts',
      output: './public'
    },

    templateFormats: ['css', 'liquid', 'md']
  };
};
