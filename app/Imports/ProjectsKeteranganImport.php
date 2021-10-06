<?php

namespace App\Imports;

use App\Projects_Keterangan;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectsKeteranganImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Projects_Keterangan([
            //
        ]);
    }
}
