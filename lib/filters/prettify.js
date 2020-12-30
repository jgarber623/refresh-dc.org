module.exports = str => {
  if (typeof str !== 'string') {
    return str;
  }

  return String(str).replace(/\.html$/, '');
};
