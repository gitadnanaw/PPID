<?php

use App\Http\Controllers\ppController;
use App\Http\Controllers\PublicViewsController;
use App\Http\Controllers\uuController;
use App\Http\Controllers\pmController;
use App\Http\Controllers\pmaController;
use App\Http\Controllers\pkiController;
use App\Http\Controllers\pbController;
use App\Http\Controllers\rbController;
use App\Http\Controllers\skController;
use App\Http\Controllers\seController;
use App\Http\Controllers\ibController;
use App\Http\Controllers\ikegController;
use App\Http\Controllers\ikeuController;
use App\Http\Controllers\iadmController;
use App\Http\Controllers\dipController;
use App\Http\Controllers\psController;
use App\Http\Controllers\paController;
use App\Http\Controllers\bbController;
use App\Http\Controllers\bulbController;
use App\Http\Controllers\spController;
use App\Http\Controllers\aiController;
use App\Http\Controllers\itController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\dkController;
use App\Http\Controllers\dikecualikanController;
use App\Http\Controllers\formController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ViewsController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*...................UNDANG - UNDANG.........................*/
//VIEW
Route::get('/uu',[ViewsController::class,'tampil_data_uu']);
Route::get('/input-uu',[ViewsController::class,'tampil_input_uu']);
Route::get('/edit-uu/{id}', [ViewsController::class, 'tampil_edit_uu']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action',[uuController::class,'input_data']);
//EDIT
Route::post('/update_action',[uuController::class,'update_data']);
//DEL
Route::get('/delete_action/{id}',[uuController::class,'del_data']);



/*...................Peraturan Pemerintah.........................*/
Route::get('/pp',[ViewsController::class,'tampil_data_pp'])->name('admin-pp');
Route::get('/input-pp',[ViewsController::class,'tampil_input_pp']);
Route::get('/edit-pp/{id}', [ViewsController::class, 'tampil_edit_pp']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_pp',[ppController::class,'input_data']);
//EDIT
Route::post('/update_action_pp',[ppController::class,'update_data']);
//DEL
Route::get('/delete_action_pp/{id}',[ppController::class,'del_data']);



/*...................Peraturan Menteri.........................*/
Route::get('/pm',[ViewsController::class,'tampil_data_pm']);
Route::get('/input-pm',[ViewsController::class,'tampil_input_pm']);
Route::get('/edit-pm/{id}', [ViewsController::class, 'tampil_edit_pm']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_pm',[pmController::class,'input_data']);
//EDIT
Route::post('/update_action_pm',[pmController::class,'update_data']);
//DEL
Route::get('/delete_action_pm/{id}',[pmController::class,'del_data']);



/*...................Peraturan Mahkama Agung.........................*/
Route::get('/pma',[ViewsController::class,'tampil_data_pma']);
Route::get('/input-pma',[ViewsController::class,'tampil_input_pma']);
Route::get('/edit-pma/{id}', [ViewsController::class, 'tampil_edit_pma']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_pma',[pmaController::class,'input_data']);
//EDIT
Route::post('/update_action_pma',[pmaController::class,'update_data']);
//DEL
Route::get('/delete_action_pma/{id}',[pmaController::class,'del_data']);




/*...................Peraturan Komisi Informasi.........................*/
Route::get('/pki',[ViewsController::class,'tampil_data_pki']);
Route::get('/input-pki',[ViewsController::class,'tampil_input_pki']);
Route::get('/edit-pki/{id}', [ViewsController::class, 'tampil_edit_pki']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_pki',[pkiController::class,'input_data']);
//EDIT
Route::post('/update_action_pki',[pkiController::class,'update_data']);
//DEL
Route::get('/delete_action_pki/{id}',[pkiController::class,'del_data']);



/*...................Peraturan Bawaslu.........................*/
Route::get('/pb',[ViewsController::class,'tampil_data_pb']);
Route::get('/input-pb',[ViewsController::class,'tampil_input_pb']);
Route::get('/edit-pb/{id}', [ViewsController::class, 'tampil_edit_pb']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_pb',[pbController::class,'input_data']);
//EDIT
Route::post('/update_action_pb',[pbController::class,'update_data']);
//DEL
Route::get('/delete_action_pb/{id}',[pbController::class,'del_data']);




/*...................Rancangan Bawaslu.........................*/
Route::get('/rb',[ViewsController::class,'tampil_data_rb']);
Route::get('/input-rb',[ViewsController::class,'tampil_input_rb']);
Route::get('/edit-rb/{id}', [ViewsController::class, 'tampil_edit_rb']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_rb',[rbController::class,'input_data']);
//EDIT
Route::post('/update_action_rb',[rbController::class,'update_data']);
//DEL
Route::get('/delete_action_rb/{id}',[rbController::class,'del_data']);



/*...................SK PPID Bawaslu Sidoarjo.........................*/
Route::get('/sk',[ViewsController::class,'tampil_data_sk']);
Route::get('/input-sk',[ViewsController::class,'tampil_input_sk']);
Route::get('/edit-sk/{id}', [ViewsController::class, 'tampil_edit_sk']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_sk',[skController::class,'input_data']);
//EDIT
Route::post('/update_action_sk',[skController::class,'update_data']);
//DEL
Route::get('/delete_action_sk/{id}',[skController::class,'del_data']);



/*...................Surat Edaran.........................*/
Route::get('/se',[ViewsController::class,'tampil_data_se']);
Route::get('/input-se',[ViewsController::class,'tampil_input_se']);
Route::get('/edit-se/{id}', [ViewsController::class, 'tampil_edit_se']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_se',[seController::class,'input_data']);
//EDIT
Route::post('/update_action_se',[seController::class,'update_data']);
//DEL
Route::get('/delete_action_se/{id}',[seController::class,'del_data']);



/*...................Informasi Bawaslu.........................*/
Route::get('/ib',[ViewsController::class,'tampil_data_ib']);
Route::get('/input-ib',[ViewsController::class,'tampil_input_ib']);
Route::get('/edit-ib/{id}', [ViewsController::class, 'tampil_edit_ib']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_ib',[ibController::class,'input_data']);
//EDIT
Route::post('/update_action_ib',[ibController::class,'update_data']);
//DEL
Route::get('/delete_action_ib/{id}',[ibController::class,'del_data']);



/*...................Informasi Kegiatan.........................*/
Route::get('/ikeg',[ViewsController::class,'tampil_data_ikeg']);
Route::get('/input-ikeg',[ViewsController::class,'tampil_input_ikeg']);
Route::get('/edit-ikeg/{id}', [ViewsController::class, 'tampil_edit_ikeg']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_ikeg',[ikegController::class,'input_data']);
//EDIT
Route::post('/update_action_ikeg',[ikegController::class,'update_data']);
//DEL
Route::get('/delete_action_ikeg/{id}',[ikegController::class,'del_data']);



/*...................Informasi Keuangan.........................*/
Route::get('/ikeu',[ViewsController::class,'tampil_data_ikeu']);
Route::get('/input-ikeu',[ViewsController::class,'tampil_input_ikeu']);
Route::get('/edit-ikeu/{id}', [ViewsController::class, 'tampil_edit_ikeu']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_ikeu',[ikeuController::class,'input_data']);
//EDIT
Route::post('/update_action_ikeu',[ikeuController::class,'update_data']);
//DEL
Route::get('/delete_action_ikeu/{id}',[ikeuController::class,'del_data']);



/*...................Informasi Administrasi.........................*/
Route::get('/iadm',[ViewsController::class,'tampil_data_iadm']);
Route::get('/input-iadm',[ViewsController::class,'tampil_input_iadm']);
Route::get('/edit-iadm/{id}', [ViewsController::class, 'tampil_edit_iadm']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_iadm',[iadmController::class,'input_data']);
//EDIT
Route::post('/update_action_iadm',[iadmController::class,'update_data']);
//DEL
Route::get('/delete_action_iadm/{id}',[iadmController::class,'del_data']);




/*...................Data Informasi Publik.........................*/
Route::get('/dip',[ViewsController::class,'tampil_data_dip']);
Route::get('/input-dip',[ViewsController::class,'tampil_input_dip']);
Route::get('/edit-dip/{id}', [ViewsController::class, 'tampil_edit_dip']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_dip',[dipController::class,'input_data']);
//EDIT
Route::post('/update_action_dip',[dipController::class,'update_data']);
//DEL
Route::get('/delete_action_dip/{id}',[dipController::class,'del_data']);



/*...................Putusan Sangketa.........................*/
Route::get('/ps',[ViewsController::class,'tampil_data_ps']);
Route::get('/input-ps',[ViewsController::class,'tampil_input_ps']);
Route::get('/edit-ps/{id}', [ViewsController::class, 'tampil_edit_ps']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_ps',[psController::class,'input_data']);
//EDIT
Route::post('/update_action_ps',[psController::class,'update_data']);
//DEL
Route::get('/delete_action_ps/{id}',[psController::class,'del_data']);



/*...................Putusan Administrasi.........................*/
Route::get('/pa',[ViewsController::class,'tampil_data_pa']);
Route::get('/input-pa',[ViewsController::class,'tampil_input_pa']);
Route::get('/edit-pa/{id}', [ViewsController::class, 'tampil_edit_pa']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_pa',[paController::class,'input_data']);
//EDIT
Route::post('/update_action_pa',[paController::class,'update_data']);
//DEL
Route::get('/delete_action_pa/{id}',[paController::class,'del_data']);



/*...................Buku Bawaslu.........................*/
Route::get('/bb',[ViewsController::class,'tampil_data_bb']);
Route::get('/input-bb',[ViewsController::class,'tampil_input_bb']);
Route::get('/edit-bb/{id}', [ViewsController::class, 'tampil_edit_bb']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_bb',[bbController::class,'input_data']);
//EDIT
Route::post('/update_action_bb',[bbController::class,'update_data']);
//DEL
Route::get('/delete_action_bb/{id}',[bbController::class,'del_data']);



/*...................Buletin Bawaslu.........................*/
Route::get('/bulb',[ViewsController::class,'tampil_data_bulb']);
Route::get('/input-bulb',[ViewsController::class,'tampil_input_bulb']);
Route::get('/edit-bulb/{id}', [ViewsController::class, 'tampil_edit_bulb']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_bulb',[bulbController::class,'input_data']);
//EDIT
Route::post('/update_action_bulb',[bulbController::class,'update_data']);
//DEL
Route::get('/delete_action_bulb/{id}',[bulbController::class,'del_data']);



/*...................SOP Pelayanan Informasi Publik.........................*/
Route::get('/sp',[ViewsController::class,'tampil_data_sp']);
Route::get('/input-sp',[ViewsController::class,'tampil_input_sp']);
Route::get('/edit-sp/{id}', [ViewsController::class, 'tampil_edit_sp']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_sp',[spController::class,'input_data']);
//EDIT
Route::post('/update_action_sp',[spController::class,'update_data']);
//DEL
Route::get('/delete_action_sp/{id}',[spController::class,'del_data']);



/*...................Alur Informasi.........................*/
Route::get('/ai',[ViewsController::class,'tampil_data_ai']);
Route::get('/input-ai',[ViewsController::class,'tampil_input_ai']);
Route::get('/edit-ai/{id}', [ViewsController::class, 'tampil_edit_ai']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_ai',[aiController::class,'input_data']);
//EDIT
Route::post('/update_action_ai',[aiController::class,'update_data']);
//DEL
Route::get('/delete_action_ai/{id}',[aiController::class,'del_data']);



/*...................Informasi Terkait Peraturan / Kebijakan.........................*/
Route::get('/it',[ViewsController::class,'tampil_data_it']);
Route::get('/input-it',[ViewsController::class,'tampil_input_it']);
Route::get('/edit-it/{id}', [ViewsController::class, 'tampil_edit_it']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_it',[itController::class,'input_data']);
//EDIT
Route::post('/update_action_it',[itController::class,'update_data']);
//DEL
Route::get('/delete_action_it/{id}',[itController::class,'del_data']);



/*...................Laporan.........................*/
Route::get('/laporan',[ViewsController::class,'tampil_data_laporan']);
Route::get('/input-laporan',[ViewsController::class,'tampil_input_laporan']);
Route::get('/edit-laporan/{id}', [ViewsController::class, 'tampil_edit_laporan']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_laporan',[laporanController::class,'input_data']);
//EDIT
Route::post('/update_action_laporan',[laporanController::class,'update_data']);
//DEL
Route::get('/delete_action_laporan/{id}',[laporanController::class,'del_data']);



/*...................Dokumen Kontrak.........................*/
Route::get('/dk',[ViewsController::class,'tampil_data_dk']);
Route::get('/input-dk',[ViewsController::class,'tampil_input_dk']);
Route::get('/edit-dk/{id}', [ViewsController::class, 'tampil_edit_dk']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_dk',[dkController::class,'input_data']);
//EDIT
Route::post('/update_action_dk',[dkController::class,'update_data']);
//DEL
Route::get('/delete_action_dk/{id}',[dkController::class,'del_data']);


/*...................Dikecualikan.........................*/
Route::get('/dikecualikan',[ViewsController::class,'tampil_data_dikecualikan']);
Route::get('/input-dikecualikan',[ViewsController::class,'tampil_input_dikecualikan']);
Route::get('/edit-dikecualikan/{id}', [ViewsController::class, 'tampil_edit_dikecualikan']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_dikecualikan',[dikecualikanController::class,'input_data']);
//EDIT
Route::post('/update_action_dikecualikan',[dikecualikanController::class,'update_data']);
//DEL
Route::get('/delete_action_dikecualikan/{id}',[dikecualikanController::class,'del_data']);



/*...................Form Permohonan.........................*/
Route::get('/form',[ViewsController::class,'tampil_data_form']);
Route::get('/input-form',[ViewsController::class,'tampil_input_form']);
Route::get('/edit-form/{id}', [ViewsController::class, 'tampil_edit_form']);
//INI FUNGSI => 
//INPUT
Route::post('/input_action_form',[formController::class,'input_data']);
//EDIT
Route::post('/update_action_form',[formController::class,'update_data']);
//DEL
Route::get('/delete_action_form/{id}',[formController::class,'del_data']);

















//FOR VIEWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW
Route::get('/',[PublicViewsController::class,'tampil_data_index']);




Route::get('/public-strukor',[PublicViewsController::class,'tampil_data_StrukturOrganisasi']);
Route::get('/public-profpim',[PublicViewsController::class,'tampil_data_ProfilPimpinan']);
Route::get('/public-pps',[PublicViewsController::class,'tampil_data_ProfilPejabatStruktural']);
Route::get('/public-dm',[PublicViewsController::class,'tampil_data_DasarHukum']);
Route::get('/public-tugas',[PublicViewsController::class,'tampil_data_Tugas']);
Route::get('/public-struktur',[PublicViewsController::class,'tampil_data_StrukturPPID']);
Route::get('/public-vm',[PublicViewsController::class,'tampil_data_visidanmisi']);
Route::get('/public-kontak',[PublicViewsController::class,'tampil_data_kontakppid']);
Route::get('/public-hak',[PublicViewsController::class,'tampil_data_HakdanKewajiban']);
Route::get('/public-maklumat',[PublicViewsController::class,'tampil_data_Maklumat']);
Route::get('/public-tatacarapi',[PublicViewsController::class,'tampil_data_TataCaraPI']);
Route::get('/public-tatacarapk',[PublicViewsController::class,'tampil_data_TataCaraPK']);
Route::get('/public-tatacarappsi',[PublicViewsController::class,'tampil_data_TataCaraPPSI']);
Route::get('/public-tatacarappwpb',[PublicViewsController::class,'tampil_data_TataCaraPPWPBP']);
Route::get('/public-wpi',[PublicViewsController::class,'tampil_data_WaktuLayanan']);
Route::get('/public-bpi',[PublicViewsController::class,'tampil_data_Biaya']);
Route::get('/public-wbs',[PublicViewsController::class,'tampil_data_WBS']);
Route::get('/public-sarana',[PublicViewsController::class,'tampil_data_Sarana']);
Route::get('/public-galeri',[PublicViewsController::class,'tampil_data_Galeri']);
Route::get('/public-faq',[PublicViewsController::class,'tampil_data_FAQ']);





Route::get('/public-uu',[PublicViewsController::class,'tampil_data_uu']);
Route::get('/public-pp',[PublicViewsController::class,'tampil_data_pp']);
Route::get('/public-pm',[PublicViewsController::class,'tampil_data_pm']);
Route::get('/public-pma',[PublicViewsController::class,'tampil_data_pma']);
Route::get('/public-pki',[PublicViewsController::class,'tampil_data_pki']);
Route::get('/public-pb',[PublicViewsController::class,'tampil_data_pb']);
Route::get('/public-rb',[PublicViewsController::class,'tampil_data_rb']);
Route::get('/public-sk',[PublicViewsController::class,'tampil_data_sk']);
Route::get('/public-se',[PublicViewsController::class,'tampil_data_se']);






Route::get('/public-dikecualikan',[PublicViewsController::class,'tampil_data_dikecualikan']);
Route::get('/public-form',[PublicViewsController::class,'tampil_data_Form']);
Route::get('/public-ppsengketa',[PublicViewsController::class,'tampil_data_PPS']);




//WALAUWEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
Route::get('/public-berkala', [PublicViewsController::class, 'tampil_berkala'])->name('berkala');
Route::get('/public-sm', [PublicViewsController::class, 'tampil_sm'])->name('sertamerta');
Route::get('/public-ss', [PublicViewsController::class, 'tampil_ss'])->name('setiapsaat');




//LOGINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
Route::get('/public-login',[loginController::class,'tampil_login'])->name('public-login');
Route::get('/public-regis',[loginController::class,'tampil_regis'])->name('public-regis');

//LOGIN FUNGSIII
Route::post('/input-login',[loginController::class,'input_data_login']);
Route::post('/cek-login',[loginController::class,'proses_login']);