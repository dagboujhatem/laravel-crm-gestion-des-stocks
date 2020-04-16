<?php

namespace App\Http\Controllers;

use App\DataTables\GroupeElectriqueDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateGroupeElectriqueRequest;
use App\Http\Requests\UpdateGroupeElectriqueRequest;
use App\Repositories\GroupeElectriqueRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class GroupeElectriqueController extends AppBaseController
{
    /** @var  GroupeElectriqueRepository */
    private $groupeElectriqueRepository;

    public function __construct(GroupeElectriqueRepository $groupeElectriqueRepo)
    {
        $this->groupeElectriqueRepository = $groupeElectriqueRepo;
    }

    /**
     * Display a listing of the GroupeElectrique.
     *
     * @param GroupeElectriqueDataTable $groupeElectriqueDataTable
     * @return Response
     */
    public function index(GroupeElectriqueDataTable $groupeElectriqueDataTable)
    {
        return $groupeElectriqueDataTable->render('groupe_electriques.index');
    }

    /**
     * Show the form for creating a new GroupeElectrique.
     *
     * @return Response
     */
    public function create()
    {
        return view('groupe_electriques.create');
    }

    /**
     * Store a newly created GroupeElectrique in storage.
     *
     * @param CreateGroupeElectriqueRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupeElectriqueRequest $request)
    {
        $input = $request->all();

        $groupeElectrique = $this->groupeElectriqueRepository->create($input);

        Flash::success(__('groupeElectrique.storeSussessMessage'));

        return redirect(route('groupeElectriques.index'));
    }

    /**
     * Display the specified GroupeElectrique.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $groupeElectrique = $this->groupeElectriqueRepository->find($id);

        if (empty($groupeElectrique)) {
            Flash::error(__('groupeElectrique.notFoundErrorMessage'));

            return redirect(route('groupeElectriques.index'));
        }

        return view('groupe_electriques.show')->with('groupeElectrique', $groupeElectrique);
    }

    /**
     * Show the form for editing the specified GroupeElectrique.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $groupeElectrique = $this->groupeElectriqueRepository->find($id);

        if (empty($groupeElectrique)) {
             Flash::error(__('groupeElectrique.notFoundErrorMessage'));

            return redirect(route('groupeElectriques.index'));
        }

        return view('groupe_electriques.edit')->with('groupeElectrique', $groupeElectrique);
    }

    /**
     * Update the specified GroupeElectrique in storage.
     *
     * @param  int              $id
     * @param UpdateGroupeElectriqueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupeElectriqueRequest $request)
    {
        $groupeElectrique = $this->groupeElectriqueRepository->find($id);

        if (empty($groupeElectrique)) {
            Flash::error(__('groupeElectrique.notFoundErrorMessage'));

            return redirect(route('groupeElectriques.index'));
        }

        $groupeElectrique = $this->groupeElectriqueRepository->update($request->all(), $id);

        Flash::success(__('groupeElectrique.updateSussessMessage'));

        return redirect(route('groupeElectriques.index'));
    }

    /**
     * Remove the specified GroupeElectrique from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $groupeElectrique = $this->groupeElectriqueRepository->find($id);

        if (empty($groupeElectrique)) {
            Flash::error(__('groupeElectrique.notFoundErrorMessage'));

            return redirect(route('groupeElectriques.index'));
        }

        $this->groupeElectriqueRepository->delete($id);

        Flash::success(__('groupeElectrique.destroySussessMessage'));

        return redirect(route('groupeElectriques.index'));
    }
}
