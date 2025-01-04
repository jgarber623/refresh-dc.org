import { readFileSync } from "node:fs";

import eleventyPluginLiquid from "@jgarber/eleventy-plugin-liquid";
import eleventyPluginMarkdown from "@jgarber/eleventy-plugin-markdown";

import markdownItAttrs from "markdown-it-attrs";

export default function(eleventyConfig) {
  // Global Data
  eleventyConfig.addGlobalData("app", JSON.parse(readFileSync("./src/manifest.webmanifest")));

  // Configuration
  eleventyConfig.setDataFileBaseName("_data");

  // Passthrough File Copy
  eleventyConfig
    .addPassthroughCopy("./src/_headers")
    .addPassthroughCopy("./src/*.{ico,txt,webmanifest}")
    .addPassthroughCopy("./src/assets");

  // Plugins
  eleventyConfig.addPlugin(eleventyPluginLiquid);

  eleventyConfig.addPlugin(eleventyPluginMarkdown, {
    plugins: [markdownItAttrs],
  });
}

export const config = {
  dir: {
    input: "./src",
  },
};
