module.exports = {
  'default': ['watch'],
  'pot': ['makepot'],
  'mo': ['po2mo'],
  'backup': ['compress'],
  'build': ['compass', 'concat', 'uglify', 'cssmin', 'makepot'],
};