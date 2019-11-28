<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home')->with("navbar", "home");
    }
    
    public function dokumentation()
    {
        return view('pages.dokumentation')->with("navbar", "dokumentation");
    }
    
    public function kurs(Request $request)
    {
        $orderId = $request->input('o');
        if(!empty($kursid) && Is_Numeric($kursid)) {
            if(!empty($kursid) && Is_Numeric($kursid)) {
                return view('pages.linkKurs')->with("navbar", "kurs")->with('kurs', \App\Kurs2::findOrFail($kursid))->with('orderId', $orderId);
            } else {
                return view('pages.linkKurs')->with("navbar", "kurs")->with('kurs', \App\Kurs2::findOrFail($kursid));
            }
        }
        return view('pages.kurs')->with("navbar", "kurs");
    }

    public function kursTab($kursID, Request $request) {
        $kurs = \App\Kurs2::find($kursID);

        $orderId = $request->input('o');
        if(!empty($orderId) && Is_Numeric($orderId)) {
            return view('pages.linkKurs')->with("navbar", "kurs")->with('kurs', $kurs)->with('order',$orderId);
        }
        return view('pages.linkKurs')->with("navbar", "kurs")->with('kurs', $kurs);
    }

    public function tab($kursId, $order) {
        return \App\Kurs2::findOrFail($kursId)->tabs()->where('order',$order)->get();
    
    }
    public function maxTab($kursId) {
        return \App\Kurs2::findOrFail($kursId)->maxTabs();
    }
}
