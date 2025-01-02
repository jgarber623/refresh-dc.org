import liquidPlugin from "@jgarber/eleventy-plugin-liquid";
import markdownPlugin from "@jgarber/eleventy-plugin-markdown";
import postcssPlugin from "@jgarber/eleventy-plugin-postcss";

import manifest from "./src/manifest.webmanifest.json" with { type: "json" };

export default function(eleventyConfig) {
  // Global Data
  eleventyConfig.addGlobalData("app", manifest);

  // Passthrough File Copy
  eleventyConfig
    .addPassthroughCopy("./src/_headers")
    .addPassthroughCopy("./src/*.{ico,txt}")
    .addPassthroughCopy("./src/assets/images")
    .addPassthroughCopy({
      "./src/manifest.webmanifest.json": "manifest.webmanifest",
    });

  // Plugins
  eleventyConfig.addPlugin(liquidPlugin, {
    globals: {
      dates: {
        display: "%A, %B %e<sup>%q</sup>, %Y",
        time: "%l:%M %p",
        year: "%Y",
      },
    },
  });

  eleventyConfig.addPlugin(markdownPlugin);
  eleventyConfig.addPlugin(postcssPlugin);
}

export const config = {
  dir: {
    input: "./src",
  },
};
