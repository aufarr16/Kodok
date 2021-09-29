<?php

namespace App\Exports;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;

class UsersExport implements FromQuery, ShouldAutoSize, WithHeadings, WithEvents
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return User::query();    
    }

    public function headings(): array{
    	return[
    		'#',
    		'id_ulevel',
    		'nama_user',
    		'email_user',
    		'inisial_user',
    		'password',
    		'added_by',
    		'modified_by',
    		'remember_token',
    		'status_user',
    		'created_at',
    		'updated_at'
    	];	
    }

    public function registerEvents(): array{
    	return[
    		BeforeExport::class => function(BeforeExport $event) {
                $event->writer->getProperties()->setCreator('Kodok');
            },

    		AfterSheet::class => function(AfterSheet $event){
    			$event->sheet->getStyle('A1:V1')->applyFromArray([
    				'font' => [
    					'bold' => true
    				],
    				'fill' => [
    					'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
    					'startColor' => [
				            'argb' => '99ccff',
				        ],
    				]
    			]);

    			// $event->sheet->getStyle('A1:H50')->applyFromArray([
    			// 	'borders' => [
    			// 		'allBorders' => [
    			// 			'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
    			// 		]
    			// 	]
    			// ]);
    		}
    	];
    }
}
