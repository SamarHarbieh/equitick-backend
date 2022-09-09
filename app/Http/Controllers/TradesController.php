<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Illuminate\Http\Request;

class TradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Trade::paginate(20);
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
        $request->validate([
            'Login' => 'required|integer',
            'Deal' => 'required|integer',
            'Entry' => 'required|integer',
            'Action'=>'required|integer',
            'Time' => 'required|date',
            'Symbol' => 'required|string',
            'Price' => 'required|float',
            'Profit' => 'required|float',
            'Volume' => 'required|integer',
        ]);
        return Trade::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function show($Deal)
    {
        return Trade::where("Deal", $Deal)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Deal)
    {
        $trade = Trade::where("Deal", $Deal)->update($request->all());
    
        return $trade;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function destroy($Deal)
    {
        $trade = Trade::where("Deal",$Deal)->delete();
     return $trade;
    }
}
