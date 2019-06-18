<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Repositories\ProductoRepository;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;

use App\Repositories\CategoriaRepository;

class ProductoController extends AppBaseController
{
    /** @var  ProductoRepository */
    private $productoRepository;
    private $categoriaRepository;

    public function __construct(ProductoRepository $productoRepo,CategoriaRepository $categoriaRepo)
    {
        $this->productoRepository = $productoRepo;
        
        $this->categoriaRepository = $categoriaRepo;
    }
    /**
     * Display a listing of the Producto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productos = $this->productoRepository->all();
        $categorias = $this->categoriaRepository->all();
        return view('productos.index')
            ->with('productos', $productos)->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new Producto.
     *
     * @return Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param CreateProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateProductoRequest $request)

    {   

        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        //Image 
        if ($request->file('imgProducto')) {
            $path = Storage::disk('public')->put('img',$request->file('imgProducto'));

            $producto->fill(['imgProducto'=>asset($path)])->save();
        }

        Flash::success('Producto saved successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified Producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $producto = $this->productoRepository->find($id);
        $categoria = $this->categoriaRepository->find($producto->categoria_id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('producto', $producto)->with('categoria',$categoria);
    }

    /**
     * Show the form for editing the specified Producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }


        return view('productos.edit')->with('producto', $producto);
    }

    /**
     * Update the specified Producto in storage.
     *
     * @param int $id
     * @param UpdateProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }
        
        $producto = $this->productoRepository->update($request->all(), $id);
                //Image 
        if ($request->file('imgProducto')) {
            $path = Storage::disk('public')->put('img',$request->file('imgProducto'));

            $producto->fill(['imgProducto'=>asset($path)])->save();
        }


        Flash::success('Producto updated successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified Producto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success('Producto deleted successfully.');

        return redirect(route('productos.index'));
    }

    public function cart()
    {
                $productos = $this->productoRepository->all();

        return view('productos.cart')
            ->with('productos', $productos);
    }

    public function addToCart($id)
    {
        $productos = $this->productoRepository->find($id);
 
        if(!$productos) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "nombre" => $productos->nombre,
                        "cantidad" => 1,
                        "precio" => $productos->precio,
                        "imgProducto" => $productos->imgProducto
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['cantidad']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
                        "nombre" => $productos->nombre,
                        "cantidad" => 1,
                        "precio" => $productos->precio,
                        "imgProducto" => $productos->imgProducto
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function updateCart(Request $request)
    {
        if($request->id and $request->cantidad)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["cantidad"] = $request->cantidad;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function removeCart(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}
