// lazyload config
var MODULE_CONFIG = {
    chat:           [
                      '/node_modules/list.js/dist/list.js',
                      '/node_modules/notie/dist/notie.min.js',
                      '../assets/js/plugins/notie.js',
                      '../assets/js/app/chat.js'
                    ],
    mail:           [
                      '/node_modules/list.js/dist/list.js',
                      '/node_modules/notie/dist/notie.min.js',
                      '../assets/js/plugins/notie.js',
                      '../assets/js/app/mail.js'
                    ],
    user:           [
                      '/node_modules/list.js/dist/list.js',
                      '/node_modules/notie/dist/notie.min.js',
                      '../assets/js/plugins/notie.js',
                      '../assets/js/app/user.js'
                    ],
    fullscreen:     [
                        '/modules/fullscreen/fullscreen.js',
                        '/modules/fullscreen/fullscreen-app.js'
                    ],
    jscroll:        [
                      '/node_modules/jscroll/jquery.jscroll.min.js'
                    ],
    stick_in_parent:[
                      '/node_modules/sticky-kit/jquery.sticky-kit.min.js'
                    ],
    scrollreveal:   [
                      '/node_modules/scrollreveal/dist/scrollreveal.min.js',
                      '../assets/js/plugins/jquery.scrollreveal.js'
                    ],
    owlCarousel:    [
                      '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
                      '/node_modules/owl.carousel/dist/assets/owl.theme.css',
                      '/node_modules/owl.carousel/dist/owl.carousel.min.js'
                    ],
    html5sortable:  [
                      '/node_modules/html5sortable/dist/html.sortable.min.js',
                      '../assets/js/plugins/jquery.html5sortable.js',
                      '../assets/js/plugins/sortable.js'
                    ],
    easyPieChart:   [
                      '/node_modules/easy-pie-chart/dist/jquery.easypiechart.min.js'
                    ],
    peity:          [
                      '/node_modules/peity/jquery.peity.js',
                      '../assets/js/plugins/jquery.peity.tooltip.js',
                    ],
    chart:          [
                      '/node_modules/moment/min/moment-with-locales.min.js',
                      '/node_modules/chart.js/dist/Chart.min.js',
                      '../assets/js/plugins/jquery.chart.js',
                      '../assets/js/plugins/chartjs.js'
                    ],
    dataTable:      [
                      '/node_modules/datatables/media/js/jquery.dataTables.min.js',
                      '/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js',
                      '/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css',
                      '../assets/js/plugins/datatable.js'
                    ],
    bootstrapTable: [
                      '/node_modules/bootstrap-table/dist/bootstrap-table.min.css',
                      '/node_modules/bootstrap-table/dist/bootstrap-table.min.js',
                      '/node_modules/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js',
                      '/node_modules/bootstrap-table/dist/extensions/mobile/bootstrap-table-mobile.min.js',
                      '../assets/js/plugins/tableExport.min.js',
                      '../assets/js/plugins/bootstrap-table.js'
                    ],
    bootstrapWizard:[
                      '/node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
                    ],
    dropzone:       [
                      '/node_modules/dropzone/dist/min/dropzone.min.js',
                      '/node_modules/dropzone/dist/min/dropzone.min.css'
                    ],
    datetimepicker: [
                      '/node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css',
                      '/node_modules/moment/min/moment-with-locales.min.js',
                      '/node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js',
                      '../assets/js/plugins/datetimepicker.js'
                    ],
    datepicker:     [
                      "node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
                      "node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
                    ],
    fullCalendar:   [
                      '/node_modules/moment/min/moment-with-locales.min.js',
                      '/node_modules/fullcalendar/dist/fullcalendar.min.js',
                      '/node_modules/fullcalendar/dist/fullcalendar.min.css',
                      '../assets/js/plugins/fullcalendar.js'
                    ],
    parsley:        [
                      '/node_modules/parsleyjs/dist/parsley.min.js'
                    ],
    select2:        [
                      '/node_modules/select2/dist/css/select2.min.css',
                      '/node_modules/select2/dist/js/select2.min.js',
                      '../assets/js/plugins/select2.js'
                    ],
    summernote:     [
                      '/node_modules/summernote/dist/summernote.css',
                      '/node_modules/summernote/dist/summernote-bs4.css',
                      '/node_modules/summernote/dist/summernote.min.js',
                      '/node_modules/summernote/dist/summernote-bs4.min.js'
                    ],
    vectorMap:      [
                      '/node_modules/jqvmap/dist/jqvmap.min.css',
                      '/node_modules/jqvmap/dist/jquery.vmap.js',
                      '/node_modules/jqvmap/dist/maps/jquery.vmap.world.js',
                      '/node_modules/jqvmap/dist/maps/jquery.vmap.usa.js',
                      '/node_modules/jqvmap/dist/maps/jquery.vmap.france.js',
                      '../assets/js/plugins/jqvmap.js'
                    ],
    waves:          [
                      '/modules/waves/waves.css',
                      '/modules/waves/waves.js',
                      '/modules/waves/waves-app.js'
                    ]
  };

var MODULE_OPTION_CONFIG = {
  parsley: {
    errorClass: 'is-invalid',
    successClass: 'is-valid',
    errorsWrapper: '<ul class="list-unstyled text-sm mt-1 text-muted"></ul>'
  }
}
