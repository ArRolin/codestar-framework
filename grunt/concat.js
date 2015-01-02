module.exports = {
  js: {
    options: {
      separator: ';',
    },
    src: [
      '<%= assets %>/js/vendor/*.js',
    ],
    dest: '<%= assets %>/js/cs-plugins.js',
  }
};