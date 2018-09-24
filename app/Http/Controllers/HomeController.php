<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',['page_title'=>'Anasayfa']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('profile.profile',['page_title'=>'Profil']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function okul()
    {
        return view('okullar.okul',['page_title'=>'Okullar']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function okullardetay($id=null)
    {
        if($id!=null)
        return view('okullar.okuldetay',['page_title'=>'Okullar Detay']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ayarlar()
    {
        return view('ayarlar.ayarlar',['page_title'=>'Ayarlar']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dersler()
    {
        return view('dersler.ders',['page_title'=>'Dersler']);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function veliler()
    {
        return view('veliler.veli',['page_title'=>'Veliler']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function duyurular()
    {
        return view('duyurular.duyuru',['page_title'=>'Duyurular']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function iletisim()
    {
        return view('iletisim.iletisim',['page_title'=>'İletişim']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function odevler()
    {
        return view('odevler.odev',['page_title'=>'Ödevler']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function siniflar()
    {
        return view('siniflar.sinif',['page_title'=>'Siniflar']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ogrenciler()
    {
        return view('ogrenciler.ogrenci',['page_title'=>'Öğrenciler']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ogrencilerdetay($id=null)
    {
        if($id!=null)
        return view('ogrenciler.ogrencidetay',['page_title'=>'Öğrenciler Detay']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function bildirim()
    {
        return view('bildirimler.bildirim',['page_title'=>'bildirim']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ogretmenler()
    {
        return view('ogretmenler.ogretmen',['page_title'=>'Öğretmenler']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ogretmenlerdetay($id=null)
    {   
        if($id!=null)
        return view('ogretmenler.ogretmendetay',['page_title'=>'Öğretmen Detay']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function mesajlar()
    {
        return view('mesajlar.mesaj',['page_title'=>'Mesajlar']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMessage()
    {
        return view('mesajlar.sendmesaj',['page_title'=>'Mesaj Gönder']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function task()
    {
        return view('task',['page_title'=>'Task']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function vuetask()
    {
        return view('vuetask',['page_title'=>'VUE TASK']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        return view('test',['page_title'=>'Test']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        return view('shopping',['page_title'=>'Shopping']);
    }
}
