<form enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Dokumen</label>
        <input readonly type="text" class="form-control" id="namadokumen"
            aria-describedby="emailHelp" value="{{ $nama }}">
        <input hidden readonly type="text" class="form-control" name="id_tspr" id="id_tspr"
            aria-describedby="emailHelp" value="{{ $id_tspr }}">
        <input hidden readonly type="text" class="form-control" name="id_tris" id="id_tris"
            aria-describedby="emailHelp" value="{{ $id_tris }}">
        <input hidden readonly type="text" class="form-control" name="jenis" id="jenis"
            aria-describedby="emailHelp" value="{{ $jenis }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Pilih File</label>
        <input type="file" class="form-control" id="file" name="file" value="{{ $filepath }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Uraian</label>
        <textarea type="text" class="form-control" id="uraian" name="uraian">@if(count($file) > 0) {{ $file[0]->uraian_file }} @endif</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nomor</label>
        <input type="text" class="form-control" id="nomor" name="nomor" value="@if(count($file) > 0) {{ $file[0]->nomor_file }} @endif">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" value="@if(count($file) > 0) {{ $file[0]->tanggal_file }} @endif">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Luas</label>
        <input type="text" class="form-control" id="luas" name="luas" value="@if(count($file) > 0) {{ $file[0]->luas_file }} @endif">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Lokasi</label>
        <input type="text" class="form-control" id="lokasi" name="lokasi" value="@if(count($file) > 0) {{ $file[0]->lokasi_file }} @endif">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Atas nama</label>
        <input type="text" class="form-control" id="atasnama" name="atasnama" value="@if(count($file) > 0) {{ $file[0]->atas_nama_file }} @endif">
    </div>
    <button type="button" class="btn btn-primary" onclick="simpanfile()" data-dismiss="modal">Submit</button>
</form>
