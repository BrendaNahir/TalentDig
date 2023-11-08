<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='página principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal_view');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo']='quiénes somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo']='acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

}
