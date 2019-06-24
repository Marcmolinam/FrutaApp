<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetalle_VentaRequest;
use App\Http\Requests\UpdateDetalle_VentaRequest;
use App\Repositories\Detalle_VentaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Detalle_VentaController extends AppBaseController
{
    /** @var  Detalle_VentaRepository */
    private $detalleVentaRepository;

    public function __construct(Detalle_VentaRepository $detalleVentaRepo)
    {
        $this->detalleVentaRepository = $detalleVentaRepo;
    }

    /**
     * Display a listing of the Detalle_Venta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detalleVentas = $this->detalleVentaRepository->all();

        return view('detalle__ventas.index')
            ->with('detalleVentas', $detalleVentas);
    }

    /**
     * Show the form for creating a new Detalle_Venta.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle__ventas.create');
    }

    /**
     * Store a newly created Detalle_Venta in storage.
     *
     * @param CreateDetalle_VentaRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalle_VentaRequest $request)
    {
        $input = $request->all();

        $detalleVenta = $this->detalleVentaRepository->create($input);

        Flash::success('Detalle  Venta saved successfully.');

        return redirect(route('detalleVentas.index'));
    }

    /**
     * Display the specified Detalle_Venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleVenta = $this->detalleVentaRepository->find($id);

        if (empty($detalleVenta)) {
            Flash::error('Detalle  Venta not found');

            return redirect(route('detalleVentas.index'));
        }

        return view('detalle__ventas.show')->with('detalleVenta', $detalleVenta);
    }

    /**
     * Show the form for editing the specified Detalle_Venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleVenta = $this->detalleVentaRepository->find($id);

        if (empty($detalleVenta)) {
            Flash::error('Detalle  Venta not found');

            return redirect(route('detalleVentas.index'));
        }

        return view('detalle__ventas.edit')->with('detalleVenta', $detalleVenta);
    }

    /**
     * Update the specified Detalle_Venta in storage.
     *
     * @param int $id
     * @param UpdateDetalle_VentaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalle_VentaRequest $request)
    {
        $detalleVenta = $this->detalleVentaRepository->find($id);

        if (empty($detalleVenta)) {
            Flash::error('Detalle  Venta not found');

            return redirect(route('detalleVentas.index'));
        }

        $detalleVenta = $this->detalleVentaRepository->update($request->all(), $id);

        Flash::success('Detalle  Venta updated successfully.');

        return redirect(route('detalleVentas.index'));
    }

    /**
     * Remove the specified Detalle_Venta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detalleVenta = $this->detalleVentaRepository->find($id);

        if (empty($detalleVenta)) {
            Flash::error('Detalle  Venta not found');

            return redirect(route('detalleVentas.index'));
        }

        $this->detalleVentaRepository->delete($id);

        Flash::success('Detalle  Venta deleted successfully.');

        return redirect(route('detalleVentas.index'));
    }
}
