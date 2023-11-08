<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\CategoriaModel;


class ProductoController extends BaseController
{


public function categoria_productos($id=null){
    $request=\Config\Services::request();
    $id=$request->getPost('categoria');
    $categoria = new CategoriaModel();
    $data['categorias'] = $categoria->findAll();
    $producto = new ProductoModel();

    if ($id == "0"){
      $data['producto'] = $producto->getProductoAll();
    } else {
      $data['producto'] = $producto->where('categoria_id',$id)->findAll();
    }

    $data['titulo'] = 'Productos';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('back/producto/listar_productos_view');
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
echo view('back/producto/listar_productos_view');
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
    echo view('back/producto/listar_productos_admi');
    echo view('front/footer_view');
}
}