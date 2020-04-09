<?php

namespace App\Http\Controllers;

use App\DataTables\VoitureDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateVoitureRequest;
use App\Http\Requests\UpdateVoitureRequest;
use App\Repositories\VoitureRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class VoitureController extends AppBaseController
{
    /** @var  VoitureRepository */
    private $voitureRepository;

    public function __construct(VoitureRepository $voitureRepo)
    {
        $this->voitureRepository = $voitureRepo;
    }

    /**
     * Display a listing of the Voiture.
     *
     * @param VoitureDataTable $voitureDataTable
     * @return Response
     */
    public function index(VoitureDataTable $voitureDataTable)
    {
        return $voitureDataTable->render('voitures.index');
    }

    /**
     * Show the form for creating a new Voiture.
     *
     * @return Response
     */
    public function create()
    {
        return view('voitures.create');
    }

    /**
     * Store a newly created Voiture in storage.
     *
     * @param CreateVoitureRequest $request
     *
     * @return Response
     */
    public function store(CreateVoitureRequest $request)
    {
        $input = $request->all();

        $voiture = $this->voitureRepository->create($input);

        Flash::success(__('voiture.storeSussessMessage'));

        return redirect(route('voitures.index'));
    }

    /**
     * Display the specified Voiture.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $voiture = $this->voitureRepository->find($id);

        if (empty($voiture)) {
            Flash::error(__('voiture.notFoundErrorMessage'));

            return redirect(route('voitures.index'));
        }

        return view('voitures.show')->with('voiture', $voiture);
    }

    /**
     * Show the form for editing the specified Voiture.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $voiture = $this->voitureRepository->find($id);

        if (empty($voiture)) {
            Flash::error(__('voiture.notFoundErrorMessage'));

            return redirect(route('voitures.index'));
        }

        return view('voitures.edit')->with('voiture', $voiture);
    }

    /**
     * Update the specified Voiture in storage.
     *
     * @param  int              $id
     * @param UpdateVoitureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVoitureRequest $request)
    {
        $voiture = $this->voitureRepository->find($id);

        if (empty($voiture)) {
            Flash::error(__('voiture.notFoundErrorMessage'));

            return redirect(route('voitures.index'));
        }

        $voiture = $this->voitureRepository->update($request->all(), $id);

        Flash::success(__('voiture.updateSussessMessage'));

        return redirect(route('voitures.index'));
    }

    /**
     * Remove the specified Voiture from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $voiture = $this->voitureRepository->find($id);

        if (empty($voiture)) {
            Flash::error(__('voiture.notFoundErrorMessage'));

            return redirect(route('voitures.index'));
        }

        $this->voitureRepository->delete($id);

        Flash::success(__('voiture.destroySussessMessage'));

        return redirect(route('voitures.index'));
    }
}
