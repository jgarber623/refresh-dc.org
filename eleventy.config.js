module.exports = function(eleventyConfig) {
  // Global Data
  eleventyConfig.addGlobalData("app", require("./src/manifest.webmanifest.json"));

  // Passthrough File Copy
  eleventyConfig
    .addPassthroughCopy("./src/_headers")
    .addPassthroughCopy("./src/*.{ico,txt}")
    .addPassthroughCopy("./src/assets/images")
    .addPassthroughCopy({
      "./src/manifest.webmanifest.json": "manifest.webmanifest",
    });

  // Plugins
  eleventyConfig.addPlugin(require("@jgarber/eleventy-plugin-liquid"), {
    globals: {
      dates: {
        display: "%A, %B %e<sup>%q</sup>, %Y",
        time: "%l:%M %p",
        year: "%Y",
      },
    },
  });

  eleventyConfig.addPlugin(require("@jgarber/eleventy-plugin-markdown"));
  eleventyConfig.addPlugin(require("@jgarber/eleventy-plugin-postcss"));

  return {
    dir: {
      input: "./src",
    },
  };
};
