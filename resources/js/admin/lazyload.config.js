// lazyload config
var MODULE_CONFIG = {
    chat:           [
                      '/modules/list.js/dist/list.js',
                      '/modules/notie/dist/notie.min.js',
                      '/js/modules/notie.js',
                      '../assets/js/app/chat.js'
                    ],
    mail:           [
                      '/modules/list.js/dist/list.js',
                      '/modules/notie/dist/notie.min.js',
                      '/js/modules/notie.js',
                      '../assets/js/app/mail.js'
                    ],
    user:           [
                      '/modules/list.js/dist/list.js',
                      '/modules/notie/dist/notie.min.js',
                      '/js/modules/notie.js',
                      '../assets/js/app/user.js'
                    ],
    fullscreen:     [ //ready
                        '/modules/jquery-fullscreen-plugin/jquery.fullscreen-min.js',
                        '/js/modules/fullscreen.js'
                    ],
    jscroll:        [
                      '/modules/jscroll/jquery.jscroll.min.js'
                    ],
    stick_in_parent:[
                      '/modules/sticky-kit/jquery.sticky-kit.min.js'
                    ],
    scrollreveal:   [
                      '/modules/scrollreveal/dist/scrollreveal.min.js',
                      '/js/modules/jquery.scrollreveal.js'
                    ],
    owlCarousel:    [
                      '/modules/owl.carousel/dist/assets/owl.carousel.min.css',
                      '/modules/owl.carousel/dist/assets/owl.theme.css',
                      '/modules/owl.carousel/dist/owl.carousel.min.js'
                    ],
    html5sortable:  [
                      '/modules/html5sortable/dist/html.sortable.min.js',
                      '/js/modules/jquery.html5sortable.js',
                      '/js/modules/sortable.js'
                    ],
    easyPieChart:   [
                      '/modules/easy-pie-chart/dist/jquery.easypiechart.min.js'
                    ],
    peity:          [ //Ready
                        '/modules/peity/jquery.peity.js',
                        '/js/modules/jquery.peity.tooltip.js',
                    ],
    chart:          [ //Ready
                        '/modules/moment/min/moment-with-locales.min.js',
                        '/modules/chart.js/dist/Chart.min.js',
                        '/js/modules/jquery.chart.js',
                        '/js/modules/chartjs.js'
                    ],
    dataTable:      [ //Ready
                      '/modules/datatables/media/js/jquery.dataTables.min.js',
                      '/modules/datatables.net-bs4/js/dataTables.bootstrap4.js',
                      '/modules/datatables.net-bs4/css/dataTables.bootstrap4.css',
                      '/js/modules/datatable.js'
                    ],
    bootstrapTable: [ //Ready
                      '/modules/bootstrap-table/dist/bootstrap-table.min.css',
                      '/modules/bootstrap-table/dist/bootstrap-table.min.js',
                      '/modules/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js',
                      '/modules/bootstrap-table/dist/extensions/mobile/bootstrap-table-mobile.min.js',
                      '/js/modules/tableExport.min.js',
                      '/js/modules/bootstrap-table.js'
                    ],
    bootstrapWizard:[
                      '/modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
                    ],
    dropzone:       [
                      '/modules/dropzone/dist/min/dropzone.min.js',
                      '/modules/dropzone/dist/min/dropzone.min.css'
                    ],
    datetimepicker: [
                      '/modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css',
                      '/modules/moment/min/moment-with-locales.min.js',
                      '/modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js',
                      '/js/modules/datetimepicker.js'
                    ],
    datepicker:     [
                      "/modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
                      "/modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
                      "/js/modules/datepicker.js"
                    ],
    fullCalendar:   [
                      '/modules/moment/min/moment-with-locales.min.js',
                      '/modules/fullcalendar/dist/fullcalendar.min.js',
                      '/modules/fullcalendar/dist/fullcalendar.min.css',
                      '/js/modules/fullcalendar.js'
                    ],
    parsley:        [ //Ready
                      '/modules/parsleyjs/dist/parsley.min.js'
                    ],
    select2:        [ //Ready
                      '/modules/select2/dist/css/select2.min.css',
                      '/modules/select2/dist/js/select2.min.js',
                      '/modules/select2/dist/js/i18n/ru.js',
                      '/js/modules/select2.js'
                    ],
    summernote:     [ //Ready
                      '/modules/summernote/dist/summernote.css',
                      '/modules/summernote/dist/summernote-bs4.css',
                      '/modules/summernote/dist/summernote.min.js',
                      '/modules/summernote/dist/summernote-bs4.min.js'
                    ],
    vectorMap:      [ //Ready
                      '/modules/jqvmap/dist/jqvmap.min.css',
                      '/modules/jqvmap/dist/jquery.vmap.js',
                      '/modules/jqvmap/dist/maps/jquery.vmap.world.js',
                      '/modules/jqvmap/dist/maps/jquery.vmap.usa.js',
                      '/modules/jqvmap/dist/maps/jquery.vmap.france.js',
                      '/js/modules/jqvmap.js'
                    ],
    waves:          [ // Ready
                        '/modules/node-waves/dist/waves.min.css',
                        '/modules/node-waves/dist/waves.min.js',
                        '/js/modules/waves.js'
                    ],
    notie:          [ // Ready
                        '/modules/notie/dist/notie.min.js',
                        '/js/modules/notie.js'
                    ],
    modal_load:     [ // Ready
                        '/modules/draggable/dist/draggable.min.js',
                        '/js/modules/pages/modal.js',
                    ]
  };

var MODULE_OPTION_CONFIG = {
  parsley: {
    errorClass: 'is-invalid',
    successClass: 'is-valid',
    errorsWrapper: '<ul class="list-unstyled text-sm mt-1 text-muted"></ul>'
  }
}
