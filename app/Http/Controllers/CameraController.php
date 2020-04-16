<?php

namespace App\Http\Controllers;

use App\DataTables\CameraDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCameraRequest;
use App\Http\Requests\UpdateCameraRequest;
use App\Repositories\CameraRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CameraController extends AppBaseController
{
    /** @var  CameraRepository */
    private $cameraRepository;

    public function __construct(CameraRepository $cameraRepo)
    {
        $this->cameraRepository = $cameraRepo;
    }

    /**
     * Display a listing of the Camera.
     *
     * @param CameraDataTable $cameraDataTable
     * @return Response
     */
    public function index(CameraDataTable $cameraDataTable)
    {
        return $cameraDataTable->render('cameras.index');
    }

    /**
     * Show the form for creating a new Camera.
     *
     * @return Response
     */
    public function create()
    {
        return view('cameras.create');
    }

    /**
     * Store a newly created Camera in storage.
     *
     * @param CreateCameraRequest $request
     *
     * @return Response
     */
    public function store(CreateCameraRequest $request)
    {
        $input = $request->all();

        $camera = $this->cameraRepository->create($input);

        Flash::success(__('camera.storeSussessMessage'));

        return redirect(route('cameras.index'));
    }

    /**
     * Display the specified Camera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $camera = $this->cameraRepository->find($id);

        if (empty($camera)) {
            Flash::error(__('camera.notFoundErrorMessage'));

            return redirect(route('cameras.index'));
        }

        return view('cameras.show')->with('camera', $camera);
    }

    /**
     * Show the form for editing the specified Camera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $camera = $this->cameraRepository->find($id);

        if (empty($camera)) {
            Flash::error(__('camera.notFoundErrorMessage'));

            return redirect(route('cameras.index'));
        }

        return view('cameras.edit')->with('camera', $camera);
    }

    /**
     * Update the specified Camera in storage.
     *
     * @param  int              $id
     * @param UpdateCameraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCameraRequest $request)
    {
        $camera = $this->cameraRepository->find($id);

        if (empty($camera)) {
            Flash::error(__('camera.notFoundErrorMessage'));

            return redirect(route('cameras.index'));
        }

        $camera = $this->cameraRepository->update($request->all(), $id);

        Flash::success(__('camera.updateSussessMessage'));

        return redirect(route('cameras.index'));
    }

    /**
     * Remove the specified Camera from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $camera = $this->cameraRepository->find($id);

        if (empty($camera)) {
            Flash::error(__('camera.notFoundErrorMessage'));

            return redirect(route('cameras.index'));
        }

        $this->cameraRepository->delete($id);

        Flash::success(__('camera.destroySussessMessage'));

        return redirect(route('cameras.index'));
    }
}
