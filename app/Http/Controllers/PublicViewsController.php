<?php

namespace App\Http\Controllers;

use App\Models\aitables;
use App\Models\bbtables;
use App\Models\bulbtables;
use App\Models\uutables;
use App\Models\pptables;
use App\Models\pmtables;
use App\Models\pmatables;
use App\Models\pkitables;
use App\Models\pbtables;
use App\Models\rbtables;
use App\Models\sktables;
use App\Models\setables;
use App\Models\ibtables;
use App\Models\ikegtables;
use App\Models\ikeutables;
use App\Models\iadmtables;
use App\Models\diptables;


use App\Models\patables;



use App\Models\dikecualikantables;
use App\Models\dktables;
use App\Models\formtables;
use App\Models\ittables;
use App\Models\laporantables;
use App\Models\pstables;
use App\Models\sptables;
use Illuminate\Http\Request;

class PublicViewsController extends Controller
{
    //INI MENAMPILKAAAANNNNNNNNNNNN Index
    public function tampil_data_index()
    {
        return view('PublicViews/index');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Struktur Organisasi
    public function tampil_data_strukturOrganisasi()
    {
        return view('PublicViews/StrukturOrganisasi');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Profil Pimpinan
    public function tampil_data_ProfilPimpinan()
    {
        return view('PublicViews/ProfilPimpinan');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Profil Pejabat Struktural
    public function tampil_data_ProfilPejabatStruktural()
    {
        return view('PublicViews/ProfilPejabatStruktural');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Dasar Hukum
    public function tampil_data_DasarHukum()
    {
        return view('PublicViews/DasarHukum');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Tugas 
    public function tampil_data_Tugas()
    {
        return view('PublicViews/Tugas');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN StrukturPPID 
    public function tampil_data_StrukturPPID()
    {
        return view('PublicViews/StrukturPPID');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Visi dan Misi 
    public function tampil_data_visidanmisi()
    {
        return view('PublicViews/visidanmisi');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Kontak PPID 
    public function tampil_data_kontakppid()
    {
        return view('PublicViews/kontakppid');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Hak dan Kewajiban 
    public function tampil_data_HakdanKewajiban()
    {
        return view('PublicViews/HakdanKewajiban');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Maklumat 
    public function tampil_data_Maklumat()
    {
        return view('PublicViews/Maklumat');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Tata Cara PI 
    public function tampil_data_TataCaraPI()
    {
        return view('PublicViews/TataCaraPI');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Tata Cara PK 
    public function tampil_data_TataCaraPK()
    {
        return view('PublicViews/TataCaraPK');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Tata Cara PPSI 
    public function tampil_data_TataCaraPPSI()
    {
        return view('PublicViews/TataCaraPPSI');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Tata Cara PPWPBP 
    public function tampil_data_TataCaraPPWPBP()
    {
        return view('PublicViews/TataCaraPPWPBP');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Waktu Layanan 
    public function tampil_data_WaktuLayanan()
    {
        return view('PublicViews/WaktuLayanan');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Biaya 
    public function tampil_data_Biaya()
    {
        return view('PublicViews/Biaya');
    }







    //INI MENAMPILKAAAANNNNNNNNNNNN WBS 
    public function tampil_data_WBS()
    {
        return view('PublicViews/WBS');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Sarana 
    public function tampil_data_Sarana()
    {
        return view('PublicViews/Sarana');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN Galeri 
    public function tampil_data_Galeri()
    {
        return view('PublicViews/galeri');
    }

    //INI MENAMPILKAAAANNNNNNNNNNNN FAQ 
    public function tampil_data_FAQ()
    {
        return view('PublicViews/FAQ');
    }





    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Undang - Undang
    public function tampil_data_uu(Request $request)
    {
        if ($request->has('search')) {
            $allData = uutables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = uutables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/uu', ['data' => $allData]);
    }



    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Peraturan Pemerintah
    public function tampil_data_pp(Request $request)
    {
        if ($request->has('search')) {
            $allData = pptables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pptables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/pp', ['data' => $allData]);
    }



    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Peraturan Menteri
    public function tampil_data_pm(Request $request)
    {
        if ($request->has('search')) {
            $allData = pmtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pmtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/pm', ['data' => $allData]);
    }



    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Peraturan Mahkama Agung
    public function tampil_data_pma(Request $request)
    {
        if ($request->has('search')) {
            $allData = pmatables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pmatables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/pma', ['data' => $allData]);
    }



    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Peraturan Komisi Informasi
    public function tampil_data_pki(Request $request)
    {
        if ($request->has('search')) {
            $allData = pkitables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pkitables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/pki', ['data' => $allData]);
    }



    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Peraturan Bawaslu
    public function tampil_data_pb(Request $request)
    {
        if ($request->has('search')) {
            $allData = pbtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pbtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/pb', ['data' => $allData]);
    }



    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Rancangan Bawaslu
    public function tampil_data_rb(Request $request)
    {
        if ($request->has('search')) {
            $allData = rbtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = rbtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/rb', ['data' => $allData]);
    }



    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA SK PPID 
    public function tampil_data_sk(Request $request)
    {
        if ($request->has('search')) {
            $allData = sktables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = sktables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/sk', ['data' => $allData]);
    }



    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Surat Edaran 
    public function tampil_data_se(Request $request)
    {
        if ($request->has('search')) {
            $allData = setables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = setables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/se', ['data' => $allData]);
    }





    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA BERKALA 
    public function tampil_berkala(Request $request)
    {
        $ib_data = $this->getData1($request, ibtables::class);
        $ikeg_data = $this->getData1($request, ikegtables::class);
        $ikeu_data = $this->getData1($request, ikeutables::class);
        $iadm_data = $this->getData1($request, iadmtables::class);
        $dip_data = $this->getData1($request, diptables::class);

        return view('publicViews/berkala', [
            'data1' => $ib_data,
            'data2' => $ikeg_data,
            'data3' => $ikeu_data,
            'data4' => $iadm_data,
            'data5' => $dip_data          
        ]);
    }

    private function getData1($request, $model)
    {
        if ($request->has('search')) {
            return $model::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc');
        } else {
            return $model::orderBy('created_at', 'desc')->paginate(5);
        }
    } 
    
    

    public function tampil_sm(Request $request)
    {
        $ps_data = $this->getData2($request, pstables::class);
        $pa_data = $this->getData2($request, patables::class);

        return view('publicViews/sertamerta', [
            'data1' => $ps_data,
            'data2' => $pa_data,        
        ]);
    }

    private function getData2($request, $model)
    {
        if ($request->has('search')) {
            return $model::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc');
        } else {
            return $model::orderBy('created_at', 'desc')->paginate(5);
        }
    } 
    

    public function tampil_ss(Request $request)
    {
        $bb_data = $this->getData3($request, bbtables::class);
        $bulb_data = $this->getData3($request, bulbtables::class);
        $sp_data = $this->getData3($request, sptables::class);
        $ai_data = $this->getData3($request, aitables::class);
        $it_data = $this->getData3($request, ittables::class);
        $laporan_data = $this->getData3($request, laporantables::class);
        $dk_data = $this->getData3($request, dktables::class);


        return view('publicViews/setiapsaat', [
            'data1' => $bb_data,
            'data2' => $bulb_data,
            'data3' => $sp_data,
            'data4' => $ai_data,   
            'data5' => $it_data,
            'data6' => $laporan_data,
            'data7' => $dk_data       
        ]);
    }

    private function getData3($request, $model)
    {
        if ($request->has('search')) {
            return $model::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc');
        } else {
            return $model::orderBy('created_at', 'desc')->paginate(5);
        }
    } 













































    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA Dikecualikan
    public function tampil_data_dikecualikan(Request $request)
    {
        if ($request->has('search')) {
            $allData = dikecualikantables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = dikecualikantables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/dikecualikan', ['data' => $allData]);
    }

    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA FORM
    public function tampil_data_Form(Request $request)
    {
        if ($request->has('search')) {
            $allData = formtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = formtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/Form', ['data' => $allData]);
    }

    //INI MENAMPILKAN DATAAAAAAAAAAAAAAAAAAAAAAAAA PERNGAJUAN PERMOHONAN SENGKETA
    public function tampil_data_PPS(Request $request)
    {
        if ($request->has('search')) {
            $allData = pstables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pstables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('PublicViews/PPS', ['data' => $allData]);
    }

}
