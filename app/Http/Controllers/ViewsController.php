<?php
namespace App\Http\Controllers;

use App\Models\ibtables;
use App\Models\ikegtables;
use App\Models\ikeutables;
use App\Models\iadmtables;
use App\Models\diptables;
use App\Models\pmtables;
use App\Models\pmatables;
use App\Models\pkitables;
use App\Models\pbtables;
use App\Models\rbtables;
use App\Models\sktables;
use App\Models\setables;
use App\Models\pptables;
use App\Models\pstables;
use App\Models\patables;
use App\Models\bbtables;
use App\Models\bulbtables;
use App\Models\sptables;
use App\Models\aitables;
use App\Models\ittables;
use App\Models\laporantables;
use App\Models\dktables;
use App\Models\dikecualikantables;
use App\Models\formtables;
use App\Models\uutables;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //UNDANG - UNDANG <====
    public function tampil_data_uu(Request $request)
    {
        if ($request->has('search')) {
            $allData = uutables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = uutables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_uu', ['data' => $allData]);
    }

    public function tampil_input_uu()
    {
        return view('input_uu');
    }

    public function tampil_edit_uu($id)
    {
        $dataEdit = uutables::find($id);
        return view('edit_uu', ['data' => $dataEdit, 'id' => $id]);
    }





    //Peraturan Pemerintah
    public function tampil_data_pp(Request $request)
    {
        if ($request->has('search')) {
            $allData = pptables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pptables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_pp', ['data' => $allData]);
    }

    public function tampil_input_pp()
    {
        return view('input_pp');
    }

    public function tampil_edit_pp($id)
    {
        $dataEdit = pptables::find($id);
        return view('edit_pp', ['data' => $dataEdit, 'id' => $id]);
    }





    //Peraturan Menteri
    public function tampil_data_pm(Request $request)
    {
        if ($request->has('search')) {
            $allData = pmtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pmtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_pm', ['data' => $allData]);
    }

    public function tampil_input_pm()
    {
        return view('input_pm');
    }

    public function tampil_edit_pm($id)
    {
        $dataEdit = pmtables::find($id);
        return view('edit_pm', ['data' => $dataEdit, 'id' => $id]);
    }





    //PERATURAN MAHKAMA AGUNG <====
    public function tampil_data_pma(Request $request)
    {
        if ($request->has('search')) {
            $allData = pmatables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pmatables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_pma', ['data' => $allData]);
    }

    public function tampil_input_pma()
    {
        return view('input_pma');
    }

    public function tampil_edit_pma($id)
    {
        $dataEdit = pmatables::find($id);
        return view('edit_pma', ['data' => $dataEdit, 'id' => $id]);
    }





    //PERATURAN KOMISI INFORMASI <====
    public function tampil_data_pki(Request $request)
    {
        if ($request->has('search')) {
            $allData = pkitables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pkitables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_pki', ['data' => $allData]);
    }

    public function tampil_input_pki()
    {
        return view('input_pki');
    }

    public function tampil_edit_pki($id)
    {
        $dataEdit = pkitables::find($id);
        return view('edit_pki', ['data' => $dataEdit, 'id' => $id]);
    }





    //PERATURAN BAWASLU <====
    public function tampil_data_pb(Request $request)
    {
        if ($request->has('search')) {
            $allData = pbtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pbtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_pb', ['data' => $allData]);
    }

    public function tampil_input_pb()
    {
        return view('input_pb');
    }

    public function tampil_edit_pb($id)
    {
        $dataEdit = pbtables::find($id);
        return view('edit_pb', ['data' => $dataEdit, 'id' => $id]);
    }





    //RANCANGAN BAWASLU <====
    public function tampil_data_rb(Request $request)
    {
        if ($request->has('search')) {
            $allData = rbtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = rbtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_rb', ['data' => $allData]);
    }

    public function tampil_input_rb()
    {
        return view('input_rb');
    }

    public function tampil_edit_rb($id)
    {
        $dataEdit = rbtables::find($id);
        return view('edit_rb', ['data' => $dataEdit, 'id' => $id]);
    }






    //SK PPID BAWASLU SIDOARJO <====
    public function tampil_data_sk(Request $request)
    {
        if ($request->has('search')) {
            $allData = sktables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = sktables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_sk', ['data' => $allData]);
    }

    public function tampil_input_sk()
    {
        return view('input_sk');
    }

    public function tampil_edit_sk($id)
    {
        $dataEdit = sktables::find($id);
        return view('edit_sk', ['data' => $dataEdit, 'id' => $id]);
    }






    //SURAT EDARAN <====
    public function tampil_data_se(Request $request)
    {
        if ($request->has('search')) {
            $allData = setables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = setables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_se', ['data' => $allData]);
    }

    public function tampil_input_se()
    {
        return view('input_se');
    }

    public function tampil_edit_se($id)
    {
        $dataEdit = setables::find($id);
        return view('edit_se', ['data' => $dataEdit, 'id' => $id]);
    }





    //Informasi Bawaslu
    public function tampil_data_ib(Request $request)
    {
        if ($request->has('search')) {
            $allData = ibtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = ibtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_ib', ['data' => $allData]);
    }

    public function tampil_input_ib()
    {
        return view('input_ib');
    }

    public function tampil_edit_ib($id)
    {
        $dataEdit = ibtables::find($id);
        return view('edit_ib', ['data' => $dataEdit, 'id' => $id]);
    }





    //Informasi Kegiatan
    public function tampil_data_ikeg(Request $request)
    {
        if ($request->has('search')) {
            $allData = ikegtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = ikegtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_ikeg', ['data' => $allData]);
    }

    public function tampil_input_ikeg()
    {
        return view('input_ikeg');
    }

    public function tampil_edit_ikeg($id)
    {
        $dataEdit = ikegtables::find($id);
        return view('edit_ikeg', ['data' => $dataEdit, 'id' => $id]);
    }





    //Informasi keuangan
    public function tampil_data_ikeu(Request $request)
    {
        if ($request->has('search')) {
            $allData = ikeutables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = ikeutables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_ikeu', ['data' => $allData]);
    }

    public function tampil_input_ikeu()
    {
        return view('input_ikeu');
    }

    public function tampil_edit_ikeu($id)
    {
        $dataEdit = ikeutables::find($id);
        return view('edit_ikeu', ['data' => $dataEdit, 'id' => $id]);
    }






    //INFORMASI ADMINISTRASI <====
    public function tampil_data_iadm(Request $request)
    {
        if ($request->has('search')) {
            $allData = iadmtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = iadmtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_iadm', ['data' => $allData]);
    }

    public function tampil_input_iadm()
    {
        return view('input_iadm');
    }

    public function tampil_edit_iadm($id)
    {
        $dataEdit = iadmtables::find($id);
        return view('edit_iadm', ['data' => $dataEdit, 'id' => $id]);
    }





    //DATA INFORMASI PUBLIK <====
    public function tampil_data_dip(Request $request)
    {
        if ($request->has('search')) {
            $allData = diptables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = diptables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_dip', ['data' => $allData]);
    }

    public function tampil_input_dip()
    {
        return view('input_dip');
    }

    public function tampil_edit_dip($id)
    {
        $dataEdit = diptables::find($id);
        return view('edit_dip', ['data' => $dataEdit, 'id' => $id]);
    }





    //Putusan Sangketa
    public function tampil_data_ps(Request $request)
    {
        if ($request->has('search')) {
            $allData = pstables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = pstables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_ps', ['data' => $allData]);
    }

    public function tampil_input_ps()
    {
        return view('input_ps');
    }

    public function tampil_edit_ps($id)
    {
        $dataEdit = pstables::find($id);
        return view('edit_ps', ['data' => $dataEdit, 'id' => $id]);
    }





    //Putusan Administrasi
    public function tampil_data_pa(Request $request)
    {
        if ($request->has('search')) {
            $allData = patables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = patables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_pa', ['data' => $allData]);
    }

    public function tampil_input_pa()
    {
        return view('input_pa');
    }

    public function tampil_edit_pa($id)
    {
        $dataEdit = patables::find($id);
        return view('edit_pa', ['data' => $dataEdit, 'id' => $id]);
    }





    //Buku Bawaslu
    public function tampil_data_bb(Request $request)
    {
        if ($request->has('search')) {
            $allData = bbtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = bbtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_bb', ['data' => $allData]);
    }

    public function tampil_input_bb()
    {
        return view('input_bb');
    }

    public function tampil_edit_bb($id)
    {
        $dataEdit = bbtables::find($id);
        return view('edit_bb', ['data' => $dataEdit, 'id' => $id]);
    }





    //Buletin Bawaslu
    public function tampil_data_bulb(Request $request)
    {
        if ($request->has('search')) {
            $allData = bulbtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = bulbtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_bulb', ['data' => $allData]);
    }

    public function tampil_input_bulb()
    {
        return view('input_bulb');
    }

    public function tampil_edit_bulb($id)
    {
        $dataEdit = bulbtables::find($id);
        return view('edit_bulb', ['data' => $dataEdit, 'id' => $id]);
    }





    //SOP Pelayanan Informasi Publik
    public function tampil_data_sp(Request $request)
    {
        if ($request->has('search')) {
            $allData = sptables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = sptables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_sp', ['data' => $allData]);
    }

    public function tampil_input_sp()
    {
        return view('input_sp');
    }

    public function tampil_edit_sp($id)
    {
        $dataEdit = sptables::find($id);
        return view('edit_sp', ['data' => $dataEdit, 'id' => $id]);
    }






    //Alur Informasi
    public function tampil_data_ai(Request $request)
    {
        if ($request->has('search')) {
            $allData = aitables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = aitables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_ai', ['data' => $allData]);
    }

    public function tampil_input_ai()
    {
        return view('input_ai');
    }

    public function tampil_edit_ai($id)
    {
        $dataEdit = aitables::find($id);
        return view('edit_ai', ['data' => $dataEdit, 'id' => $id]);
    }





    //Informasi Terkait Peraturan / Kebijakan
    public function tampil_data_it(Request $request)
    {
        if ($request->has('search')) {
            $allData = ittables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = ittables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_it', ['data' => $allData]);
    }

    public function tampil_input_it()
    {
        return view('input_it');
    }

    public function tampil_edit_it($id)
    {
        $dataEdit = ittables::find($id);
        return view('edit_it', ['data' => $dataEdit, 'id' => $id]);
    }





        //Laporan
        public function tampil_data_laporan(Request $request)
        {
            if ($request->has('search')) {
                $allData = laporantables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                    ->orderBy('created_at', 'desc')
                    ->paginate(2);
            } else {
                $allData = laporantables::orderBy('created_at', 'desc')->paginate(3);
            }
    
            return view('index_laporan', ['data' => $allData]);
        }
    
        public function tampil_input_laporan()
        {
            return view('input_laporan');
        }
    
        public function tampil_edit_laporan($id)
        {
            $dataEdit = laporantables::find($id);
            return view('edit_laporan', ['data' => $dataEdit, 'id' => $id]);
        }



        

    //Dokumen Kontrak
    public function tampil_data_dk(Request $request)
    {
        if ($request->has('search')) {
            $allData = dktables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = dktables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_dk', ['data' => $allData]);
    }

    public function tampil_input_dk()
    {
        return view('input_dk');
    }

    public function tampil_edit_dk($id)
    {
        $dataEdit = dktables::find($id);
        return view('edit_dk', ['data' => $dataEdit, 'id' => $id]);
    }





    //Dikecualikan
    public function tampil_data_dikecualikan(Request $request)
    {
        if ($request->has('search')) {
            $allData = dikecualikantables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = dikecualikantables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_dikecualikan', ['data' => $allData]);
    }

    public function tampil_input_dikecualikan()
    {
        return view('input_dikecualikan');
    }

    public function tampil_edit_dikecualikan($id)
    {
        $dataEdit = dikecualikantables::find($id);
        return view('edit_dikecualikan', ['data' => $dataEdit, 'id' => $id]);
    }





    //Form Permohonan
    public function tampil_data_form(Request $request)
    {
        if ($request->has('search')) {
            $allData = formtables::where('keterangan', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = formtables::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index_form', ['data' => $allData]);
    }

    public function tampil_input_form()
    {
        return view('input_form');
    }

    public function tampil_edit_form($id)
    {
        $dataEdit = formtables::find($id);
        return view('edit_form', ['data' => $dataEdit, 'id' => $id]);
    }

}
