<div class="clearfix"></div>
<div class="row" style="display: block;">
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12  ">
        <input hidden type="text" value="{{ $d[0]->id_tris }}" id="idtris">
        <div class="x_panel">
            <div class="x_title">
                <a href="{{ route('permohonanrekom') }}"class="btn btn-sm btn-secondary"><i
                        class="bi bi-backspace-fill"></i>
                    Batal</a> KONFIRMASI FORM REKOMENDASI
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-dark well well-sm no-shadow" style="margin-top: 10px;margin-bottom:10px">
                            <i class="bi bi-exclamation-circle" style="font-size: 30px;margin-right:10px"></i> Terima
                            kasih sudah melengkapi data pengajuan rekomendasi siteplan, Silahkan periksa
                            kembali data yang anda
                            isi dan klik tombol kirim ...
                        </p>
                    </div>
                </div>
                <ul class="messages text-dark" style="margin-top: 15px">
                    <div class="row">
                        <div class="col-md-4">
                            <li>
                                <div class="message_wrapper">
                                    <h4 class="heading">INFORMASI SURAT PERMOHONAN</h4>
                                    <ul class="list-unstyled user_data">
                                        <li>
                                            <p class="text-bold mb-2">TITIMANGSA</p>
                                            <blockquote class="message">{{ $d[0]->kota_spr }},{{ $d[0]->tanggal_spr }}
                                            </blockquote>
                                        </li>
                                        <li>
                                            <p class="text-bold mb-2">NOMOR SURAT</p>
                                            <blockquote class="message">{{ $d[0]->nomor_spr }}</blockquote>
                                        </li>
                                        <li>
                                            <p class="text-bold mb-2">LAMPIRAN</p>
                                            <blockquote class="message">{{ $d[0]->lampiran_spr }}</blockquote>
                                        </li>
                                        <li>
                                            <p class="text-bold mb-2">PERIHAL</p>
                                            <blockquote class="message">{{ $d[0]->perihal_spr }}</blockquote>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                        <div class="col-md-4">
                            <li>
                                <div class="message_wrapper">
                                    <h4 class="heading">INFORMASI PEMOHON</h4>
                                    <ul class="list-unstyled user_data">
                                        <li>
                                            <p class="text-bold mb-2">NAMA PEMOHON</p>
                                            <blockquote class="message">{{ $d[0]->nama_pemohon_spr }}
                                            </blockquote>
                                        </li>
                                        <li>
                                            <p class="text-bold mb-2">ALAMAT</p>
                                            <blockquote class="message">{{ $d[0]->alamat_spr }}</blockquote>
                                        </li>
                                        <li>
                                            <p class="text-bold mb-2">JABATAN</p>
                                            <blockquote class="message">{{ $d[0]->jabatan_spr }}</blockquote>
                                        </li>
                                        <li>
                                            <p class="text-bold mb-2">a/n PERUSAHAAN</p>
                                            <blockquote class="message">{{ $d[0]->perusahaan_spr }}</blockquote>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                        <div class="col-md-4">
                            <li>
                                <div class="message_wrapper">
                                    <h4 class="heading">INFORMASI PERUMAHAN</h4>
                                    <ul class="list-unstyled user_data">
                                        <li>
                                            <p class="text-bold mb-2">NAMA PERUMAHAN</p>
                                            <blockquote class="message">{{ $d[0]->nama_perumahan_rekom }}
                                            </blockquote>
                                        </li>
                                        <li>
                                            <p class="text-bold mb-2">LOKASI PERUMAHAN</p>
                                            <blockquote class="message">{{ $d[0]->alamat_rekom }}</blockquote>
                                        </li>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-bold mb-2">PROVINSI</p>
                                                <blockquote class="message">JAWA BARAT</blockquote>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-bold mb-2">KABUPATEN</p>
                                                <blockquote class="message">CIREBON</blockquote>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-bold mt-2">KECAMATAN</p>
                                                <blockquote class="message">{{ $d[0]->nama_kecamatan }}</blockquote>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-bold mt-2">DESA</p>
                                                <blockquote class="message">{{ $d[0]->nama_desa }}</blockquote>
                                            </div>
                                        </div>
                                        <li>
                                            <p class="text-bold mt-2">Luas Tanah (
                                                m<sup>2</sup>.)</p>
                                            <blockquote class="message mt-2">{{ $d[0]->luas_lahan_rekom }} (
                                                m<sup>2</sup>.)</blockquote>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                    </div>

                    <li>
                        <div class="message_wrapper">
                            <h4 class="heading">BERKAS YANG DIUPLOAD</h4>
                            <div class="row">
                                @foreach ($gambar as $g)
                                    <div class="col-md-6">
                                        <blockquote style="font-weight: bold" class="message">
                                            {{ $g->jenis_persyaratan }}</blockquote>
                                        <br />
                                        <p class="url">
                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                            <a class="text-success donlod"
                                                namafile="{{ $g->nama_file }}"><i class="fa fa-paperclip"></i>
                                                {{ $g->nama_file }} <i
                                                    class="bi bi-check2-circle text-success"></i></a>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                </ul>
                <button class="btn btn-success float-right" onclick="kirimkonfirmasi()"><i class="bi bi-send-check"></i>
                    KIRIM</button>
                <a href="{{ route('permohonanrekom') }}" class="btn btn-danger float-right"><i
                        class="bi bi-backspace-fill"></i> BATAL</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Berkas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="vutama">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function kirimkonfirmasi() {
        idtris = $('#idtris').val()
        Swal.fire({
            title: 'Anda Yakin ?',
            text: "Pastikan data yang anda isi sudah benar.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya Yakin !'
        }).then((result) => {
            if (result.isConfirmed) {
                loadshow()
                $.ajax({
                    async: true,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        idtris,
                    },
                    url: 'kirimkonfirmasi',
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
                            Swal.fire({
                                icon: 'success',
                                title: 'OK',
                                text: data.message,
                                footer: ''
                            })
                            location.reload()
                        }
                    }
                });
            }
        })
    }
    $('.donlod').on("click", function() {
        $("#modalview").modal()
        namafile = $(this).attr('namafile')
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                namafile
            },
            url: '<?= route('ambilberkas') ?>',
            success: function(response) {
                loadhide()
                $('.vutama').html(response);
            }
        });
    })
</script>
