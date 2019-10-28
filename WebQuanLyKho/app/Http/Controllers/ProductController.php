<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Imports\ProductImport;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Product::orderBy('id_pro', 'desc')->get();

         return view('page.products.products')->with('products', $Products);
    }
    public function get_catalog(){
        $Catalogs = Catalog::all();
        return view('page.products.products',compact('Catalogs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.products.products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Products= new Product;
        $Products->id_cata = $request->input('name_cata');
        $Products->id_unit = $request->input('name_unit');
        $Products->id_vendor = $request->input('name_vendor');
        $Products->id_promotion = $request->input('code_promotion');
        $Products->code_pro = $request->input('code_pro');
        $Products->name_pro = $request->input('name_pro');
        $Products->images = $request->input('images');
        $Products->price = $request->input('price');
        $Products->quantity = $request->input('quantity');

        $Products->save();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id_pro)
    {
        
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $id_pro)
    {
        $Catalogs = Catalog::all();

        $Products = Product::find($id_pro)->first();
        return view('page.products.products',['product' => $Products,'catalog' =>$Catalogs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $id)
    {
        $Products = Product::find($id);
        $Products->id_cata = $request->input('name_cata');
        $Products->id_unit = $request->input('name_unit');
        $Products->id_vendor = $request->input('name_vendor');
        $Products->id_promotion = $request->input('code_promotion');
        $Products->code_pro = $request->input('code_pro');
        $Products->name_pro = $request->input('name_pro');
        $Products->images = $request->input('images');
        $Products->price = $request->input('price');
        $Products->quantity = $request->input('quantity');

        
        $Products->save();
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
          $Products = Product::find($id);
        $Products->delete();
        return redirect('products');
    }

    

    /// import export search

    
    public function export_product()
    {
        return Excel::download(new ProductsExport(), 'products.xlsx');
    }

    public function import_product(Request $request)
    {
        Excel::import(new ProductsImport(), $request->file('file_import'));
        return back();
    }
    public function search_product(Request $request)
    {
        $product = DB::table('products')->where('id_cata', 'like', '%' . $request->search . '%')
            ->orwhere('id_unit', 'like', '%' . $request->search . '%')
            ->orwhere('id_vendor', 'like', '%' . $request->search . '%')
            ->orwhere('id_promotion', 'like', '%' . $request->search . '%')
            ->orwhere('name_pro', 'like', '%' . $request->search . '%')
            ->orwhere('price', 'like', '%' . $request->search . '%')
            ->orwhere('quantity', 'like', '%' . $request->search . '%')
            ->orwhere('created_at', 'like', '%' . $request->search . '%')
            ->get();
        return view('page.products.products',compact('product'));
    }
}
