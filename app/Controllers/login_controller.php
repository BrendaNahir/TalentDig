<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuario_Model;
use App\Controllers\BaseController;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo'] = 'login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuarios/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        //verifica que los campos no estén vacíos.
        $rules = [
            'email' => 'required',
            'pass' => 'required'
        ];
    
        if (!$this->validate($rules)) {
            // Si la validación falla, redirigir de vuelta al formulario de inicio de sesión con el mensaje de error
            $session = session();
            $session->setFlashdata('msg', 'Los campos son requeridos');
            return redirect()->to('/login');
        }
        
        //se carga la sesion del usuario en la variable $session
        //se guarda en un id de sesión
        $session = session();
        //se instancia el modelo
        $model = new usuario_Model();

        //traemos los datos del formulario, el email y pass de la derecha tiene que coincidir con el name del form
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        //cuando se encuentra la primer coincidencia entre el 'email' de la tabla y el $email que ingresó el usuario dentro del form,
        //significa que existe y entra en el if
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', '¡El usuario fue dado de baja!');
                return redirect()->to('/login');
            }
            //si no se cumple el primer if (el usuario no fue dado de baja, entra en el prox if), 
            //y se verifican los datos ingresados para iniciar, 
            //si cumple verificación inicia la sesión

            //compara la contraseña ingresada desde el form con el de la tabla.
            $verify_pass = password_verify($password, $pass);
            //password_verify determina los requisitos de configuración de contraseña

            //se crea un array con los datos del usuario que se obtiene de la base
            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                //si se cumple la verificación inicia la sesión
                $session->set($ses_data);
                return redirect()->to('/panel');
                // 
            } else {
                //no paso la validación de la password
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
