'use strict';
module.exports = function( grunt ) {

  // load all tasks
  require('load-grunt-tasks')(grunt);

  // show time
  require('time-grunt')(grunt);

  // load configs
  require('load-grunt-config')(grunt, {
    config:{
      pkg: grunt.file.readJSON('package.json'),
      path: 'cs-framework',
      assets: 'cs-framework/assets',
      dbox: '/home/codestar/Dropbox/CSFramework',
      banner: '/* <%= pkg.title %> | <%= pkg.description %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */'
    }
  });

};