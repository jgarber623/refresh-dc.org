module.exports = eleventy => {
  eleventy.setBrowserSyncConfig({
    serveStatic: ['public'],
    serveStaticOptions: {
      extensions: ['html']
    }
  });

  eleventy.setLibrary('md', require('./lib/libraries/markdown.js'));

  eleventy.addDataExtension('yml', require('./lib/extensions/yaml.js'));

  eleventy.addFilter('datetime_to_iso_string', require('./lib/filters/datetime_to_iso_string.js'));
  eleventy.addFilter('datetime_to_string', require('./lib/filters/datetime_to_string.js'));
  eleventy.addFilter('prettify', require('./lib/filters/prettify.js'));

  eleventy.addPassthroughCopy('./src/assets/images');
  eleventy.addPassthroughCopy('./src/favicon.ico');
  eleventy.addPassthroughCopy('./src/robots.txt');

  eleventy.addWatchTarget('./src/assets/stylesheets');

  return {
    dir: {
      input: './src',
      layouts: '_layouts',
      output: './public'
    }
  };
};
