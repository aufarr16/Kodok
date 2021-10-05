<?php

namespace App\Imports;

use App\Projects_Status;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectsStatusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Projects_Status([
            //
        ]);
    }
}
