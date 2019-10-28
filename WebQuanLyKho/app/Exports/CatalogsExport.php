<?php

namespace App\Exports;
use App\Models\Catalog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CatalogsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Catalog::all();
    }
    public function headings():array
    {
        return [
            'id_cata',
            'name_cata',
            'created at',
            'updated at'
        ];
    }
}
