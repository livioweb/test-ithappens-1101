<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       # Session::put('success', 'Item created successfully!');
       # Session::put('info', 'Item created successfully!');
        $customers = Customer::paginate(15);
        return view('customers.index')
            ->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #$validatedData = $request->([
        #    'name' => 'required|max:255',
        #    'cel_phone' => 'required|max:255',
        #    'date_born' => 'required|max:255',
        #    'email' => 'required|alpha_num',
        #]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->date_born = $request->date_born;
        $customer->cel_phone = $request->cel_phone;

        if($customer->save()){
            Session::put('success', 'Cliente criado com sucesso!');
            return redirect('/admin/customers');
        }
        Session::put('danger', 'Algum erro ocorreu');

        dd($request->all());


      //

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
        $customer = Customer::findOrFail($id);
        return view('customers.show')
            ->with('customer',$customer);
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
        $customer = Customer::findOrFail($id);
        return view('customers.update')
            ->with('customer',$customer);
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
