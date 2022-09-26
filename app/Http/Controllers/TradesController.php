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
    public function index(Request $request)
    {
        if($request->Deal && $request->Login) {
        return Trade::where('Deal','like',$request->Deal.'%')->where('Login','like',$request->Login.'%')->orderBy('Time','desc')->paginate(10);
        }
        if($request->Deal){
            return Trade::where('Deal','like',$request->Deal.'%')->orderBy('Time','desc')->paginate(10);
        }
        if($request->Login){
            return Trade::where('Login','like',$request->Login.'%')->orderBy('Time','desc')->paginate(10);
        }
        return Trade::orderBy('Time','desc')->paginate(10);
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
            'Entry' => 'required|integer',
            'Action'=>'required|integer',
            'Time' => 'datetime',
            'Symbol' => 'string',
            'Price' => 'required|numeric',
            'Profit' => 'required|numeric',
            'Volume' => 'integer',
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
