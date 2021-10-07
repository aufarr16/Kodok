<?php

namespace App\Exports;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;

class ProjectsExport implements FromQuery, ShouldAutoSize, WithHeadings, WithEvents
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
    	return Project::query();
    }

    public function headings(): array{
    	return[
    		'id',
    		'waktu_assign_project',
    		'id_pketerangan',
    		'id_pstat',
    		'id_ptype',
    		'id_product',
    		'id_mitra',
            'id_current_pic',
            'id_original_pic',
            'id_pic_product', 
    		'id_pic_am',
            'id_pic_pm',
            'nama_project',
            'progress_sit',
            'progress_uat',
            'status_handover',
            'handover_counter',
            'stats_temp',
            'pketerangan_status',
            'pketerangan_note',
            'notes_project',
            'bobot_project'
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
