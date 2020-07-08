<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateMediaTypesRequest;
use App\Http\Requests\UpdateMediaTypesRequest;
use App\Repositories\MediaTypesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MediaTypesController extends AppBaseController
{
    /** @var  MediaTypesRepository */
    private $mediaTypesRepository;

    public function __construct(MediaTypesRepository $mediaTypesRepo)
    {
        $this->mediaTypesRepository = $mediaTypesRepo;
    }

    /**
     * Display a listing of the MediaTypes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mediaTypes = $this->mediaTypesRepository->all();

        return view('media_types.index')
            ->with('mediaTypes', $mediaTypes);
    }

    /**
     * Show the form for creating a new MediaTypes.
     *
     * @return Response
     */
    public function create()
    {
        return view('media_types.create');
    }

    /**
     * Store a newly created MediaTypes in storage.
     *
     * @param CreateMediaTypesRequest $request
     *
     * @return Response
     */
    public function store(CreateMediaTypesRequest $request)
    {
        $input = $request->all();

        $mediaTypes = $this->mediaTypesRepository->create($input);

        Flash::success('Media Types saved successfully.');

        return redirect(route('mediaTypes.index'));
    }

    /**
     * Display the specified MediaTypes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mediaTypes = $this->mediaTypesRepository->find($id);

        if (empty($mediaTypes)) {
            Flash::error('Media Types not found');

            return redirect(route('mediaTypes.index'));
        }

        return view('media_types.show')->with('mediaTypes', $mediaTypes);
    }

    /**
     * Show the form for editing the specified MediaTypes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mediaTypes = $this->mediaTypesRepository->find($id);

        if (empty($mediaTypes)) {
            Flash::error('Media Types not found');

            return redirect(route('mediaTypes.index'));
        }

        return view('media_types.edit')->with('mediaTypes', $mediaTypes);
    }

    /**
     * Update the specified MediaTypes in storage.
     *
     * @param int $id
     * @param UpdateMediaTypesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMediaTypesRequest $request)
    {
        $mediaTypes = $this->mediaTypesRepository->find($id);

        if (empty($mediaTypes)) {
            Flash::error('Media Types not found');

            return redirect(route('mediaTypes.index'));
        }

        $mediaTypes = $this->mediaTypesRepository->update($request->all(), $id);

        Flash::success('Media Types updated successfully.');

        return redirect(route('mediaTypes.index'));
    }

    /**
     * Remove the specified MediaTypes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mediaTypes = $this->mediaTypesRepository->find($id);

        if (empty($mediaTypes)) {
            Flash::error('Media Types not found');

            return redirect(route('mediaTypes.index'));
        }

        $this->mediaTypesRepository->delete($id);

        Flash::success('Media Types deleted successfully.');

        return redirect(route('mediaTypes.index'));
    }
}
