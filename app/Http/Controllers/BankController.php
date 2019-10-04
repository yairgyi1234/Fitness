<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Customer;
use App\Quantity;
use App\Stock;
use Auth;
use DB;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("customers.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = new Stock();
        $quantity = new Quantity();
        $bank = new Bank();

        $userbank = Bank::where('user_id', Auth::user()->id)->first();       
                
        $adminbank = Bank::where('user_id', NULL)->where('type', $userbank->type)->first();        
        
        $stock = Stock::where('id', $request->stockid)->first();  
        $quantity = Quantity::where('stock_id', $request->stockid)->first();        



        DB::table('quantities')
            ->where('stock_id', $request->stockid)
            ->update(['quantity' => (($quantity->quantity)-1)]);

        DB::table('banks')
        ->where('id', $adminbank->id)
        ->update(['balance' => (($adminbank->balance)+$stock->price)]);

        DB::table('banks')
        ->where('id', $userbank->id)
        ->update(['balance' => (($userbank->balance)-$stock->price)]);

        return view("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        //
    }
}
