<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Models\MediaTypes;
use App\Repositories\MediaRepository;
use App\Http\Controllers\AppBaseController;
use App\Services\Images\IImageService;
use App\Services\Images\ImageNameHelper;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Flash;
use Response;

class MediaController extends AppBaseController
{
    /** @var  MediaRepository */
    private $mediaRepository;
    private $imageService;

    public function __construct(MediaRepository $mediaRepo, IImageService $imageService)
    {
        $this->mediaRepository = $mediaRepo;
        $this->imageService = $imageService;
    }

    /**
     * Display a listing of the Media.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $media = $this->mediaRepository->all();

        return view('media.index')
            ->with('media', $media);
    }

    /**
     * Show the form for creating a new Media.
     *
     * @return Response
     */
    public function create()
    {
        $mediaTypes = MediaTypes::all()->pluck('name', 'id');
        return view('media.create')->with('mediaTypes', $mediaTypes);
    }

    /**
     * Store a newly created Media in storage.
     *
     * @param CreateMediaRequest $request
     *
     * @return Response
     */
    public function store(CreateMediaRequest $request)
    {
        $input = $request->all();

        if ($request->media_types_id == 1) {
            $file = $request->file;
            $fileHelper = new ImageNameHelper();
            $storeFileName = $fileHelper->generateName($file);
            $this->imageService->save($file->getRealPath(), $storeFileName);
            $input['src'] = $storeFileName;
        }

        $media = $this->mediaRepository->create($input);

        Flash::success('Media saved successfully.');

        return redirect(route('media.index'));
    }

    /**
     * Display the specified Media.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $media = $this->mediaRepository->find($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        return view('media.show')->with('media', $media);
    }

    /**
     * Show the form for editing the specified Media.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mediaTypes = MediaTypes::all()->pluck('name', 'id');
        $media = $this->mediaRepository->find($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        return view('media.edit')->with('media', $media)->with('mediaTypes', $mediaTypes);
    }

    /**
     * Update the specified Media in storage.
     *
     * @param int $id
     * @param UpdateMediaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMediaRequest $request)
    {
        $media = $this->mediaRepository->find($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        $media = $this->mediaRepository->update($request->all(), $id);

        Flash::success('Media updated successfully.');

        return redirect(route('media.index'));
    }

    /**
     * Remove the specified Media from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $media = $this->mediaRepository->find($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        $this->mediaRepository->delete($id);

        Flash::success('Media deleted successfully.');

        return redirect(route('media.index'));
    }
}
