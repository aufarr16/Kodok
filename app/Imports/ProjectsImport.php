<?php

namespace App\Imports;

use App\Project;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProjectsImport implements ToModel, WithHeadingRow, SkipsOnError
{
    use Importable, SkipsErrors;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Project([
                'id' => $row['id'],
                'waktu_assign_project' => $row['waktu_assign_project'],
                'id_pketerangan' => $row['id_pketerangan'],
                'id_pstat' => $row['id_pstat'],
                'id_ptype' => $row['id_ptype'],
                'id_product' => $row['id_product'],
                'id_mitra' => $row['id_mitra'],
                'id_current_pic' => $row['id_current_pic'],
                'id_original_pic' => $row['id_original_pic'],
                'id_pic_product' => $row['id_pic_product'],
                'id_pic_am' => $row['id_pic_am'],
                'id_pic_pm' => $row['id_pic_pm'],
                'nama_project' => $row['nama_project'],
                'progress_sit' => $row['progress_sit'],
                'progress_uat' => $row['progress_uat'],
                'status_handover' => $row['status_handover'],
                'handover_counter' => $row['handover_counter'],
                'stats_temp' => $row['stats_temp'],
                'pketerangan_status' => $row['pketerangan_status'],
                'pketerangan_note' => $row['pketerangan_note'],
                'notes_project' => $row['notes_project'],
                'bobot_project' => $row['bobot_project']
        ]);
    }

    // public function rules(): array{
        
    // }
}
