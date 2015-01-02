module.exports = {
  main: {
    options: {
      archive: '<%= dbox %>/<%= grunt.template.today("mm-yyyy") %>/<%= grunt.template.today("dd-mm-yy") %>-framework.zip'
    },
    files: [

      // single files
      { expand: true, src: ['Gruntfile.js'], dest: 'config/' },
      { expand: true, src: ['config.rb'], dest: 'config/' },
      { expand: true, src: ['package.json'], dest: 'config/' },
      { expand: true, src: ['.editorconfig'], dest: 'config/' },
      { expand: true, src: ['.jshintrc'], dest: 'config/' },

      // folders
      { expand: true, cwd: 'grunt', src: ['**'], dest: 'config/grunt' },
      { expand: true, cwd: 'cs-framework', src: ['**'], dest: 'cs-framework/' },

    ]
  }
};