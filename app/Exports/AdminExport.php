<?php

namespace App\Exports;

use App\Models\Frontend;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class AdminExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Frontend::select('tanggal', 'nik', 'nama', 'jam_mulai', 'jam_selesai', 'total_jam', 'status')->get();
    }

    public function headings(): array
    {
        return ["TANGGAL", "NIK", "NAMA", "JAM MULAI", "JAM SELESAI", "JUMLAH JAM LEMBUR", "STATUS"];
    }
}
