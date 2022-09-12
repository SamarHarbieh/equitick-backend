<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\MT5;

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MT5::all()->each(function($mt5){
            $trade = new Trade;
            $trade->Login = $mt5->Login;
            $trade->Entry = $mt5->Entry;
            $trade->Action = $mt5->Action;
            $trade->time = mt5->Time;
            $trade->Symbol = $mt5->Symbol;
            $trade->Price = $mt5->Price;
            $trade->Profit = $mt5->Profit;
            $trade->Volume = $mt5->Volume;
            $trade->save();
    });
}
}
