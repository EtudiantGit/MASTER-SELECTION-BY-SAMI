<?php

namespace App\Exports;

use App\Models\Master;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;


class CandidatsDataExport implements FromView, WithHeadings , WithColumnWidths
{
    private $master;
    
    public function __construct(Master $master)
    {
        $this->master = $master;
    }
    
    public function headings(): array
    {
        return [
            'Nom',
            'Prenom',
            'CIN',
            'EMAIL',
            'date_naissance',
            'telephone',
            'etablissement',
            'sexe',
            'Score'
        ];
    }
    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 20,
            'C' => 20,
            'D' => 20,
            'E' => 20,
            'F' => 20,
            'G' => 20,
            'H' => 20,
            'I' => 20,
        ];
    }
    
    public function view(): View
    {
        return view('master.liste-candidats-excel', [
            'candidats' => $this->master->candidats,
            'master'    => $this->master
        ]);
    }
}
