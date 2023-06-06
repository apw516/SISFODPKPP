<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="bi bi-buildings-fill"></i> <span>SISFO DPKPP</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('public/gen/images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>{{ auth()->user()->nama_lengkap }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Rekomendasi Siteplan <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('permohonanrekom') }}">Permohonan Rekom <span
                                        class="badge badge-danger pull-right notif" hidden><i
                                            class="bi bi-bell-fill"></i></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Akun</h3>
                <ul class="nav side-menu">
                    <li><a href="{{ route('profil') }}"><i class="fa fa-laptop"></i> Informasi Akun</a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<script>
    setInterval(ceknotif, 3000);
    function ceknotif() {
        var fd = new FormData();
        fd.append('_token', "{{ csrf_token() }}");
        $.ajax({
            async: true,
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            url: 'ceknotif',
            data: fd,
            error: function(data) {
                loadhide()
                alert('error')
            },
            success: function(data) {
                loadhide()
                if (data.kode == 500) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oopss...',
                        text: data.message,
                        footer: ''
                    })
                } else {
                   if(data.jlh > 0){
                    $('.notif').removeAttr('hidden',true);
                   }
                }
            }
        });
    }
</script>
