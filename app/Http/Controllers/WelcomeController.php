<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function welcome()
    {
        return view('information.welcome');
        
    }
    public function prueba()
    {
        return view('layaout.make');
        
    }
    public function categorias()
    {
        return view('information.categorias');
        
    }
    public function objetivo()
    {
        return view('information.objetivo');
        
    }
    public function necesidad()
    {
        return view('information.necesidad');
        
    }
    public function alcance()
    {
        return view('information.alcance');
        
    }
    public function despedida()
    {
        return '<h1><center>☻ Agradezco al usuario por haber visitado esta pagina web de Laravel ♥</center></h1>';
        
    }
    public function futuro()
    {
        return view('information.futuro');
        
    }
    

    //------------------------------------------------------------------------------------------------------------------------------

    public function refresh()
    {
        return 'Gracias por ver las categorias';
        
    }
   
    public function refresh2()
    {
        return '<h1><center>Vuelva a visitarnos ☻</center></h1>';
        
    }
}
