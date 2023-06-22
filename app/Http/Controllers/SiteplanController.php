<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Infositeplan;
use App\Models\Suratrekom;
use App\Models\Upload;
use File;
use Illuminate\Support\Facades\Storage;
use Response;

class SiteplanController extends Controller
{
    public function index()
    {
        return view('siteplan.index');
    }
    public function ambilpage1()
    {

        $datapermohonan = DB::select('SELECT * FROM trans_rekomendasi_informasi_siteplan a INNER JOIN trans_surat_permohonan_rekom_siteplan b
        ON a.id_tris = b.tris_id WHERE a.pic = ? ORDER BY b.id_tspr desc', [auth()->user()->id]);
        return view('siteplan.tabelpermohonan', compact([
            'datapermohonan'
        ]));
    }
    public function ambilpage2()
    {
        $kecamatan = DB::select('select * from master_kecamatan');
        $desa = DB::select('select * from master_desa_kelurahan');
        return view('siteplan.form', compact([
            'kecamatan', 'desa'
        ]));
    }
    public function ambildetailpermohonan(Request $request)
    {
        $kecamatan = DB::select('select * from master_kecamatan');
        $desa = DB::select('select * from master_desa_kelurahan');
        $d = DB::select('SELECT * FROM trans_rekomendasi_informasi_siteplan a INNER JOIN trans_surat_permohonan_rekom_siteplan b
        ON a.id_tris = b.tris_id WHERE a.id_tris = ?', [$request->id]);
        // dd($datapermohonan);
        return view('siteplan.form_edit', compact([
            'kecamatan', 'desa', 'd'
        ]));
    }
    public function formupload(Request $request)
    {
        $kecamatan = DB::select('select * from master_kecamatan');
        $desa = DB::select('select * from master_desa_kelurahan');
        $s = DB::select('select * from master_jenis_persyaratan');
        $d = DB::select('SELECT * FROM trans_rekomendasi_informasi_siteplan a INNER JOIN trans_surat_permohonan_rekom_siteplan b
        ON a.id_tris = b.tris_id WHERE a.id_tris = ?', [$request->id]);
        $file = DB::select('SELECT * FROM trans_rekomendasi_files a WHERE a.tspr_id = ?', [$d[0]->id_tspr]);
        $datatanah = DB::select('SELECT * FROM trans_rekomendasi_files a WHERE a.tspr_id = ? and kode_jenis_persyaratan = ?', [$d[0]->id_tspr, 'JPR01']);
        return view('siteplan.form_upload', compact([
            'kecamatan', 'desa', 'd', 's', 'file', 'datatanah'
        ]));
    }
    public function ambilform_upload(Request $request)
    {
        $jenis = $request->jenis;
        $nama = $request->nama;
        $id_surat = $request->id_surat;
        $id_tspr = $request->id_tspr;
        $id_tris = $request->id_tris;
        $file = DB::select('SELECT * FROM trans_rekomendasi_files a WHERE a.tspr_id = ? AND kode_jenis_persyaratan = ?', [$request->id_tspr, $jenis]);
        if (count($file) > 0) {
            $filepath = url('../../storage/files/' . $file[0]->nama_file);
        } else {
            $filepath = '';
        }
        return view('siteplan.form_upload_modal', compact([
            'jenis',
            'nama',
            'id_surat',
            'id_tspr',
            'id_tris',
            'file',
            'filepath'
        ]));
    }
    public function formkonfirmasi(Request $request)
    {
        $d = DB::select('SELECT *,c.`nama_desa_kelurahan` AS nama_desa,d.`nama_kecamatan` AS nama_kecamatan
        FROM trans_rekomendasi_informasi_siteplan a
        INNER JOIN trans_surat_permohonan_rekom_siteplan b ON a.id_tris = b.tris_id
        INNER JOIN master_desa_kelurahan c ON a.`desa_kelurahan_rekom` = c.`kode_desa_kelurahan`
        INNER JOIN master_kecamatan d ON a.`kecamatan_rekom` = d.`kode_kecamatan`
         WHERE a.id_tris = ?', [$request->id]);
        $tspr = $d[0]->id_tspr;
        $gambar = DB::select('SELECT *,b.jenis_persyaratan FROM trans_rekomendasi_files a
         INNER JOIN master_jenis_persyaratan b ON a.kode_jenis_persyaratan = b.kode_jenis_persyaratan
         WHERE a.tspr_id = ?', [$tspr]);
        return view('siteplan.formkonfirmasi', compact([
            'd', 'gambar'
        ]));
    }
    public function formkonfirmasi2(Request $request)
    {
        $d = DB::select('SELECT *,c.`nama_desa_kelurahan` AS nama_desa,d.`nama_kecamatan` AS nama_kecamatan
        FROM trans_rekomendasi_informasi_siteplan a
        INNER JOIN trans_surat_permohonan_rekom_siteplan b ON a.id_tris = b.tris_id
        INNER JOIN master_desa_kelurahan c ON a.`desa_kelurahan_rekom` = c.`kode_desa_kelurahan`
        INNER JOIN master_kecamatan d ON a.`kecamatan_rekom` = d.`kode_kecamatan`
         WHERE a.id_tris = ?', [$request->id]);
        $tspr = $d[0]->id_tspr;
        $gambar = DB::select('SELECT *,b.jenis_persyaratan FROM trans_rekomendasi_files a
         INNER JOIN master_jenis_persyaratan b ON a.kode_jenis_persyaratan = b.kode_jenis_persyaratan
         WHERE a.tspr_id = ?', [$tspr]);
        return view('siteplan.formkonfirmasi2', compact([
            'd', 'gambar'
        ]));
    }
    public function simpanform(Request $request)
    {
        // dd($datafile);
        $data1 = json_decode($_POST['data1'], true);
        foreach ($data1 as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            if ($value == '') {
                $data = [
                    'kode' => 500,
                    'message' => 'Semua Informasi Surat Pemohon Wajib Diisi !'
                ];
                echo json_encode($data);
                die;
            }
            $dataSet1[$index] = $value;
        }
        $data2 = json_decode($_POST['data2'], true);
        foreach ($data2 as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            if ($value == '') {
                $data = [
                    'kode' => 500,
                    'message' => 'Semua Informasi Pemohon Wajib Diisi !'
                ];
                echo json_encode($data);
                die;
            }
            $dataSet2[$index] = $value;
        }
        $data3 = json_decode($_POST['data3'], true);
        foreach ($data3 as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            if ($value == '') {
                $data = [
                    'kode' => 500,
                    'message' => 'Semua Informasi Perumahan Wajib Diisi !'
                ];
                echo json_encode($data);
                die;
            }
            $dataSet3[$index] = $value;
        }
        $trans_rekom_info_siteplan = [
            'nama_perumahan_rekom' => $dataSet3['namaperumahan'],
            'alamat_rekom' => $dataSet3['lokasiperumahan'],
            'desa_kelurahan_rekom' => $dataSet3['desa'],
            'kecamatan_rekom' => $dataSet3['kecamatan'],
            'luas_lahan_rekom' => $dataSet3['luastanah'],
            'insert_date_tris' => $this->get_now(),
            'pic' => auth()->user()->id
        ];
        $rek = Infositeplan::create($trans_rekom_info_siteplan);
        $trans_surat_permohonan_rekom_siteplan = [
            'kota_spr' => $dataSet1['kotatitimangsa'],
            'tanggal_spr' => $dataSet1['tgltitimangsa'],
            'nomor_spr' => $dataSet1['nomorsurat'],
            'lampiran_spr' => $dataSet1['lampiran'],
            'perihal_spr' => $dataSet1['perihal'],
            'nama_pemohon_spr' => $dataSet2['namapemohon'],
            'alamat_spr' => $dataSet2['alamatpemohon'],
            'jabatan_spr' => $dataSet2['jabatanpemohon'],
            'perusahaan_spr' => $dataSet2['namaperusahaan'],
            'tris_id' => $rek->id,
            'insert_date_tspr' => $this->get_now(),
        ];
        Suratrekom::create($trans_surat_permohonan_rekom_siteplan);
        $back = [
            'kode' => 200,
            'message' => 'Data Pengajuan Berhasil Disimpan, Silahkan Upload Berkas Pendukung !'
        ];
        echo json_encode($back);
        die;
    }
    public function get_now()
    {
        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;
        return $now;
    }
    public function get_date()
    {
        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $now = $date;
        return $now;
    }
    public function simpanberkas(Request $request)
    {
        $data = array();
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = $request->id_tspr . '_' . $file->getClientOriginalName();
            $cek = DB::select('select * from trans_rekomendasi_files where tspr_id = ? and kode_jenis_persyaratan = ? ', [$request->id_tspr, $request->jenis]);
            $extension = $file->getClientOriginalExtension();
            $uploadnya = [
                'kode_jenis_persyaratan' => $request->jenis,
                'uraian_file' => $request->uraian,
                'nomor_file' => $request->nomor,
                'tanggal_file' => '2022-01-02',
                'luas_file' => $request->luas,
                'lokasi_file' => $request->lokasi,
                'atas_nama_file' => $request->atasnama,
                'tspr_id' => $request->id_tspr,
                'nama_file' => $filename,
                'ukuran_file' => '0',
                'tipe_file' => $extension,
            ];
            if (count($cek) > 0) {
                Upload::whereRaw('tspr_id = ? and kode_jenis_persyaratan = ?', array([$request->id_tspr, $request->jenis]))->update($uploadnya);
            } else {
                Upload::create($uploadnya);
            }
            $cek2 = DB::select('select * from trans_rekomendasi_files where tspr_id = ?', [$request->id_tspr]);
            if (count($cek2) >= 16) {
                $update_surat = [
                    'status_permohonan' => '2'
                ];
                Infositeplan::whereRaw('id_tris = ?', array([$request->id_tris]))->update($update_surat);
            } else {
                $update_surat = [
                    'status_permohonan' => '1'
                ];
                Infositeplan::whereRaw('id_tris = ?', array([$request->id_tris]))->update($update_surat);
            }
            // File extension
            // File upload location
            $location = '../storage/files';
            // Upload file
            $file->move($location, $filename);

            // File path
            $filepath = url('../../storage/files/' . $filename);

            // Response
            $data['kode'] = 200;
            $data['message'] = 'Uploaded Successfully!';
            $data['filepath'] = $filepath;
            $data['extension'] = $extension;
            $data['filename'] = $filename;
        } else {
            // Response
            $data['kode'] = 500;
            $data['message'] = 'File not uploaded.';
        }

        return response()->json($data);
    }
    public function simpanfilegambar(Request $request)
    {
        $data = array();
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = $request->jenis . '_' . $request->id_tspr . '_' . $file->getClientOriginalName();
            $cek = DB::select('select * from trans_rekomendasi_files where tspr_id = ? and kode_jenis_persyaratan = ? ', [$request->id_tspr, $request->jenis]);
            $extension = $file->getClientOriginalExtension();
            if ($request->jenis != 'JPR20' && $request->file('file')->getSize() > 2000000) {
                if ($extension != 'cdr') {
                    $data['kode'] = 500;
                    $data['message'] = 'Ukuran File maksimal 2MB';
                    return response()->json($data);
                    die;
                }
            }
            if ($request->jenis == 'JPR20') {
                if ($extension != 'cdr') {
                    $data['kode'] = 500;
                    $data['message'] = 'File Harus Berformat cdr.';
                    return response()->json($data);
                    die;
                }
            } else {
                if ($extension != 'pdf') {
                    $data['kode'] = 500;
                    $data['message'] = 'File Harus Berformat pdf';
                    return response()->json($data);
                    die;
                }
            }
            $uploadnya = [
                'kode_jenis_persyaratan' => $request->jenis,
                'uraian_file' => $request->uraian,
                'nomor_file' => $request->nomor,
                'tanggal_file' =>  $request->tanggal,
                'luas_file' => $request->luas,
                'lokasi_file' => $request->lokasi,
                'atas_nama_file' => $request->atasnama,
                'tspr_id' => $request->id_tspr,
                'nama_file' => $filename,
                'ukuran_file' => '0',
                'tipe_file' => $extension,
            ];
            if (count($cek) > 0) {
                Upload::whereRaw('tspr_id = ? and kode_jenis_persyaratan = ?', array([$request->id_tspr, $request->jenis]))->update($uploadnya);
                if (File::exists(public_path('storage/files/' . $cek[0]->nama_file))) {
                    File::delete(public_path('storage/files/' . $cek[0]->nama_file));
                } else {
                    // dd('File does not exists.');
                }
            } else {
                Upload::create($uploadnya);
            }
            $cek2 = DB::select('select * from trans_rekomendasi_files where tspr_id = ?', [$request->id_tspr]);
            if (count($cek2) >= 20) {
                $update_surat = [
                    'status_permohonan' => '2'
                ];
                Infositeplan::whereRaw('id_tris = ?', array([$request->id_tris]))->update($update_surat);
            } else {
                $update_surat = [
                    'status_permohonan' => '1'
                ];
                Infositeplan::whereRaw('id_tris = ?', array([$request->id_tris]))->update($update_surat);
            }
            // File extension
            // File upload location
            $location = 'storage/files';
            // Upload file
            $file->move($location, $filename);

            // File path
            $filepath = url('storage/files/' . $filename);
            // dd($filepath);

            // Response
            $data['kode'] = 200;
            $data['message'] = 'Uploaded Successfully!';
            $data['filepath'] = $filepath;
            $data['extension'] = $extension;
            $data['filename'] = $filename;
        } else {
            // Response
            $data['kode'] = 500;
            $data['message'] = 'File not uploaded.';
        }

        return response()->json($data);
    }
    public function kirimkonfirmasi(request $request)
    {
        $id_tris = $request->idtris;
        $update_surat = [
            'status_permohonan' => '3'
        ];
        Infositeplan::whereRaw('id_tris = ?', array([$id_tris]))->update($update_surat);
        $back = [
            'kode' => 200,
            'message' => 'Data Berhasil dikirim !'
        ];
        echo json_encode($back);
        die;
    }
    public function downloadberkas($id)
    {

        $path = storage_path('files/' . $id);
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $id . '"'
        ]);

        // if (!file_exists($filePath)) {
        //     // Some response with error message...
        // }
        // return response()->download($filePath);
    }
    public function viewfile(Request $request)
    {
        $namafile = $request->jenis;
        // $filepath = url('sisfodpkpp/storage/files/' . $namafile);
        $filepath = Storage::url('files/' . $namafile);
        return view('siteplan.viewfile', compact([
            'filepath'
        ]));
    }
    public function ceknotif()
    {
        $cek = DB::select('select * from trans_rekomendasi_informasi_siteplan where status_permohonan = ?',[4]);
        $back = [
            'kode' => 200,
            'message' => 'Data Berhasil dikirim !',
            'jlh' => count($cek)
        ];
        echo json_encode($back);
        die;
    }
    public function ambilberkas(Request $request)
    {
        $namafile = $request->namafile;
        $filepath = url('storage/files/' . $request->namafile);
        return view('siteplan.viewfile',compact([
            'filepath',
            'namafile'
        ]));
    }
}
