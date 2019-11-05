<?php

namespace App\Http\Controllers;
use App\Exports\UnitsExport;
use App\Imports\UnitsImport;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Datatables;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Unit = Unit::all();
        return view('page.unit.unit')->with('unit',$Unit);

    }
    // public function unit_list()
    // {
    //     $Unit = Unit::all();

    //     return Datatables::of(Unit::query())->make(true);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.unit.unit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Units = new Unit;
        $Units->name_unit = $request->input('name_unit');
        $Units->acronym = $request->input('acronym');
        $Units->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $id_unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $id_unit)
    {
        $Units = Unit::find($id_unit)->firt();
        return view('page.unit.unit')->with('unit',$Unit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Units = Unit::find($id);
        $Units->name_unit = $request->input('name_unit');
        $Units->acronym = $request->input('acronym');
        $Units->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Units= Unit::find($id);
        $Units->delete();
        return redirect('unit');
    }

    // IM EX SEARCH


    public function export_unit()
    {
        return Excel::download(new UnitsExport(), 'unit.xlsx');
    }

    public function import_unit(Request $request)
    {
        Excel::import(new UnitsImport(), $request->file('file_import'));
        return back();
    }
    public function search_unit(Request $request)
    {
        $unit = DB::table('units')->where('name_unit', 'like', '%' . $request->search . '%')   ->get();
        return view('page.unit.unit',compact('unit'));
    }
    public function export()
    {
        return Excel::download(new UnitsExport(), 'Unit.xlsx');
    }
    public function import(Request $request){
        Excel::import(new UnitsImport(), $request->file('file_import'));
        return back();

    }
}


// ahihi