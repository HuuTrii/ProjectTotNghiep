<?php

namespace App\Http\Controllers;
use App\Exports\CatalogsExport;
use App\Imports\CatalogsImport;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Datatables;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Catalogs = Catalog::all();

        return view('page.products_type.products_type')->with('catalog', $Catalogs);
    }
        public function cata_list()
    {
        $Catalogs = Catalog::all();

        return Datatables::of(Catalog::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.products_type.products_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Catalogs= new Catalog;
        $Catalogs->name_cata = $request->input('name_cata');
        $Catalogs->save();
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show(Catalog $id_cata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalog $id_cata)
    {

        $Catalogs = Catalog::find($id_cata)->first();

        return view('page.products_type.products_type')->with('catalog', $Catalogs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Catalogs = Catalog::find($id);
        $Catalogs->name_cata = $request->input('name_cata');
        $Catalogs->save();
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Catalogs = Catalog::find($id);
        $Catalogs->delete();
        return redirect('products_type');
    }

    // IM EX SEARCH

    
//     public function export_catalog()
//     {
//         return Excel::download(new CatalogsExport(), 'catalog.xlsx');
//     }

//     public function import_catalog(Request $request)
//     {
//         Excel::import(new CatalogsImport(), $request->file('file_import'));
//         return back();
//     }
//     public function search_catalog(Request $request)
//     {
// //            $search = $request->post('search');
// //            $Emp1 = DB::table('employees')->where('name', 'like','%'.$search.'%');
// //            return view('DisplayEmployees',['emp2' =>$Emp1]);
//         $catalog = DB::table('catalogs')->where('name_cata', 'like', '%' . $request->search . '%')   ->get();
//         return view('page.products_type.products_type',compact('catalog'));
//     }
    public function export()
    {
        return Excel::download(new CatalogsExport, 'Catalog.xlsx');
    }
    public function import(Request $request){
        Excel::import(new CatalogsImport(), $request->file('file_import'));
        return back();

    }

}


// ahihi