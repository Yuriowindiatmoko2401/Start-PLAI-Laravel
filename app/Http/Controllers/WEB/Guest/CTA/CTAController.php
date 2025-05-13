<?php

namespace App\Http\Controllers\WEB\Guest\CTA;

use App\Http\Controllers\Controller;
use App\Models\CTA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CTAController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_lengkap' => ['required', 'string', 'min:3', 'max:50', 'regex:^(?!\s*$)[A-Za-z\s]+$'],
            'email' => ['required', 'email'],
            'no_telp' => ['required', 'numeric', 'digits_between:7-15'],
            'prodi' => ['required', 'string', 'in:ai,ds,siber']
        ], [
            'nama_lengkap.required' => 'Nama lengkap tidak boleh kosong',
            'nama_lengkap.string' => 'Nama lengkap harus berupa huruf',
            'nama_lengkap.min' => 'Nama lengkap minimal 3 huruf (dengan spasi)',
            'nama_lengkap.max' => 'Nama lengkap maximal 50 (dengan spasi)',
            'nama_lengkap.regex' => 'Nama lengkap harus berupa huruf',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email berupa email yang valid',
            'no_telp.required' => 'Nomor telp tidak boleh kosong',
            'no_telp.numeric' => 'Nomor telp berupa nomor',
            'no_telp.digits_between' => 'Nomor telp berjumlah 7 sampai 15 digit',
            'prodi.required' => 'Program studi tidak boleh kosong',
            'prodi.string' => 'Program studi harus berupa huruf',
            'prodi.in' => 'Program studi tidak valid',
        ]);

        $data['created_by'] = $data['email'];

        DB::beginTransaction();
        try {
            CTA::store($data);
            DB::commit();
            return redirect()->back()->with('success', 'Berhasil mengirim cta');
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                dd($th->getMessage());
            }
            return redirect()->back()->with('error', 'Terjadi kesalahan disisi kami, kami mohon maaf');
        }
    }
}
