<div id="list_supplier" class="" data-backdrop="static">
    <div class="modal-dialog animate" id="animate" style="z-index: 1050;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Список производителей</h5>
                <div class="box-tool">
                    <ul class="nav nav-xs">
                        <li class="nav-item">
                            <a class="nav-link" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-close"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="list-group box">
                    @foreach($suppliers as $supplier)
                        <a href="#" class="list-group-item">
                            <span class="float-right badge info">12</span> {{ $supplier->name }}
                        </a>
                    @endforeach
                </div>
                <div>{{ $suppliers->links() }}</div>
            </div>
        </div>
    </div>
    <script>
        var width = 600;
        var id = 'list_supplier';
        initDragModal(width, id);
    </script>
</div>