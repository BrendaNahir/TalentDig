<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\CategoriaModel;
use App\Models\usuario_Model;
use App\Models\PerfilModel;

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
   
    public function carrito()
    {
        $data['titulo']='carrito';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/carrito');
        echo view('front/footer_view');
    }

    public function carritoConstruccion()
    {
        $data['titulo']='carrito';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/carritoConstruccion');
        echo view('front/footer_view');
    }

    public function f_listar_productos($id=null){
        $categoria = new CategoriaModel();
        $data['categorias'] = $categoria->findAll();

        $producto=new ProductoModel();
        $data['producto']=$producto->findAll();

    $data['titulo'] = 'Lista de productos';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('front/listar_productos_view');
    echo view('front/footer_view');
}

    public function f_listar_productos_admi($id=null){
        $categoria= new CategoriaModel();
        $producto=new ProductoModel();

        $data['categorias']=$categoria->findAll();
        $data['producto']=$producto->getProductoAll();
        $data['titulo'] = 'Listado de productos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/listar_productos_admi');
        echo view('front/footer_view');
}

public function f_listar_usuarios_admi($id=null){
    $perfil= new PerfilModel();
    $usuario=new usuario_Model();

    $data['perfil']=$perfil->findAll();
    $data['usuario']=$usuario->getUsuarioAll();
    $data['titulo'] = 'Listado de usuarios';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('front/listar_usuarios_admi');
    echo view('front/footer_view');
}

}
