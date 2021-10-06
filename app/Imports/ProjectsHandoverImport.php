<?php

namespace App\Imports;

use App\Projects_Handover;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectsHandoverImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Projects_Handover([
            //
        ]);
    }
}
