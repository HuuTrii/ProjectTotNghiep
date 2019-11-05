<?php

namespace App\Http\Controllers;
use App\Exports\VendorsExport;
use App\Imports\VendorsImport;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Vendors = Vendor::all();

        return view('page.vendor.vendor')->with('vendor', $Vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.vendor.vendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Vendors= new Vendor;
        $Vendors->name_vendor = $request->input('name_vendor');
        $Vendors->phone_number = $request->input('phone_number');
        $Vendors->email = $request->input('email');
        $Vendors->adress = $request->input('adress');
        $Vendors->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $id_vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $id_vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $id_vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $id_vendor)
    {

        $Vendors = Vendor::find($id_vendor)->first();

        return view('page.vendor.vendor')->with('vendor', $Vendors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Vendors = Vendor::find($id);
        $Vendors->name_vendor = $request->input('name_vendor');
        $Vendors->phone_number = $request->input('phone_number');
        $Vendors->email = $request->input('email');
        $Vendors->adress = $request->input('adress');
        $Vendors->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Vendors = Vendor::find($id);
        $Vendors->delete();
        return redirect('vendor');
    }


    // IM EX SEARCH

    public function search_vendor(Request $request)
    {
//            $search = $request->post('search');
//            $Emp1 = DB::table('employees')->where('name', 'like','%'.$search.'%');
//            return view('DisplayEmployees',['emp2' =>$Emp1]);
        $vendor = DB::table('vendors')->where('name_vendor', 'like', '%' . $request->search . '%')
        ->orwhere('phone_number', 'like', '%' . $request->search . '%')
        ->orwhere('email', 'like', '%' . $request->search . '%')
        ->orwhere('adress', 'like', '%' . $request->search . '%')
        ->get();
        return view('page.vendor.vendor',compact('vendor'));
    }
    public function export()
    {
        return Excel::download(new VendorsExport(), 'Vendor.xlsx');
    }
    public function import(Request $request){
        Excel::import(new VendorsImport(), $request->file('file_import'));
        return back();

    }
}


// ahihi