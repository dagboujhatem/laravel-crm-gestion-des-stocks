<?php

namespace App\Http\Controllers;

use App\DataTables\JumelleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateJumelleRequest;
use App\Http\Requests\UpdateJumelleRequest;
use App\Repositories\JumelleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class JumelleController extends AppBaseController
{
    /** @var  JumelleRepository */
    private $jumelleRepository;

    public function __construct(JumelleRepository $jumelleRepo)
    {
        $this->jumelleRepository = $jumelleRepo;
    }

    /**
     * Display a listing of the Jumelle.
     *
     * @param JumelleDataTable $jumelleDataTable
     * @return Response
     */
    public function index(JumelleDataTable $jumelleDataTable)
    {
        return $jumelleDataTable->render('jumelles.index');
    }

    /**
     * Show the form for creating a new Jumelle.
     *
     * @return Response
     */
    public function create()
    {
        return view('jumelles.create');
    }

    /**
     * Store a newly created Jumelle in storage.
     *
     * @param CreateJumelleRequest $request
     *
     * @return Response
     */
    public function store(CreateJumelleRequest $request)
    {
        $input = $request->all();

        $jumelle = $this->jumelleRepository->create($input);

        Flash::success(__('jumelle.storeSussessMessage'));

        return redirect(route('jumelles.index'));
    }

    /**
     * Display the specified Jumelle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jumelle = $this->jumelleRepository->find($id);

        if (empty($jumelle)) {
            Flash::error(__('jumelle.notFoundErrorMessage'));

            return redirect(route('jumelles.index'));
        }

        return view('jumelles.show')->with('jumelle', $jumelle);
    }

    /**
     * Show the form for editing the specified Jumelle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jumelle = $this->jumelleRepository->find($id);

        if (empty($jumelle)) {
            Flash::error(__('jumelle.notFoundErrorMessage'));

            return redirect(route('jumelles.index'));
        }

        return view('jumelles.edit')->with('jumelle', $jumelle);
    }

    /**
     * Update the specified Jumelle in storage.
     *
     * @param  int              $id
     * @param UpdateJumelleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJumelleRequest $request)
    {
        $jumelle = $this->jumelleRepository->find($id);

        if (empty($jumelle)) {
            Flash::error(__('jumelle.notFoundErrorMessage'));

            return redirect(route('jumelles.index'));
        }

        $jumelle = $this->jumelleRepository->update($request->all(), $id);

        Flash::success(__('jumelle.updateSussessMessage'));

        return redirect(route('jumelles.index'));
    }

    /**
     * Remove the specified Jumelle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jumelle = $this->jumelleRepository->find($id);

        if (empty($jumelle)) {
            Flash::error(__('jumelle.notFoundErrorMessage'));

            return redirect(route('jumelles.index'));
        }

        $this->jumelleRepository->delete($id);

        Flash::success(__('jumelle.destroySussessMessage'));

        return redirect(route('jumelles.index'));
    }
}
