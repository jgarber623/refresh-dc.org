const markdown = require('markdown-it');

module.exports = (() => {
  const options = {
    breaks: true,
    html: true,
    typographer: true
  };

  return markdown(options);
})();
