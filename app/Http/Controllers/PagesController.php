<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }
    public function rawat()
    {
        return view('post.rawat-inap');
    }
    public function radiologi()
    {
        return view('post.radiologi');
    }
    public function farmasi()
    {
        return view('post.farmasi');
    }
    public function laboratorium()
    {
        return view('post.laboratorium');
    }
    public function igd()
    {
        return view('post.igd');
    }
    public function kerjasama()
    {
        return view('post.kerjasama');
    }
    public function jadwal()
    {
        return view('jadwal-dokter');
    }
    public function kebidanan()
    {
        return view('post.kandungan');
    }
    public function anak()
    {
        return view('post.anak');
    }
    public function pdalam()
    {
        return view('post.penyakit-dalam');
    }
    public function bedah()
    {
        return view('post.bedah');
    }
    public function promo()
    {
        return view('post.promo');
    }
    public function kontak()
    {
        return view('post.kontak');
    }
    public function news()
    {
        return view('post.detail.news');
    }
}
