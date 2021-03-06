<?php

namespace App\Http\Controllers;
use App\Exports\PromotionExport;
use App\Imports\PromotionImport;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Datatables;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Promotion = Promotion::all();
        return view('page.promotion.promotion')->with('promotion',$Promotion);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.promotion.promotion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Promotion= new Promotin;
        $Promotion->code_promotion = $request->input('code_promotion');
        $Promotion->sale = $request->input('sale');
        $Promotion->from_date = $request->input('from_date');
        $Promotion->to_date = $request->input('to_date');
        $Promotion->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $id_promotion)
    {
        $Promotion = Promotion::find($id_promotion)->first();

        return view('page.promotion.promotion')->with('promotion', $Promotion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Promotion = Promotion::find($id);
        $Promotion->code_promotion = $request->input('code_promotion');
        $Promotion->sale = $request->input('sale');
        $Promotion->from_date = $request->input('from_date');
        $Promotion->to_date = $request->input('to_date');
        $Promotion->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Promotion= Promotion::find($id);
        $Promotion->delete();
        return redirect('promotion');
    }
    
    // IM EX SEARCH

    
    public function export_promotion()
    {
        return Excel::download(new PromotionsExport(), 'promotion.xlsx');
    }

    public function import_promotion(Request $request)
    {
        Excel::import(new PromotionsImport(), $request->file('file_import'));
        return back();
    }
    public function search_promotion(Request $request)
    {
        $promotion = DB::table('promotions')->where('code_promotion', 'like', '%' . $request->search . '%') 
        ->orwhere('sale', 'like', '%' . $request->search . '%')
        ->orwhere('from_date', 'like', '%' . $request->search . '%')
        ->orwhere('to_date', 'like', '%' . $request->search . '%')
          ->get();
        return view('page.promotion.promotion',compact('promotion'));
    }
}
