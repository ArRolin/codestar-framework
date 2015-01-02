module.exports = {
  dist: {
    options: {
      banner: '<%= banner %>\n'
    },
    files: {
      '<%= assets %>/js/cs-plugins.min.js': ['<%= concat.js.dest %>'],
      '<%= assets %>/js/cs-framework.min.js': ['<%= assets %>/js/cs-framework.js']
    }
  }
};