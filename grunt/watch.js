module.exports = {
  css: {
    files: [
      '<%= assets %>/scss/*.scss',
      '<%= assets %>/scss/**/*.scss',
    ],
    tasks: ['compass:dev'],
    options: { livereload: true, spawn: false }
  },

  js: {
    files: ['<%= jshint.files %>'],
    tasks: ['jshint'],
    options: { livereload: true, spawn: false }
  },

  livereload: {
    options: {
      livereload: true,
      spawn: false
    },
    files: [
      '<%= path %>/*.php',
      '<%= path %>/**/*.php'
    ]
  }
};