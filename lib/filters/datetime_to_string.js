const dayjs = require('dayjs');

dayjs.extend(require('dayjs/plugin/advancedFormat'));

module.exports = date => {
  const day = dayjs(date);
  const ordinal = day.format('Do').match(/\d{1,2}(.+)/)[1];

  return day.format(`dddd, MMMM D[<sup>${ordinal}</sup>], YYYY`);
};
