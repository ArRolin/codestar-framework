// the semi-colon before the function invocation is a safety
// net against concatenated scripts and/or other plugins
// that are not closed properly.
// set root Object
;(function ( $, window, document, undefined ) {
  'use strict';

  $.CSFRAMEWORK = $.CSFRAMEWORK || {};

  // ======================================================
  // CSFRAMEWORK TAB NAVIGATION
  // ------------------------------------------------------
  $.fn.CSFRAMEWORK_TAB_NAVIGATION = function() {
    return this.each(function() {

      var $this   = $(this),
          $nav    = $this.find('.cs-nav'),
          $reset  = $this.find('.cs-reset'),
          $expand = $this.find('.cs-expand-all');

      $nav.find('ul:first a').on('click', function (e) {

        e.preventDefault();

        var $el     = $(this),
            $next   = $el.next(),
            $target = $el.data('section');

        if( $next.is('ul') ) {

          $next.slideToggle( 'fast' );
          $el.closest('li').toggleClass('cs-tab-active');

        } else {

          $('#cs-tab-'+$target).fadeIn('fast').siblings().hide();
          $nav.find('a').removeClass('cs-section-active');
          $el.addClass('cs-section-active');
          $reset.val($target);

        }

      });

      $expand.on('click', function (e) {
        e.preventDefault();
        $this.find('.cs-body').toggleClass('cs-show-all');
        $(this).find('.fa').toggleClass('fa-eye-slash' ).toggleClass('fa-eye');
      });

    });
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK DEPENDENCY
  // ------------------------------------------------------
  $.CSFRAMEWORK.DEPENDENCY = function( el, param ) {

    // Access to jQuery and DOM versions of element
    var base     = this;
        base.$el = $(el);
        base.el  = el;

    base.init = function () {

      base.ruleset = $.deps.createRuleset();

      // required for shortcode attrs
      var cfg = {
        show: function( el ) {
          el.removeClass('hidden');
        },
        hide: function( el ) {
          el.addClass('hidden');
        },
        log: false,
        checkTargets: false
      };

      if( param !== undefined ) {
        base.depSub();
      } else {
        base.depRoot();
      }

      $.deps.enable( base.$el, base.ruleset, cfg );

    };

    base.depRoot = function() {

      base.$el.each( function() {

        var _elem = $(this);

        _elem.find('[data-controller]').each( function() {

          var _this         = $(this),
              _dependElem   = _this.data('controller'),
              _dependRule   = _this.data('condition'),
              _dependValue  = _this.data('value'),
              _dependTarget = _elem.find('[data-depend-id="' + _dependElem + '"]');

          base.ruleset.createRule(_dependTarget, _dependRule, _dependValue).include(_this);

        });

      });

    };

    base.depSub = function() {

      base.$el.each( function() {

        var _elem = $(this);

        _elem.find('[data-sub-controller]').each( function() {

          var _this     = $(this),
            _dependElem   = _this.data('sub-controller'),
            _dependRule   = _this.data('sub-condition'),
            _dependValue  = _this.data('sub-value'),
            _dependTarget = _elem.find('[data-depend-id="' + _dependElem + '"]');

          base.ruleset.createRule(_dependTarget, _dependRule, _dependValue).include(_this);

        });

      });

    };

    base.init();
  };

  $.fn.CSFRAMEWORK_DEPENDENCY = function ( param ) {
    return this.each(function () {
      new $.CSFRAMEWORK.DEPENDENCY( this, param );
    });
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK CHOSEN
  // ------------------------------------------------------
  $.fn.CSFRAMEWORK_CHOSEN = function() {
    return this.each(function() {
      $(this).chosen({allow_single_deselect: true, disable_search_threshold: 15, width: parseFloat( $(this).actual('width') + 25 ) +'px'});
    });
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK IMAGE SELECTOR
  // ------------------------------------------------------
  $.fn.CSFRAMEWORK_IMAGE_SELECTOR = function() {
    return this.each(function() {

      $('label', this).each( function () {

        var $label = $(this);

        if ( $label.find('input').is(':checked') ) {
          $label.addClass('selected');
        }

        $label.bind('click', function() {

          var $element = $(this);

          if ( $element.find('input').is(':checked') ) {

            $element.addClass('selected').siblings().removeClass('selected');

          } else {

            $element.removeClass('selected');
            $element.parent().find('input').each( function() {
              $(this).attr('checked', false);
            });

          }

        });

      });

    });
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK MEDIA UPLOADER / UPLOAD
  // ------------------------------------------------------
  $.fn.CSFRAMEWORK_UPLOADER = function() {
    return this.each(function() {

      var el           = $(this),
          media_upload = el.find('.cs-add-media'),
          send_val     = el.find('.cs-attachment'),
          frame;

      media_upload.click( function( event ) {

        event.preventDefault();

        // Check if the `wp.media.gallery` API exists.
        if ( typeof wp === 'undefined' || ! wp.media || ! wp.media.gallery ) {
          return;
        }

        // If the media frame already exists, reopen it.
        if ( frame ) {
          frame.open();
          return;
        }

        // Create the media frame.
        frame = wp.media.frames.customUpload = wp.media({

          // Set the title of the modal.
          title: media_upload.data('frame-title'),

          // Tell the modal to show only images.
          library: {
            type: media_upload.data('upload-type')
          },

          // Customize the submit button.
          button: {
            // Set the text of the button.
            text: media_upload.data('insert-title'),
          }

        });

        // When an image is selected, run a callback.
        frame.on( 'select', function() {

          // Grab the selected attachment.
          var attachment = frame.state().get('selection').first();

          send_val.val( attachment.attributes.url ).trigger('keyup');

        });

        // Finally, open the modal.
        frame.open();

      });

    });

  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK TYPOGRAPHY
  // ------------------------------------------------------
  $.fn.CSFRAMEWORK_TYPOGRAPHY = function() {
    return this.each( function() {

      var typography        = $(this),
          typography_select = typography.find('.cs-typo-family'),
          variants_select   = typography.find('.cs-typo-variant'),
          variants;

      typography_select.on('change', function() {

        var _this           = $(this),
            _type           = _this.find(':selected').data('type'),
            _variants       = _this.find(':selected').data('variants'),
            _current        = _this.find(':selected').val(),
            _variants_opts  = variants_select.find('option');

        variants = _variants.split('|');

        // clear variants
        _variants_opts.remove();

        // set default variants
        $.each( variants, function( key, text ) {
          variants_select.append('<option value="'+ text +'">'+ text +'</option>');
        });

        // selected regular as default
        variants_select.find('option[value="regular"]').attr('selected', 'selected');

        // update chosen
        variants_select.trigger('chosen:updated');

      });

    });
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK GROUP
  // ------------------------------------------------------
  $.fn.CSFRAMEWORK_GROUP = function() {
    return this.each(function() {

      var _this           = $(this),
          field_groups    = _this.find('.cs-groups'),
          accordion_group = _this.find('.cs-accordion'),
          clone_group     = _this.find('.cs-group:first').clone();

      if ( accordion_group.length ) {
        accordion_group.accordion({
          header: '> div > h4',
          collapsible : true,
          active: false,
          animate: 250,
          heightStyle: 'content',
          icons: {
            'header': 'dashicons dashicons-arrow-right',
            'activeHeader': 'dashicons dashicons-arrow-down'
          },
          beforeActivate: function( event, ui ) {
            $(ui.newPanel).CSFRAMEWORK_DEPENDENCY( 'sub' );
          }
        });
      }

      field_groups.sortable({
        axis: 'y',
        handle: 'h4',
        helper: 'clone',
        cursor: 'move',
        placeholder: 'widget-placeholder',
        start: function( event, ui ) {
          var inside = ui.item.children('.ui-accordion-content');
          if ( inside.css('display') === 'block' ) {
            inside.hide();
            field_groups.sortable('refreshPositions');
          }
        },
        stop: function( event, ui ) {
          ui.item.children( 'h4' ).triggerHandler( 'focusout' );
          accordion_group.accordion({ active:false });
        }
      });

      var i = 0;
      $('.cs-add-group', _this).click( function( e ) {

        e.preventDefault();

        clone_group.find('input, select, textarea').each( function () {
          this.name = this.name.replace(/\[(\d+)\]/,function(string, id) {
            return '[' + (parseInt(id,10)+1) + ']';
          });
        });

        var cloned = clone_group.clone().removeClass('hidden');
        field_groups.append(cloned);

        if ( accordion_group.length ) {
          field_groups.accordion('refresh');
          field_groups.accordion({ active: cloned.index() });
        }

        field_groups.find('input, select, textarea').each( function () {
          this.name = this.name.replace('[_nonce]', '');
        });

        // run all field plugins
        cloned.CSFRAMEWORK_DEPENDENCY( 'sub' );
        $.CSFRAMEWORK.RELOAD_PLUGINS();

        i++;

      });

      field_groups.on('click', '.cs-remove-group', function(e) {
        e.preventDefault();
        $(this).closest('.cs-group').remove();
      });

    });
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK RESET CONFIRM
  // ------------------------------------------------------
  $.fn.CSFRAMEWORK_CONFIRM = function() {
    return this.each( function() {
      $(this).click( function( e ) {
        if ( !confirm('Are you sure?') ) {
          e.preventDefault();
        }
      });
    });
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK SAVE OPTIONS
  // ------------------------------------------------------
  $.fn.CSFRAMEWORK_SAVE_AJAX = function() {
    return this.each( function() {

      var $this  = $(this),
          $save  = $this.next(),
          $ajax  = parseInt( $save.data('ajax') ),
          $text  = $save.data('save'),
          $value = $save.val();

      $save.click( function ( e ) {

        if( $ajax ) {

          $save.prop('disabled', true).attr('value', $text);

          var serializedOptions = $('#csframework_form').serialize();

          $.post( 'options.php', serializedOptions ).error( function() {
            alert('Error, Please try again.');
          }).success( function() {
            $save.prop('disabled', false).attr('value', $value);
            $this.hide().fadeIn().delay(250).fadeOut();
          });

          e.preventDefault();

        } else {

          $save.addClass('disabled').attr('value', $text);

        }

      });

    });
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK UI DIALOG OVERLAY HELPER
  // ------------------------------------------------------
  $.widget( 'ui.dialog', $.ui.dialog, {
      _createOverlay: function() {
        this._super();
        if ( !this.options.modal ) { return; }
        this._on(this.overlay, {click: 'close'});
      }
    }
  );

  // ======================================================
  // CSFRAMEWORK ICONS MANAGER
  // ------------------------------------------------------
  $.CSFRAMEWORK.ICONS_MANAGER = function() {

    var base   = this,
        onload = true,
        $parent;

    base.init = function () {

      $(document.body).on('click', '.cs-icon-add', function( e ) {

        e.preventDefault();

        var $this   = $(this),
            $dialog = $('#cs-icon-dialog'),
            $load   = $dialog.find('.cs-dialog-load'),
            $select = $dialog.find('.cs-dialog-select'),
            $insert = $dialog.find('.cs-dialog-insert'),
            $search = $dialog.find('.cs-icon-search');

        // set parent
        $parent = $this.closest('.cs-icon-select');

        // open dialog
        $dialog.dialog({
          width: 850,
          height: 700,
          modal: true,
          resizable: false,
          closeOnEscape: true,
          position: {my: 'center', at: 'center', of: window},
          open: function() {

            // fix button for VC
            $('.ui-dialog-titlebar-close').addClass('ui-button');

            // set viewpoint
            $(window).on('resize', function () {

              var height      = $(window).height(),
                  load_height = Math.floor( height - 237 ),
                  set_height  = Math.floor( height - 125 );

              $dialog.dialog('option', 'height', set_height).parent().css('max-height', set_height);
              $dialog.css('overflow', 'auto');
              $load.css( 'height', load_height );

            }).resize();

          },
        });

        // load icons
        if( onload ) {

          $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
              action: 'cs-get-icons'
            },
            success: function( content ) {

              $load.html( content );
              onload = false;

              $load.on('click', 'a', function( e ) {

                e.preventDefault();

                var icon = $(this).data('icon');

                $parent.find('i').removeAttr('class').addClass(icon);
                $parent.find('input').val(icon);
                $parent.find('.cs-icon-preview').removeClass('hidden');
                $parent.find('.cs-icon-remove').removeClass('hidden');
                $dialog.dialog('close');

              });

              $search.keyup( function(){

                var value  = $(this).val(),
                    $icons = $load.find('a');

                $icons.each(function() {

                  var $ico = $(this);

                  if ( $ico.data('icon').search( new RegExp( value, 'i' ) ) < 0 ) {
                    $ico.hide();
                  } else {
                    $ico.show();
                  }

                });

              });

              $load.find('.cs-icon-tooltip').tooltip({html:true, placement:'top', container:'body'});

            }
          });

        }

      });

      $(document.body).on('click', '.cs-icon-remove', function( e ) {

        e.preventDefault();

        var $this   = $(this),
            $parent = $this.closest('.cs-icon-select');

        $parent.find('.cs-icon-preview').addClass('hidden');
        $parent.find('input').val('');
        $this.addClass('hidden');

      });

    };

    // run initializer
    base.init();
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK SHORTCODE MANAGER
  // ------------------------------------------------------
  $.CSFRAMEWORK.SHORTCODE_MANAGER = function() {

    var base = this, deploy_atts;

    base.init = function () {

      var $dialog          = $('#cs-shortcode-dialog'),
          $insert          = $dialog.find('.cs-dialog-insert'),
          $shortcodeload   = $dialog.find('.cs-dialog-load'),
          $selector        = $dialog.find('.cs-dialog-select'),
          shortcode_target = false,
          shortcode_button,
          shortcode_name,
          shortcode_view,
          shortcode_clone;

      $(document.body).on('click', '.cs-shortcode', function( e ) {


        e.preventDefault();

        shortcode_button = $(this);
        shortcode_target = shortcode_button.hasClass('cs-shortcode-textarea');

        $dialog.dialog({
          width: 850,
          height: 700,
          modal: true,
          resizable: false,
          closeOnEscape: true,
          position: {my: 'center', at: 'center', of: window},
          open: function() {

            // fix button for VC
            $('.ui-dialog-titlebar-close').addClass('ui-button');

            // set viewpoint
            $(window).on('resize', function () {

              var height      = $(window).height(),
                  load_height = Math.floor( height - 281 ),
                  set_height  = Math.floor( height - 125 );

              $dialog.dialog('option', 'height', set_height).parent().css('max-height', set_height);
              $dialog.css('overflow', 'auto');
              $shortcodeload.css( 'height', load_height );

            }).resize();

          },
          close: function() {
            shortcode_target = false;
          }
        });

      });


      $selector.on( 'change', function() {

        var elem_this      = $(this);
            shortcode_name = elem_this.val();
            shortcode_view = elem_this.find(':selected').data('view');

        // check val
        if( shortcode_name.length ){

          $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
              action: 'cs-get-shortcode',
              shortcode: shortcode_name
            },
            success: function( content ) {

              $shortcodeload.html( content );
              $insert.parent().removeClass('hidden');

              shortcode_clone = $('.cs-shortcode-clone', $dialog).clone();

              $shortcodeload.CSFRAMEWORK_DEPENDENCY();
              $shortcodeload.CSFRAMEWORK_DEPENDENCY('sub');
              $.CSFRAMEWORK.RELOAD_PLUGINS();

            }
          });

        } else {

          $insert.parent().addClass('hidden');
          $shortcodeload.html('');

        }

      });

      $insert.click( function ( e ) {

        e.preventDefault();

        var send_to_shortcode = '',
            ruleAttr          = 'data-atts',
            cloneAttr         = 'data-clone-atts',
            cloneID           = 'data-clone-id';

        switch ( shortcode_view ){

          case 'contents':

            $('[' + ruleAttr + ']', '.cs-dialog-load').each( function() {
              var _this = $(this), _atts = _this.data('atts');
              send_to_shortcode += '['+_atts+']';
              send_to_shortcode += _this.val();
              send_to_shortcode += '[/'+_atts+']';
            });

          break;

          case 'clone':

            send_to_shortcode += '[' + shortcode_name; // begin: main-shortcode

            // main-shortcode attributes
            $('[' + ruleAttr + ']', '.cs-dialog-load .cs-element:not(.hidden)').each( function() {
              var _this_main = $(this), _this_main_atts = _this_main.data('atts');
              send_to_shortcode += base.validate_atts( _this_main_atts, _this_main );  // validate empty atts
            });

            send_to_shortcode += ']'; // end: main-shortcode attributes

            // multiple-shortcode each
            $('[' + cloneID + ']', '.cs-dialog-load').each( function() {

                var _this_clone = $(this), _clone_id = _this_clone.data('clone-id');

                send_to_shortcode += '[' + _clone_id; // begin: multiple-shortcode

                // multiple-shortcode attributes
                $('[' + cloneAttr + ']', _this_clone.find('.cs-element').not('.hidden') ).each( function() {

                  var _this_multiple = $(this), _atts_multiple = _this_multiple.data('clone-atts');

                  // is not attr content, add shortcode attribute else write content and close shortcode tag
                  if( _atts_multiple !== 'content' ){
                    send_to_shortcode += base.validate_atts( _atts_multiple, _this_multiple ); // validate empty atts
                  }else if ( _atts_multiple === 'content' ){
                    send_to_shortcode += ']';
                    send_to_shortcode += _this_multiple.val();
                    send_to_shortcode += '[/'+_clone_id+'';
                  }
                });

                send_to_shortcode += ']'; // end: multiple-shortcode

            });

            send_to_shortcode += '[/' + shortcode_name + ']'; // end: main-shortcode

          break;

          case 'clone_duplicate':

            // multiple-shortcode each
            $('[' + cloneID + ']', '.cs-dialog-load').each( function() {

              var _this_clone = $(this), _clone_id = _this_clone.data('clone-id');

              send_to_shortcode += '[' + _clone_id; // begin: multiple-shortcode

              // multiple-shortcode attributes
              $('[' + cloneAttr + ']', _this_clone.find('.cs-element').not('.hidden') ).each( function() {

                var _this_multiple = $(this), _atts_multiple = _this_multiple.data('clone-atts');

                // is not attr content, add shortcode attribute else write content and close shortcode tag
                if( _atts_multiple !== 'content' ){
                  send_to_shortcode += base.validate_atts( _atts_multiple, _this_multiple ); // validate empty atts
                }else if ( _atts_multiple === 'content' ){
                  send_to_shortcode += ']';
                  send_to_shortcode += _this_multiple.val();
                  send_to_shortcode += '[/'+_clone_id+'';
                }
              });

              send_to_shortcode += ']'; // end: multiple-shortcode

            });

          break;

          default:

            send_to_shortcode += '[' + shortcode_name;

            $('[' + ruleAttr + ']', '.cs-dialog-load .cs-element:not(.hidden)').each( function() {

              var _this = $(this), _atts = _this.data('atts');

              // is not attr content, add shortcode attribute else write content and close shortcode tag
              if( _atts !== 'content' ){
                send_to_shortcode += base.validate_atts( _atts, _this ); // validate empty atts
              }else if ( _atts === 'content' ){
                send_to_shortcode += ']';
                send_to_shortcode += _this.val();
                send_to_shortcode += '[/'+shortcode_name+'';
              }

            });

            send_to_shortcode += ']';

          break;

        }


        if( shortcode_target ) {
          var textarea_target = shortcode_button.next();
          textarea_target.val( base.insertAtChars( textarea_target, send_to_shortcode ) );
        } else {
          window.send_to_editor( send_to_shortcode );
        }

        $dialog.dialog( 'close' );

      });


      // cloner button
      var co = 0;
      $dialog.on('click', '#shortcode-clone-button', function( e ) {

        e.preventDefault();

        // clone from cache
        var cloned_el = shortcode_clone.clone().hide();
          cloned_el.find('input:radio').attr('name', '_nonce_' + co);

        $('.cs-shortcode-clone:last').after( cloned_el );

        // add - remove effects
        cloned_el.slideDown(100);
        cloned_el.find('.cs-remove-clone').show().click( function( e ) {
          cloned_el.slideUp(100, function(){ cloned_el.remove(); });
          e.preventDefault();
        });

        // reloadPlugins
        cloned_el.CSFRAMEWORK_DEPENDENCY('sub');
        $.CSFRAMEWORK.RELOAD_PLUGINS();
        co++;

      });

    };

    base.validate_atts = function( _atts, _this ) {

      if( deploy_atts === _atts ) { return ''; }

      deploy_atts = _atts;

      var el_value;

      if ( _this.closest('.pseudo-field').hasClass('hidden') === true ){ return ''; }
      if ( _this.hasClass('pseudo') === true ){ return ''; }

      if( _this.is(':checkbox') || _this.is(':radio') ) {
        el_value = _this.is(':checked') ? _this.val() : '';
      } else {
        el_value = _this.val();
      }

      if( _this.data('check') !== undefined ) {
        el_value = _this.closest('.cs-element').find('input:checkbox:checked').map( function() {
         return $(this).val();
        }).get();
      }

      if( el_value !== null && el_value !== undefined && el_value !== '' && el_value.length !== 0 ) {
        return ' ' + _atts + '="' + el_value + '"';
      }

      return '';

    };

    base.insertAtChars = function( _this, currentValue ) {

      var obj = ( typeof _this[0].name !== undefined ) ? _this[0] : _this;

      if ( $.browser.mozilla || $.browser.webkit ) {
        obj.focus();
        return obj.value.substring( 0, obj.selectionStart ) + currentValue + obj.value.substring( obj.selectionEnd, obj.value.length );
      } else {
        obj.focus();
        return currentValue;
      }

    };

    // run initializer
    base.init();
  };
  // ======================================================

  // ======================================================
  // CSFRAMEWORK COLORPICKER
  // ------------------------------------------------------
  if( typeof Color.fn.toString !== undefined ) {

    // adding alpha support for Automattic Color.js toString function.
    Color.fn.toString = function () {

      // check for alpha
      if ( this._alpha < 1 ) {
        return this.toCSS('rgba', this._alpha).replace(/\s+/g, '');
      }

      var hex = parseInt( this._color, 10 ).toString( 16 );

      if ( this.error ) { return ''; }

      // maybe left pad it
      if ( hex.length < 6 ) {
        for (var i = 6 - hex.length - 1; i >= 0; i--) {
          hex = '0' + hex;
        }
      }

      return '#' + hex;

    };

  }

  $.fn.CSFRAMEWORK_COLORPICKER = function() {

    return this.each(function() {

      var $this = $(this);

      // check for rgba enabled/disable
      if( $this.data('rgba') !== false ) {

        // set color and alpha value
        var color_value = $this.val().replace(/\s+/g, ''),
            alpha_value = ( color_value.indexOf('rgba') !== -1 ) ? parseFloat( color_value.replace(/^.*,(.+)\)/, '$1') * 100 ) : 100;

        // wpColorPicker core
        $this.wpColorPicker({

          // wpColorPicker: change
          change: function( event, ui ) {

            // update checkerboard background color
            $this.closest('.wp-picker-container').find('.cs-alpha-slider-offset').css('background-color', ui.color.toString());
            $this.trigger('keyup');

          },

          // wpColorPicker: create
          create: function( event, ui ) {

            // set variables for alpha slider
            var a8cIris       = $this.data('a8cIris'),
                $container    = $this.closest('.wp-picker-container'),

                // appending alpha wrapper
                $alpha_wrap   = $('<div class="cs-alpha-wrap">' +
                                  '<div class="cs-alpha-slider"></div>' +
                                  '<div class="cs-alpha-slider-offset"></div>' +
                                  '<div class="cs-alpha-text"></div>' +
                                  '</div>').appendTo( $container.find('.wp-picker-holder') ),

                $alpha_slider = $alpha_wrap.find('.cs-alpha-slider'),
                $alpha_text   = $alpha_wrap.find('.cs-alpha-text'),
                $alpha_offset = $alpha_wrap.find('.cs-alpha-slider-offset');

            // alpha slider
            $alpha_slider.slider({

              // slider: slide
              slide: function( event, ui ) {

                var slide_value = parseFloat( ui.value / 100 );

                // update iris data alpha && wpColorPicker color option && alpha text
                a8cIris._color._alpha = slide_value;
                $this.wpColorPicker( 'color', a8cIris._color.toString() );
                $alpha_text.text( ( slide_value < 1 ? slide_value : '' ) );

              },

              // slider: create
              create: function() {

                var slide_value = parseFloat( alpha_value / 100 ),
                    alpha_text_value = slide_value < 1 ? slide_value : '';

                // update alpha text && checkerboard background color
                $alpha_text.text(alpha_text_value);
                $alpha_offset.css('background-color', color_value);

                // wpColorPicker clear and default button for update iris data alpha && alpha text && slider color option
                $container.on('click', '.wp-picker-default, .wp-picker-clear', function() {

                  a8cIris._color._alpha = slide_value;
                  $alpha_text.text(alpha_text_value);
                  $alpha_slider.slider('option', 'value', alpha_value).trigger('slide');

                });

                // show alpha wrapper on click color picker button
                $container.on('click', '.wp-color-result', function() {
                  $alpha_wrap.toggle();
                });

                // hide alpha wrapper on click body
                $('body').on( 'click.wpcolorpicker', function() {
                  $alpha_wrap.hide();
                });

              },

              // slider: options
              value: alpha_value,
              step: 1,
              min: 1,
              max: 100

            });
          },

          // wpColorPicker: default color value
          defaultColor: color_value
        });

      } else {

        // wpColorPicker default picker
        $this.wpColorPicker({
          change: function() {
            $this.trigger('keyup');
          },
          defaultColor: $this.val()
        });

      }

    });

  };
  // ======================================================

  // ======================================================
  // RELOAD FRAMEWORK PLUGINS
  // ------------------------------------------------------
  $.CSFRAMEWORK.RELOAD_PLUGINS = function() {
    $('.chosen').CSFRAMEWORK_CHOSEN();
    $('.cs-image-select').CSFRAMEWORK_IMAGE_SELECTOR();
    $('.cs-uploader').CSFRAMEWORK_UPLOADER();
    $('.cs-typography').CSFRAMEWORK_TYPOGRAPHY();
    $('.cs-color-picker').CSFRAMEWORK_COLORPICKER();
    $('.cs-help').tooltip({html:true, placement:'left', container:'body'});
  };

  // ======================================================
  // JQUERY DOCUMENT READY
  // ------------------------------------------------------
  $(document).ready( function() {

    $('.cs-framework').CSFRAMEWORK_TAB_NAVIGATION();
    $('.cs-reset-confirm, .cs-import-backup').CSFRAMEWORK_CONFIRM();
    $('.cs-content').CSFRAMEWORK_DEPENDENCY();
    $('.cs-field-group').CSFRAMEWORK_GROUP();
    $('#cs-save-ajax').CSFRAMEWORK_SAVE_AJAX();
    $.CSFRAMEWORK.ICONS_MANAGER();
    $.CSFRAMEWORK.SHORTCODE_MANAGER();
    $.CSFRAMEWORK.RELOAD_PLUGINS();

  });

})( jQuery, window, document );