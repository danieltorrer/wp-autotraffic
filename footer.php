<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!-- <script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X');ga('send','pageview');
</script> -->

<script type="text/javascript">
function addBlacklistClass() {
  $( 'a' ).each( function() {
    if ( this.href.indexOf('/wp-admin/') !== -1 ||
    this.href.indexOf('/wp-login.php') !== -1 ) {
      $( this ).addClass( 'wp-link' );
    }
  });
}

function initMenu() {
  $('nav.menu-container').velocity({'translateY': '-130%'},{duration: 0});

  $('.menu-btn a').click( function(){
    //$(this).toggleClass('menu-btn-back');
    $('body').toggleClass('menu-opened')
    if(menuOpened){
      $('nav.menu-container').velocity({
        'translateY': '-130%'
      },{
        duration: 0,
        complete: function(){
          menuOpened = !menuOpened;
          $('header svg.logo-colors').toggleClass('logo-vector');
        }
      });
    }
    else {
      $('nav.menu-container').velocity({
        'translateY': '0%'
      },{
        duration: 300,
        easing: 'easeInSine',
        complete: function(){
          menuOpened = !menuOpened;
          $('header svg.logo-colors').toggleClass('logo-vector');
        }
      });
    }

  });

  $('.item-sub-menu').click(function(){
    if(submenuOpened){
      $(this).next().velocity('slideUp', {
        duration: 100
      });
    } else {
      $(this).next().velocity('slideDown', {
        duration: 100
      });
    }

    submenuOpened = !submenuOpened;
  });
}

( function( $ ) {

  $( function() { // Ready

    var settings = {
      anchors: 'a',
      blacklist: '.wp-link',
      onStart: {
        duration: 280,
        render: function ( $container ) {
          $container.addClass( 'slide-out' );
        }
      },
      onAfter: function($container) {
        addBlacklistClass();
        initMenu();
        $('body').removeClass('menu-opened');
        menuOpened = false;

        var $hash = $( window.location.hash );

        if ( $hash.length !== 0 ) {

          var offsetTop = $hash.offset().top;

          $( 'body, html' ).velocity( {
            scrollTop: ( offsetTop - 60 ),
          }, {
            duration: 280
          } );
        }
        $container.removeClass( 'slide-out' );

      }

    };

    $('#page').smoothState( settings );
  } );

})( jQuery );

</script>


</body>
</html>
