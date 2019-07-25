(function ($) {
  "use strict";

  window.initDragModal = function(width, id){
    var modal_dialog = $('#modal-container').find('.modal-dialog');


    modal_dialog.css({"min-width":width+"px"});

    // var Draggable = require ('Draggable');
    var element = document.getElementById(id).getElementsByClassName('modal-dialog')[0];

    var options = {
      grid: 10,
      handle: document.getElementById(id).getElementsByClassName('modal-header')[0],
      limit: {
        x: [0,$(document).width() - width],
        y: [0,$(document).height() - 500]
      }
    };

    var drag = new Draggable (element, options);

    drag.set(( $( window ).width() - width ) / 2,200 );
  }

  $(document).on('click', '.modal_open', function(e){
    e.preventDefault();
    console.log(e);

    var elem = $(this);
    $.ajax({
      url: elem.data('url'),
      type: 'GET',
      success: function(resp){
        if(resp.status == 'success') {

          if($('#'+elem.data('name'))){
            $('#'+elem.data('name')).remove();
          }

          $('#modal-container').append(resp.html);
          $('#'+elem.data('name')).modal('show');
          if($('.modal-backdrop').length > 1){
            $('.modal-backdrop:last-child').remove();
          }
        }
      }
    });
  });
})(jQuery);