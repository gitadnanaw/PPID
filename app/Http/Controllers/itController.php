<?php

namespace App\Http\Controllers;

use App\Models\ittables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class itController extends Controller
{
    public function input_data(Request $request)
    {
        $request->validate([
            'keterangan_form' => 'required|string|max:255',
            'file_form' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);
        $filePath = '';
        if ($request->hasFile('file_form')) {
            $keterangan = $request->keterangan_form;
            $extension = $request->file('file_form')->getClientOriginalExtension();
            $fileName = $keterangan . '_' . $extension;
            $filePath = $request->file('file_form')->storeAs('files/document', $fileName, 'public');
        }
        $newData = new ittables();
        $newData->keterangan = $request->keterangan_form;
        $newData->file = $filePath;
        $newData->save();

        return redirect('/it')->with('success', 'Data berhasil disimpan');
    }

    public function update_data(Request $request)
    {
        $request->validate([
            'keterangan_form' => 'required|string|max:255',
            'file_form' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $dataToUpdate = ittables::find($request->id);
        if ($dataToUpdate) {
            $dataToUpdate->keterangan = $request->keterangan_form;

            if ($request->hasFile('file_form')) {
                if ($dataToUpdate->file) {
                    Storage::disk('public')->delete($dataToUpdate->file);
                }
                $keterangan = $request->keterangan_form;
                $extension = $request->file('file_form')->getClientOriginalExtension();
                $fileName = $keterangan . '_' . $extension;

                $filePath = $request->file('file_form')->storeAs('files/document', $fileName, 'public');
                $dataToUpdate->file = $filePath;
            }

            $dataToUpdate->save();

            return redirect('/it')->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect('/it')->with('error', 'Data tidak ditemukan');
        }
    }

    public function del_data($id)
    {
        $dataToDelete = ittables::find($id);
        if ($dataToDelete) {
            if ($dataToDelete->file) {
                Storage::disk('public')->delete($dataToDelete->file);
            }
            $dataToDelete->delete();

            return redirect('/it')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/it')->with('error', 'Data tidak ditemukan');
        }
    }
}
