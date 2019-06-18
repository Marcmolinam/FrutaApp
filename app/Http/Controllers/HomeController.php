<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ProductoRepository;
use App\Repositories\CategoriaRepository;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct(ProductoRepository $productoRepo,CategoriaRepository $categoriaRepo)
    {
        $this->productoRepository = $productoRepo;
        
        $this->categoriaRepository = $categoriaRepo;
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {              
    
        $productos = $this->productoRepository->all();
        $categorias = $this->categoriaRepository->all();
        return view('home')
             ->with('productos', $productos)->with('categorias',$categorias);
    
    }
}
