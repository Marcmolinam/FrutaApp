<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVentaRequest;
use App\Http\Requests\UpdateVentaRequest;
use App\Repositories\VentaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VentaController extends AppBaseController
{
    /** @var  VentaRepository */
    private $ventaRepository;

    public function __construct(VentaRepository $ventaRepo)
    {
        $this->ventaRepository = $ventaRepo;
    }

    /**
     * Display a listing of the Venta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ventas = $this->ventaRepository->all();

        return view('ventas.index')
            ->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new Venta.
     *
     * @return Response
     */
    public function create()
    {
        return view('ventas.create');
    }

    /**
     * Store a newly created Venta in storage.
     *
     * @param CreateVentaRequest $request
     *
     * @return Response
     */
    public function store(CreateVentaRequest $request)
    {
        $input = $request->all();

        $venta = $this->ventaRepository->create($input);

        Flash::success('Venta saved successfully.');

        return redirect(route('ventas.index'));
    }

    /**
     * Display the specified Venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        return view('ventas.show')->with('venta', $venta);
    }

    /**
     * Show the form for editing the specified Venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        return view('ventas.edit')->with('venta', $venta);
    }

    /**
     * Update the specified Venta in storage.
     *
     * @param int $id
     * @param UpdateVentaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVentaRequest $request)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        $venta = $this->ventaRepository->update($request->all(), $id);

        Flash::success('Venta updated successfully.');

        return redirect(route('ventas.index'));
    }

    /**
     * Remove the specified Venta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        $this->ventaRepository->delete($id);

        Flash::success('Venta deleted successfully.');

        return redirect(route('ventas.index'));
    }
}
