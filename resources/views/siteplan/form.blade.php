<div class="clearfix"></div>
<div class="row" style="display: block;">
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <a href="{{ route('permohonanrekom') }}"class="btn btn-sm btn-secondary"><i
                        class="bi bi-backspace-fill"></i>
                    Batal</a> PERMOHONAN REKOMENDASI
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps">
                        <li>
                            <a href="#step-1">
                                <span class="step_no">1</span>
                                <span class="step_descr">
                                    Informasi Surat Permohonan<br />
                                    {{-- <small>Step 1 description</small> --}}
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2">
                                <span class="step_no">2</span>
                                <span class="step_descr">
                                    Informasi Pemohon<br />
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4">
                                <span class="step_no">3</span>
                                <span class="step_descr">
                                    Informasi Perumahan<br />
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div id="step-1">
                        <form class="form-horizontal form-label-left form1">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Titimangsa
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3 ">
                                    <input type="text" id="kotatitimangsa" name="kotatitimangsa" required="required"
                                        class="form-control" placeholder="Masukan Nama Kota Misal : Cirebon">
                                </div>
                                <div class="col-md-3 col-sm-3 ">
                                    <input type="date" id="tgltitimangsa" name="tgltitimangsa" required="required"
                                        class="form-control  ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nomor Surat
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="nomorsurat" name="nomorsurat" required="required"
                                        class="form-control " placeholder="Masukan Nomor Surat ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Lampiran</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="lampiran" class="form-control col" type="text" name="lampiran"
                                        placeholder="Masukan Lampiran ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Perihal<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="perihal" name="perihal" class="date-picker form-control"
                                        required="required" type="text" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step-2">
                        <form class="form-horizontal form-label-left form2">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                    Pemohon
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="namapemohon" name="namapemohon" required="required"
                                        class="form-control  " placeholder="Masukan Nama Pemohon ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alamat
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea type="text" id="alamatpemohon" name="alamatpemohon" required="required" class="form-control "
                                        placeholder="Masukan Alamat Pemohon ..."></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="jabatanpemohon" class="form-control col" type="text"
                                        name="jabatanpemohon" placeholder="Masukan Jabatan Pemohon ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">a.n Perusahaan<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="namaperusahaan" name="namaperusahaan" class="date-picker form-control"
                                        required="required" type="text" placeholder="Masukan Nama Perusahaan ...">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step-4">
                        <form class="form-horizontal form-label-left form3">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                    Perumahan
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="namaperumahan" name="namaperumahan"
                                        required="required" class="form-control  "
                                        placeholder="Masukan Nama Perumahan ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Lokasi
                                    Perumahan
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="lokasiperumahan" name="lokasiperumahan"
                                        required="required" class="form-control "
                                        placeholder="Masukan Lokasi Perumahan ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Provinsi</label>
                                <div class="col-md-2 col-sm-2 ">
                                    <input readonly id="middle-name" class="form-control col" type="text"
                                        name="middle-name" value="JAWA BARAT">
                                    <input hidden id="kodeprovinsi" class="form-control col" type="text"
                                        name="kodeprovinsi" value="JAWA BARAT">
                                </div>
                                <label for="middle-name"
                                    class="col-form-label col-md-2 col-sm-2 label-align">Kabupaten</label>
                                <div class="col-md-2 col-sm-2 ">
                                    <input readonly id="middle-name" class="form-control col" type="text"
                                        name="middle-name" value="CIREBON"> <input hidden id="kodeprovinsi"
                                        class="form-control col" type="text" name="kodeprovinsi"
                                        value="JAWA BARAT">
                                    <input hidden id="kodekabupaten" class="form-control col" type="text"
                                        name="kodekabupaten" value="JAWA BARAT">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan</label>
                                <div class="col-md-2 col-sm-2 ">
                                    <select class="form-control" id="kecamatan" name="kecamatan">
                                        <option value="">Silahkan Pilih</option>
                                        @foreach ($kecamatan as $kc)
                                            <option value="{{ $kc->kode_kecamatan }}">{{ $kc->nama_kecamatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Desa /
                                    Kelurahan</label>
                                <div class="col-md-2 col-sm-2 ">
                                    <select class="form-control" id="desa" name="desa">
                                        <option value="">Silahkan Pilih</option>
                                        @foreach ($desa as $d)
                                            <option value="{{ $d->kode_desa_kelurahan }}">{{ $d->nama_desa_kelurahan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Luas Tanah (
                                    m<sup>2</sup>.)<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="luastanan" name="luastanah" class="date-picker form-control"
                                        required="required" type="text"
                                        placeholder="Masukan Luas Tanah Perumahan ...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates.js')
<script>
    function simpan() {
        var data1 = $('.form1').serializeArray();
        var data2 = $('.form2').serializeArray();
        var data3 = $('.form3').serializeArray();
        var fd = new FormData();
        fd.append('_token', "{{ csrf_token() }}");
        fd.append('data1', JSON.stringify(data1));
        fd.append('data2', JSON.stringify(data2));
        fd.append('data3', JSON.stringify(data3));
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
                    contentType: false,
                    processData: false,
                    data: fd,
                    url: 'simpanform',
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
</script>
