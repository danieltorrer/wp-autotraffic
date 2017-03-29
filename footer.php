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
    var a = $(this);
    if(submenuOpened){
      $(this).next().velocity('slideUp', {
        duration: 100
      });

    } else {
      $(a).parent().find('ul li.menu-item').velocity('transition.flipXIn', {
          stagger: 70,
          duration: 600
      });
      $(this).next().velocity('slideDown', {
        duration: 100,
      });
    }

    submenuOpened = !submenuOpened;
  });
}

( function( $ ) {

  $( function() { // Ready

    new WOW().init();

    var settings = {
      prefetch: true,
      // forms: 'form',
      anchors: 'a.transition-link',
      blacklist: 'form, .wp-link, input[type="submit"], .no-smoothState',
      onStart: {
        duration: 480,
        render: function ( $container ) {
          $container.addClass( 'slide-out' );
        }
      },
      onAfter: function($container) {
        $('body').removeClass('menu-opened');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').detach();
        $('body').removeClass('menu-opened');

        menuOpened = false;
        submenuOpened = false;

        var $hash = $( window.location.hash );

        if ( $hash.length !== 0 ) {

          var offsetTop = $hash.offset().top;

          $( 'body, html' ).velocity( {
            scrollTop: ( offsetTop - 60 ),
          }, {
            duration: 180
          } );
        } else{
          $('body').scrollTop(0);
        }
        addBlacklistClass();
        initMenu();
        new WOW().init();
        $container.removeClass( 'slide-out' );

      }

    };

    $('#page').smoothState( settings );
  } );

})( jQuery );

</script>


</body>
</html>
