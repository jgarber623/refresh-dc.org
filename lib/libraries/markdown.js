const markdown = require('markdown-it');

module.exports = markdown({
  html: true,
  breaks: true,
  typographer: true
});
