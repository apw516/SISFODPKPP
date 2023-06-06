<div class="clearfix"></div>
<div class="row" style="display: block;">
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <a href="{{ route('permohonanrekom') }}"class="btn btn-sm btn-secondary"><i
                        class="bi bi-backspace-fill"></i>
                    Batal</a> DETAIL PERMOHONAN REKOMENDASI
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
                        {{-- <li>
                            <a href="#step-4">
                                <span class="step_no">4</span>
                                <span class="step_descr">
                                    Upload Dokumen<br />
                                </span>
                            </a>
                        </li> --}}
                    </ul>
                    <div id="step-1">
                        <form class="form-horizontal form-label-left form1">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Titimangsa
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3 ">
                                    <input type="text" id="kotatitimangsa" name="kotatitimangsa" required="required"
                                        class="form-control" placeholder="Masukan Nama Kota Misal : Cirebon" value="{{ $d[0]->kota_spr }}">
                                </div>
                                <div class="col-md-3 col-sm-3 ">
                                    <input type="date" id="tgltitimangsa" name="tgltitimangsa" required="required"
                                        class="form-control  " value="{{ $d[0]->tanggal_spr }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nomor Surat
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="nomorsurat" name="nomorsurat" required="required"
                                        class="form-control " placeholder="Masukan Nomor Surat ..." value="{{ $d[0]->nomor_spr }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Lampiran</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="lampiran" class="form-control col" type="text" name="lampiran"
                                        placeholder="Masukan Lampiran ..." value="{{ $d[0]->lampiran_spr }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Perihal<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="perihal" name="perihal" class="date-picker form-control"
                                        required="required" type="text" placeholder="Masukan Perihal ..." value="{{ $d[0]->perihal_spr }}">
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
                                        class="form-control  " placeholder="Masukan Nama Pemohon ..." value="{{ $d[0]->nama_pemohon_spr }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alamat
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea type="text" id="alamatpemohon" name="alamatpemohon" required="required" class="form-control "
                                        placeholder="Masukan Alamat Pemohon ...">{{ $d[0]->alamat_spr }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="jabatanpemohon" class="form-control col" type="text"
                                        name="jabatanpemohon" placeholder="Masukan Jabatan Pemohon ..." value="{{ $d[0]->jabatan_spr }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">a.n Perusahaan<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="namaperusahaan" name="namaperusahaan" class="date-picker form-control"
                                        required="required" type="text" placeholder="Masukan Nama Perusahaan ..." value="{{ $d[0]->perusahaan_spr }}">
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
                                        placeholder="Masukan Nama Perumahan ..." value="{{ $d[0]->nama_perumahan_rekom }}">
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
                                        placeholder="Masukan Lokasi Perumahan ..." value="{{ $d[0]->alamat_rekom }}">
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
                                            <option value="{{ $kc->kode_kecamatan }}" @if($d[0]->kecamatan_rekom == $kc->kode_kecamatan ) selected @endif>{{ $kc->nama_kecamatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Desa /
                                    Kelurahan</label>
                                <div class="col-md-2 col-sm-2 ">
                                    <select class="form-control" id="desa" name="desa">
                                        <option value="">Silahkan Pilih</option>
                                        @foreach ($desa as $ds)
                                            <option value="{{ $ds->kode_desa_kelurahan }}" @if($d[0]->desa_kelurahan_rekom == $ds->kode_desa_kelurahan ) selected @endif>{{ $ds->nama_desa_kelurahan }}
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
                                        placeholder="Masukan Luas Tanah Perumahan ..." value="{{ $d[0]->luas_lahan_rekom }}">
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div id="step-4">
                        <form class="form-horizontal form-label-left form4">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Scan Ktp
                                    Pemohon
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="dok_ktp" name="dok_ktp" required="required"
                                        class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Scan NPW
                                    Perusahaan
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="dok_npwp" name="dok_npwp" required="required"
                                        class="form-control " placeholder="Masukan Nomor Surat ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Scan
                                    NIB</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="dok_nib" class="form-control col" type="file" name="dok_nib"
                                        placeholder="Masukan Lampiran ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Company Profile<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="dok_company_profil" name="dok_company_profil"
                                        class="date-picker form-control" required="required" type="file"
                                        placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Surat Permohonan ditunjukan
                                    kepada Kadis PKPP<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="kadispkpp" name="kadispkpp" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Fatwa/ Surat Keterangan/
                                    Izin Lokasi (Perusahaan)<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="izinlokasi" name="izinlokasi" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Gambar Rencana Tapak dan
                                    Rekom Asli (Revisi)<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="rencanatapak" name="rencanatapak" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Surat Rekom TPU (Dinas
                                    Lingkungan Hidup)<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="rekomtpu" name="rekomtpu" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Bukti Kepemilikan
                                    Tanah<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="buktikepemilikan" name="buktikepemilikan"
                                        class="date-picker form-control" required="required" type="file"
                                        placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Gambar Ukur dari BPN<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="gambarukur" name="gambarukur" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Andalalin (Kepolisisan atau
                                    Dinas Perhubungan)<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="Andalalin" name="Andalalin" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Alih Fungsi Lahan<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="alihfungsi" name="alihfungsi" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">SPPL atau UKL UPL<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="sppl" name="sppl" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Pel Banjir (Dinas
                                    PUTR)<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="pelbanjir" name="pelbanjir" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Pertimbangan Teknis/
                                    Informasi Pemanfaatan Ruang<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="pemanfaatanruang" name="pemanfaatanruang"
                                        class="date-picker form-control" required="required" type="file"
                                        placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">PKKPR (Sistem OSS)<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="pkkpr" name="pkkpr" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Rekomendasi Damkar<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="damkar" name="damkar" class="date-picker form-control"
                                        required="required" type="file" placeholder="Masukan Perihal ...">
                                </div>
                            </div>
                        </form>
                    </div> --}}
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
