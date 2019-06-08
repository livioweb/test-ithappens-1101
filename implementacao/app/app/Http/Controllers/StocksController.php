<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stocks = Stock::paginate(15);
        return view('stocks.index')
            ->with('stocks',$stocks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $products = Product::all();
        $stores = Store::all();
        return view('stocks.create')
            ->with('categories',$categories)
            ->with('products',$products)
            ->with('stores',$stores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stocks = new Stock();
        $stocks->name = $request->name;
        $stocks->amount = $request->amount;
        $stocks->categorie_id = $request->categorie_id;
        $stocks->user_id = Auth::user()->id;
        $stocks->product_id = $request->product_id;
        $stocks->store_id = $request->store_id;
        $stocks->payment_amount = $request->payment_amount;
        $stocks->unit_amount = $request->unit_amount;
//dd($stocks);
        if($stocks->save()){
           // Session::put('success', 'Estoque criado com sucesso!');
            return redirect('/admin/stocks')->with('success','Item created successfully!');;
            //return back()->with('success','Item created successfully!');
        }
        Session::put('danger', 'Algum erro ocorreu');

        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $stock = Store::findOrFail($id);
        return view('stocks.show')
            ->with('stock',$stock);
        // dd($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $stock = Store::findOrFail($id);
        return view('stocks.update')
            ->with('stock',$stock);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
