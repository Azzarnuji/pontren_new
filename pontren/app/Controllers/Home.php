<?php

namespace App\Controllers;

use Exception;
use Firebase\JWT\JWT;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'=>"Pontren Darul Muttaqin",
            'data'=>"Home",
            'path'=>"Home"
        ];
        return view('home/index',$data);
    }
    public function foto($tahun = null,$folder = null, $option = null){
        // $getData = self::getCookies();
        // $getUser = self::getUsername();
        // if ($getData != 'Logged'){
        //     return redirect()->to('/home/login_foto');
        // }
        $data = [
            'title'=>"Gallery Santri",
            'tahun'=>$tahun,
            'folder'=>$folder,
            'data'=>"Logged",
            'path'=>"Foto",
            'user'=>"Umum",
            'option'=>$option
        ];
        return view('home/foto',$data);
    }
    public function images($tahun = null,$folder = null, $option = null){
        // $getData = self::getCookies();
        // $getUser = self::getUsername();
        // if ($getData != 'Logged'){
        //     return redirect()->to('/home/login_foto');
        // }
        $data = [
            'title'=>"Gallery Santri",
            'tahun'=>$tahun,
            'folder'=>$folder,
            'data'=>"Logged",
            'path'=>"Images",
            'user'=>"Umum",
            'option'=>$option
        ];
        return view('home/foto',$data);
    }
}
