<div class="col-sm-12 col-md-4">
    <div class="box">
        <div class="item">
            <div class="item-bg rounded-top">
                <img src="../assets/images/a2.jpg" alt="." class="blur">
            </div>
            <div class="p-5 pos-rlt text-center">
                <img src="../assets/images/a2.jpg" alt="." class="circle w-56" style="margin-bottom: -7rem">
            </div>
        </div>
        <div class="p-3 text-center">
            <a href="#" class="text-md mt-3 d-block">{{ $store->name }}</a>
            <p>
                <small>Designer, Blogger</small>
            </p>
            <p>
                <a href="{{ route('EditStore', $store->id) }}" class="btn btn-sm primary">Редактировать</a>
            </p>
            <div class="text-xs">
                <em>Photos:
                    <strong>32</strong>, Videos:
                    <strong>50</strong>
                </em>
            </div>
        </div>
    </div>
</div>