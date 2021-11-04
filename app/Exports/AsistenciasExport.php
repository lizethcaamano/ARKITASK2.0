<?php

namespace App\Exports;

use App\Asistencia;
use App\Usuario;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Cell;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class AsistenciasExport implements FromCollection, WithHeadings, WithStyles, WithColumnWidths
{
    use Exportable;

    public function columnWidths(): array
    {
        return [
            'A' => 15,
            'B' => 25,
            'C' => 25,
            'D' => 19,
            'E' => 19,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [

            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            //'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
             'A' => ['font' => ['size' => 16]],
             'B' => ['font' => ['size' => 16]],
             'C' => ['font' => ['size' => 16]],
             'D' => ['font' => ['size' => 16]],
             'E' => ['font' => ['size' => 16]],
        ];
    }

    public function headings(): array
    {
        return [
            'Empleado',
            'FechaIngreso',
            'HoraIngreso',
            'FechaSalida',
            'HoraSalida',

        ];
    }

    public function collection()
    {
       return Asistencia::select("IdUsuarioFK","FechaIngreso","HoraIngreso","FechaSalida","HoraSalida")->get();
    }

}
