<div class="py-3 light lt" style="background-image:url(../assets/images/bg.png); background-size:cover">
    <div class="nav-fold px-2">
        <a class="d-flex p-2" href="profile.html">
            <span class="avatar w-40 rounded grey">{{ mb_substr($user->name, 0, 1) }}</span>
            {{--<img src="../assets/images/a1.jpg" alt="..." class="w-40 circle">--}}
        </a>
        <div class="hidden-folded flex p-2">
            <div class="d-flex">
                <a href="profile.html" class="mr-auto text-nowrap">
                    {{ $user->name }}
                    <small class="d-block text-muted">UX designer, CA</small>
                </a>
                <div>
                    <span class="badge badge-pill info">5</span>
                </div>
            </div>
        </div>
    </div>
</div>
