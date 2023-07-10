module.exports = {
  layout: 'event',
  permalink: 'events/{{ page.date | date: dates.year }}/{{ page.fileSlug }}/',
  tags: ['event']
};
