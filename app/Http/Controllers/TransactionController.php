<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function dataTransaction()
    {
        $countBooking = DB::table('booking')->count();
        $countTransaction = DB::table('transaksi')->count();
        $totalTurnover = DB::table('transaksi')->sum('total_biaya');
    
        $monthlyTransactions = DB::table('transaksi')
            ->select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count'))
            ->groupBy('year', 'month')
            ->get();
    
        return view('dashboard.index', [
            'countBooking' => $countBooking,
            'countTransaction' => $countTransaction,
            'omzet' => $totalTurnover,
            'monthlyTransactions' => $monthlyTransactions
        ]);
    }
}
