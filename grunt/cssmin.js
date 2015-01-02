module.exports = {
  dist: {
    options: {
      banner: '<%= banner %>'
    },
    files: {
      '<%= assets %>/css/cs-framework.min.css': ['<%= assets %>/css/cs-framework.css']
    }
  }
};