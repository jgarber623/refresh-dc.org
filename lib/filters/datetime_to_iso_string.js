const dayjs = require('dayjs');

module.exports = date => {
  const day = dayjs(date);

  return day.format('YYYY-MM-DDTHH:mm:ssZ');
};
