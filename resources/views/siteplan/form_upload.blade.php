<style>
    .ml {
        margin-right: 10;
    }

    .mr {
        margin-right: 3px;
    }

    .text-xs {
        font-size: 10px;
    }
</style>
<div class="clearfix"></div>
<div class="row" style="display: block;">
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <a href="{{ route('permohonanrekom') }}"class="btn btn-sm btn-secondary"><i
                        class="bi bi-backspace-fill"></i>
                    Batal</a> UPLOAD BERKAS
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-3 col-sm-3">
                    <section class="panel">
                        <div class="">
                            <h2> NOMOR SURAT : {{ $d[0]->nomor_spr }}</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <h5 class="green"><i class="bi bi-houses mr"></i>{{ $d[0]->nama_perumahan_rekom }}
                            </h5>

                            <p><i class="bi bi-geo-alt-fill mr"></i> {{ $d[0]->alamat_rekom }}</p>
                            <br />

                            <div class="project_detail">
                                <p class="title">Luas Lahan</p>
                                <p>{{ $d[0]->luas_lahan_rekom }} m<sup>2</sup></p>
                                <p class="title">Nama Pemohon</p>
                                <p>{{ $d[0]->nama_pemohon_spr }} | {{ $d[0]->jabatan_spr }}</p>
                            </div>

                            <br />
                            {{-- <h5>Berkas Yang Sudah Diupload</h5>
                            <ul class="list-unstyled project_files">
                                <li><a href=""><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                                </li>
                                <li><a href=""><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                                </li>
                                <li><a href=""><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                                </li>
                                <li><a href=""><i class="fa fa-picture-o"></i> Logo.png</a>
                                </li>
                                <li><a href=""><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                                </li>
                            </ul> --}}
                            <br />

                            {{-- <div class="text-center mtop20">
                                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                            </div> --}}
                        </div>

                    </section>
                </div>
                <div class="col-md-9 col-sm-9  ">
                    <section class="panel">
                        <input type="text" value="{{ $d[0]->id_tspr }}" id="id_tspr" hidden>
                        <input type="text" value="{{ $d[0]->id_tris }}" id="id_tris" hidden>
                        <input type="text" value="{{ $d[0]->id_tris }}" id="id_surat" hidden>
                        <div class="x_title">
                            <h2> Berkas Yang Harus Diupload ....</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-sm text-xs table-bordered">
                                <thead>
                                    <th>Nama Berkas</th>
                                    <th>--</th>
                                </thead>
                                <tbody>
                                    @foreach ($s as $w)
                                        <tr>
                                            <td> <strong style="font-style: italic">* {{ $w->jenis_persyaratan }}
                                                </strong><br class="mb-2">
                                                {{-- <input type="file" id="{{ $w->kode_jenis_persyaratan }}"> --}}
                                                <p class="{{ $w->kode_jenis_persyaratan }}">
                                                    @foreach ($file as $f)
                                                        @if ($f->kode_jenis_persyaratan == $w->kode_jenis_persyaratan)
                                                            <p class="text-success donlod"
                                                                namafile="{{ $f->nama_file }}">{{ $f->nama_file }} <i
                                                                    class="bi bi-check-lg mr-1"></i> </p>
                                                            @if ($f->catatan != '')
                                                                <p class="text-danger">
                                                                    {{ $f->catatan }}
                                                                </p>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </p>
                                                {{-- @if ($w->kode_jenis_persyaratan == 'JPR01')
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Uraian</label>
                                                        <input type="text" class="form-control"
                                                            id="uraian{{ $w->kode_jenis_persyaratan }}"
                                                            aria-describedby="emailHelp" value="@if (count($datatanah) > 0) {{ $datatanah[0]->uraian_file }}@endif">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Nomor</label>
                                                        <input type="text" class="form-control"
                                                            id="nomor{{ $w->kode_jenis_persyaratan }}" value="@if (count($datatanah) > 0) {{ $datatanah[0]->nomor_file }}@endif">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Tanggal</label>
                                                        <input type="date" class="form-control"
                                                            id="tanggal{{ $w->kode_jenis_persyaratan }}" value="@if (count($datatanah) > 0) {{ $datatanah[0]->tanggal_file }}@endif">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Luas</label>
                                                        <input type="text" class="form-control"
                                                            id="luas{{ $w->kode_jenis_persyaratan }}" value="@if (count($datatanah) > 0) {{ $datatanah[0]->luas_file }}@endif">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Lokasi</label>
                                                        <input type="text" class="form-control"
                                                            id="lokasi{{ $w->kode_jenis_persyaratan }}" value="@if (count($datatanah) > 0) {{ $datatanah[0]->lokasi_file }}@endif">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Atas Nama</label>
                                                        <input type="text" class="form-control"
                                                            id="atasnama{{ $w->kode_jenis_persyaratan }}" value="@if (count($datatanah) > 0) {{ $datatanah[0]->atas_nama_file     }}@endif">
                                                    </div>
                                                @endif --}}
                                            </td>
                                            <td>
                                                <button class="badefe btn-success btn-sm showmodalupload"
                                                    nama="{{ $w->jenis_persyaratan }}"
                                                    jenis="{{ $w->kode_jenis_persyaratan }}" data-toggle="modal"
                                                    data-target="#modalupload"><i class="bi bi-upload mr"></i></button>
                                                {{-- <button class="badefe btn-success btn-sm upload"
                                                    jenis="{{ $w->kode_jenis_persyaratan }}"><i
                                                        class="bi bi-upload mr"></i></button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('permohonanrekom') }}"class="btn btn-sm btn-danger float-right"><i
                                class="bi bi-backspace-fill"></i>
                            Kembali</a>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalupload" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Silahkan Upload Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-isian-upload">

                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div> --}}
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalview_upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="vfile">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@include('templates.js')
<script>
    $('.upload').on("click", function() {
        id_surat = $('#id_surat').val()
        jenis = $(this).attr('jenis')
        id_tspr = $('#id_tspr').val()
        id_tris = $('#id_tris').val()
        uploadaja(id_surat, jenis, id_tspr, id_tris)
    })
    $('.donlod').on("click", function() {
        jenis = $(this).attr('namafile')
        window.open('download/' + jenis)
        // $('#modalview_upload').modal('show')
        // $.ajax({
        //     type: 'post',
        //     data: {
        //         _token: "{{ csrf_token() }}",
        //         jenis
        //     },
        //     url: '<?= route('viewfile') ?>',
        //     success: function(response) {
        //         loadhide()
        //         $('.vfile').html(response);
        //     }
        // });
    })
    $('.showmodalupload').on("click", function() {
        jenis = $(this).attr('jenis')
        nama = $(this).attr('nama')
        id_surat = $('#id_surat').val()
        id_tspr = $('#id_tspr').val()
        id_tris = $('#id_tris').val()
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                jenis,
                nama,
                id_surat,
                id_tspr,
                id_tris
            },
            url: '<?= route('ambilform_upload') ?>',
            success: function(response) {
                loadhide()
                $('.form-isian-upload').html(response);
            }
        });
    })

    function uploadaja(id_surat, jenis, id_tspr, id_tris) {
        loadshow()
        id_surat = id_surat
        jenis = jenis
        var files = $('#' + jenis)[0].files;
        var fd = new FormData();
        id_tspr = id_tspr
        fd.append('file', files[0]);
        fd.append('_token', "{{ csrf_token() }}");
        fd.append('id_tspr', id_tspr);
        fd.append('id_tris', id_tris);
        fd.append('jenis', jenis);
        if (jenis == 'JPR01') {
            uraian = $('#uraian' + jenis).val()
            nomor = $('#nomor' + jenis).val()
            tanggal = $('#tanggal' + jenis).val()
            luas = $('#luas' + jenis).val()
            lokasi = $('#lokasi' + jenis).val()
            atasnama = $('#atasnama' + jenis).val()
            fd.append('uraian', uraian);
            fd.append('nomor', nomor);
            fd.append('tanggal', tanggal);
            fd.append('luas', luas);
            fd.append('lokasi', lokasi);
            fd.append('atasnama', atasnama);
            if (uraian == '' || nomor == '' || tanggal == '' || luas == '' || lokasi == '' || atasnama == '') {
                alert('Uraian dan lainnya tidak boleh kosong !')
            } else {
                simpanupload(fd)
            }
            loadhide()
        } else {
            uraian = '0'
            nomor = '0'
            tanggal = '0000-0-0'
            luas = '0'
            lokasi = '0'
            atasnama = '0'
            fd.append('uraian', uraian);
            fd.append('nomor', nomor);
            fd.append('tanggal', tanggal);
            fd.append('luas', luas);
            fd.append('lokasi', lokasi);
            fd.append('atasnama', atasnama);
            simpanupload(fd)
        }

    }

    function simpanupload(fd) {
        $.ajax({
            async: true,
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: fd,
            url: '<?= route('uploadberkasnya') ?>',
            error: function(data) {
                loadhide()
                Swal.fire({
                    icon: 'error',
                    title: 'Ooops....',
                    text: 'Sepertinya ada masalah......',
                    footer: ''
                })
            },
            success: function(data) {
                loadhide()
                if (data.kode == 500) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oopss...',
                        text: data.message,
                        footer: ''
                    })
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'OK',
                        text: data.message,
                        footer: ''
                    })

                    ambilform(id_surat)
                }
            }
        });
    }

    function simpanfile() {
        var files = $('#file')[0].files;
        var fd = new FormData();
        fd.append('file', files[0]);
        fd.append('_token', "{{ csrf_token() }}");
        fd.append('id_tspr', $('#id_tspr').val());
        fd.append('id_tris', $('#id_tris').val());
        fd.append('jenis', $('#jenis').val());
        fd.append('uraian', $('#uraian').val());
        fd.append('nomor', $('#nomor').val());
        fd.append('tanggal', $('#tanggal').val());
        fd.append('luas', $('#luas').val());
        fd.append('lokasi', $('#lokasi').val());
        fd.append('atasnama', $('#atasnama').val());
        $.ajax({
            async: true,
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: fd,
            url: '<?= route('simpanfilegambar') ?>',
            error: function(data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ooops....',
                    text: 'Sepertinya ada masalah......',
                    footer: ''
                })
            },
            success: function(data) {
                if (data.kode == 500) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oopss...',
                        text: data.message,
                        footer: ''
                    })
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'OK',
                        text: data.message,
                        footer: ''
                    })
                    $('#modalupload').modal('hide')
                    ambilform(id_surat)
                }
            }
        });
    }
</script>
