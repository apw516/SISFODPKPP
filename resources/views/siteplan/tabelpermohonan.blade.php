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
                <button class="btn btn-success" onclick="nextpage_2()"><i class="bi bi-plus"></i> PERMOHONAN
                    REKOMENDASI</button>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table id="tabelpermohonan" class="table table-striped jambo_table bulk_action text-xs">
                        <thead>
                            <tr class="headings">
                                <th class="column-title"><i class="bi bi-list-ol mr"></i>No </th>
                                <th class="column-title"><i class="bi bi-person mr"></i>Pemohon </th>
                                <th class="column-title"><i class="bi bi-building mr"></i>Perusahaan</th>
                                <th class="column-title"><i class="bi bi-houses mr"></i>Perumahan</th>
                                <th class="column-title"><i class="bi bi-card-text mr"></i>Nomor Surat</th>
                                <th class="column-title"><i class="bi bi-calendar-week mr"></i> Tanggal Surat</th>
                                <th class="column-title text-center"><i class="bi bi-files mr"></i>Berkas</th>
                                <th class="column-title"><i class="bi bi-bell-fill mr"></i>Status Permohonan</th>
                                {{-- <th class="column-title text-center"><i class="bi bi-menu-button-fill"></i></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php $nomor = 1; @endphp
                            @foreach ($datapermohonan as $d)
                                <tr @if($d->status_permohonan == 4 )style="background-color: rgb(225, 200, 206)" @endif>
                                    <td>{{ $nomor }} @if($d->status_permohonan == 4 )  <i
                                        class="bi bi-bell-fill text-danger"></i> @endif</td>
                                    <td>{{ $d->nama_pemohon_spr }}</td>
                                    <td>{{ $d->perusahaan_spr }}</td>
                                    <td>{{ $d->nama_perumahan_rekom }}</td>
                                    <td>
                                        {{ $d->nomor_spr }}
                                    </td>
                                    <td>
                                        {{ $d->tanggal_spr }}
                                    </td>
                                    <td class="text-center">
                                        @if ($d->status_permohonan == 0 || $d->status_permohonan == 1 || $d->status_permohonan == 2 || $d->status_permohonan == 4)
                                            <button class="btn btn-primary btn-sm formupload" id="{{ $d->tris_id }}"
                                                data-toggle="tooltip" data-placement="top" title="Upload Berkas ..."><i
                                                    class="bi bi-upload mr"></i></button>
                                            <button class="btn btn-warning btn-sm detailpermohonan"
                                                id="{{ $d->tris_id }}" data-toggle="tooltip" data-placement="top"
                                                title="Edit Surat Permohonan ..."><i
                                                    class="bi bi-pencil-square"></i></button>
                                        @elseif($d->status_permohonan == 3)
                                                <button id="{{ $d->tris_id }}" class="btn btn-info btn-sm apayangdikirim"><i class="bi bi-eye-fill"></i></button>
                                        @endif

                                    </td>
                                    <td>
                                        @if ($d->status_permohonan == 0)
                                            <i class="bi bi-x-circle text-danger"> Pending , Belum upload Berkas ! </i>
                                        @elseif ($d->status_permohonan == 1)
                                            <i class="bi bi-exclamation-circle text-warning"> Pending , Semua Berkas
                                                Wajib diupload !</i>
                                        @elseif ($d->status_permohonan == 3)
                                            <i class="bi bi-exclamation-circle text-success"> Terkirim, Sedang proses
                                                verifikasi ...</i>
                                        @elseif ($d->status_permohonan == 4)
                                            <i class="bi bi-exclamation-circle text-danger"> Ditolak, {{ $d->catatan_surat }}</i>
                                        @else
                                            <button
                                                @if ($d->status_permohonan == 0 || $d->status_permohonan == 1) disabled title="Lengkapi Berkas Pendukung !"
                                                @else
                                        title="Kirim Surat Permohonan ..." @endif
                                                class="btn btn-success btn-sm konfirmasikirim" id="{{ $d->tris_id }}"
                                                data-toggle="tooltip" data-target="#modalkonfirmasi"
                                                data-placement="top"><i class="bi bi-send-check"></i></button>
                                            Surat Permohonan Siap Dikirim
                                            ...</i>
                                        @endif
                                    </td>

                                    {{-- <td class="text-center">
                                    </td> --}}
                                </tr>
                                @php $nomor = $nomor + 1; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.detailpermohonan').on("click", function() {
        id = $(this).attr('id')
        loadshow()
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                id
            },
            url: '<?= route('ambildetailpermohonan') ?>',
            success: function(response) {
                loadhide()
                $('.page1').html(response);
            }
        });
    });
    $('.formupload').on("click", function() {
        id = $(this).attr('id')
        ambilform(id)
    });
    $('.konfirmasikirim').on("click", function() {
        id = $(this).attr('id')
        formkonfirmasi(id)
    });
    $('.apayangdikirim').on("click", function() {
        id = $(this).attr('id')
        formkonfirmasi2(id)
    });

    function ambilform(id) {
        loadshow()
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                id
            },
            url: '<?= route('formupload') ?>',
            success: function(response) {
                loadhide()
                $('.page1').html(response);
            }
        });
    }

    function formkonfirmasi(id) {
        loadshow()
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                id
            },
            url: '<?= route('formkonfirmasi') ?>',
            success: function(response) {
                loadhide()
                $('.page1').html(response);
            }
        });
    }
    function formkonfirmasi2(id) {
        loadshow()
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                id
            },
            url: '<?= route('formkonfirmasi2') ?>',
            success: function(response) {
                loadhide()
                $('.page1').html(response);
            }
        });
    }
    $(function() {
        $("#tabelpermohonan").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>
