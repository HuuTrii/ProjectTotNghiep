<?php

namespace App\Imports;
use App\Models\Catalog;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CatalogsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Catalog([
            'id_cata'=>$row['id_cata'],
            'name_cata'=>$row['name_cata']
        ]);
    }
}
