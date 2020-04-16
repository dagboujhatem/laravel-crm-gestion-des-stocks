<?php

namespace App\Http\Controllers;

use App\DataTables\ArmeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateArmeRequest;
use App\Http\Requests\UpdateArmeRequest;
use App\Repositories\ArmeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ArmeController extends AppBaseController
{
    /** @var  ArmeRepository */
    private $armeRepository;

    public function __construct(ArmeRepository $armeRepo)
    {
        $this->armeRepository = $armeRepo;
    }

    /**
     * Display a listing of the Arme.
     *
     * @param ArmeDataTable $armeDataTable
     * @return Response
     */
    public function index(ArmeDataTable $armeDataTable)
    {
        return $armeDataTable->render('armes.index');
    }

    /**
     * Show the form for creating a new Arme.
     *
     * @return Response
     */
    public function create()
    {
        return view('armes.create');
    }

    /**
     * Store a newly created Arme in storage.
     *
     * @param CreateArmeRequest $request
     *
     * @return Response
     */
    public function store(CreateArmeRequest $request)
    {
        $input = $request->all();

        $arme = $this->armeRepository->create($input);

        Flash::success(__('arme.storeSussessMessage'));

        return redirect(route('armes.index'));
    }

    /**
     * Display the specified Arme.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $arme = $this->armeRepository->find($id);

        if (empty($arme)) {
            Flash::error(__('arme.notFoundErrorMessage'));

            return redirect(route('armes.index'));
        }

        return view('armes.show')->with('arme', $arme);
    }

    /**
     * Show the form for editing the specified Arme.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $arme = $this->armeRepository->find($id);

        if (empty($arme)) {
            Flash::error(__('arme.notFoundErrorMessage'));

            return redirect(route('armes.index'));
        }

        return view('armes.edit')->with('arme', $arme);
    }

    /**
     * Update the specified Arme in storage.
     *
     * @param  int              $id
     * @param UpdateArmeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArmeRequest $request)
    {
        $arme = $this->armeRepository->find($id);

        if (empty($arme)) {
            Flash::error(__('arme.notFoundErrorMessage'));

            return redirect(route('armes.index'));
        }

        $arme = $this->armeRepository->update($request->all(), $id);

        Flash::success(__('arme.updateSussessMessage'));

        return redirect(route('armes.index'));
    }

    /**
     * Remove the specified Arme from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $arme = $this->armeRepository->find($id);

        if (empty($arme)) {
            Flash::error(__('arme.notFoundErrorMessage'));

            return redirect(route('armes.index'));
        }

        $this->armeRepository->delete($id);

        Flash::success(__('arme.destroySussessMessage'));

        return redirect(route('armes.index'));
    }
}
