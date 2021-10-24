  (function($){
    $(document).ready(function() {

      $('#test-video').prettyEmbed({
        videoID: 'Cbti19KM3wk',
        useFitVids: true,

        playerControls: false,
        playerInfo: false
      });

      $('.not-pretty').fitVids();

    });
  })(jQuery);