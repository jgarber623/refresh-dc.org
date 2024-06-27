import cssnano from "cssnano";
import postcssEasyImport from "postcss-easy-import";
import postcssNesting from "postcss-nesting";

export default {
  plugins: [
    postcssEasyImport,
    postcssNesting,
    cssnano,
  ],
};
