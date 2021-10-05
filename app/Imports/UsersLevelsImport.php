<?php

namespace App\Imports;

use App\Users_Level;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersLevelsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Users_Level([
            //
        ]);
    }
}
