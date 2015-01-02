module.exports = {
  target: {
    options: {
      cwd: '<%= path %>/',
      domainPath: '/languages/',
      potFilename: 'cs-framework.pot',
      mainFile: 'cs-framework.php',
      type: 'wp-plugin',
      potHeaders: {
        //poedit: true,
        //'x-poedit-keywordslist': true
      },
      processPot: function( pot, options ) {

        var translation,
            excluded_meta = [
              'Plugin Name of the plugin/theme',
              'Plugin URI of the plugin/theme',
              'Template Name of the plugin/theme',
              'Theme Name of the plugin/theme',
              'Theme URI of the plugin/theme',
              'Description of the plugin/theme',
              'Author of the plugin/theme',
              'Author URI of the plugin/theme',
            ],
            excluded_string = [];

        for ( translation in pot.translations[''] ) {
          if ( 'undefined' !== typeof pot.translations[''][ translation ].comments.extracted ) {
            if ( excluded_meta.indexOf( pot.translations[''][ translation ].comments.extracted ) >= 0 ) {
              delete pot.translations[''][ translation ];
            }
          }
        }

        for ( translation in pot.translations[''] ) {
          if ( 'undefined' !== typeof pot.translations[''][translation] ) {
            if ( excluded_string.indexOf( translation ) >= 0 ) {
              delete pot.translations[''][translation];
            }
          }
        }

        return pot;

      }
    }
  }
};