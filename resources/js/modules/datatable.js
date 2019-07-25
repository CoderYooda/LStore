(function ($) {
	"use strict";

  var colors = ['red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'blue-grey', 'grey'];
  
  var init = function() {
      $('#datatable').dataTable({
          "paging": false,
          "searching": false,
          "info": false
      });
  }

  // for ajax to init again
  $.fn.dataTable.init = init;

})(jQuery);
