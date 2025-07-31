/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
    // Site title and description.
    wp.customize( 'blogname', function( value ) {
        value.bind( function( to ) {
            $( '.site-title a' ).text( to );
        } );
    } );
    
    wp.customize( 'blogdescription', function( value ) {
        value.bind( function( to ) {
            $( '.site-description' ).text( to );
        } );
    } );

    // Header text color.
    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( to ) {
            if ( 'blank' === to ) {
                $( '.site-title, .site-description' ).css( {
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                } );
            } else {
                $( '.site-title, .site-description' ).css( {
                    'clip': 'auto',
                    'position': 'relative'
                } );
                $( '.site-title a, .site-description' ).css( {
                    'color': to
                } );
            }
        } );
    } );

    // Primary color
    wp.customize( 'primary_color', function( value ) {
        value.bind( function( to ) {
            document.documentElement.style.setProperty('--primary-color', to);
        } );
    } );

    // Secondary color
    wp.customize( 'secondary_color', function( value ) {
        value.bind( function( to ) {
            document.documentElement.style.setProperty('--secondary-color', to);
        } );
    } );

    // Accent color
    wp.customize( 'accent_color', function( value ) {
        value.bind( function( to ) {
            document.documentElement.style.setProperty('--accent-color', to);
        } );
    } );

    // Hero title
    wp.customize( 'hero_title', function( value ) {
        value.bind( function( to ) {
            $( '.hero-title' ).text( to );
        } );
    } );

    // Hero description
    wp.customize( 'hero_description', function( value ) {
        value.bind( function( to ) {
            $( '.hero-description' ).html( to.replace(/\n/g, '<br>') );
        } );
    } );

    // Hero text color
    wp.customize( 'hero_text_color', function( value ) {
        value.bind( function( to ) {
            document.documentElement.style.setProperty('--hero-text-color', to);
        } );
    } );

    // Hero overlay opacity
    wp.customize( 'hero_overlay_opacity', function( value ) {
        value.bind( function( to ) {
            var opacity = to / 100;
            $( '.hero-section::after' ).css( 'opacity', opacity );
        } );
    } );

} )( jQuery );