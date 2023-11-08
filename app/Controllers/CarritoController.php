<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\CategoriaModel;

class CarritoController extends BaseController
{


public function index()
    {   
        $categoria = new CategoriaModel();

        $data['categorias'] = $categoria->findAll();
        $producto = new ProductoModel();
        $data['titulo'] = 'Carrito de compras';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/carrito/carrito_view');
        echo view('front/footer_view');
    }

	public function agregar_carrito()
	{
// Call the cart service
$cart = \Config\Services::cart();
$request = \Config\Services::request();

// Insert an array of values
$data = array(
   'id'      => $request->getPost('id'),
   'qty'     => 1,
   'price'   => $request->getPost('precio'),
   'name'    => $request->getPost('nombre'),
);
            //Se insertan los datos a través del modelo
            $cart->insert($data);
            return redirect()->route('ver_carrito');
	}


  function borrar ($id){
    $cart = \Config\Services::cart();
    if ($id == "all"){
      $cart->destroy();
    } else {
      $cart->remove($id);
    }
    return redirect()->route('ver_carrito');
  }

public function aumentar($id){
  $cart = \Config\Services::cart();
   $cart1 = $cart->contents();
       foreach ($cart1 as $item){
    if($item['rowid'] == $id){
      $data['rowid'] = $id;
      $data['qty'] = $item['qty'] + 1;
    }
  };
  $cart->update($data);

  return redirect()->route('ver_carrito');
}

public function disminuir($id){
  $cart = \Config\Services::cart();
   $cart1 = $cart->contents();
       foreach ($cart1 as $item){
    if($item['rowid'] == $id){
      $data['rowid'] = $id;
      $data['qty'] = $item['qty'] - 1;
    }
  };
  $cart->update($data);

  return redirect()->route('ver_carrito');
  }

  public function carritoConstruccion()
  {
      $data['titulo']='carrito';
      echo view('front/head_view',$data);
      echo view('front/navbar_view');
      echo view('back/carrito/carritoConstruccion');
      echo view('front/footer_view');
  }
}