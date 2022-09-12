<?php

namespace App\Http\Controllers\Api;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Section;

class ImageController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Image::all());
    }

    /**
     * Store a newly created resource in storage.
     * TODO: save relation between imageable and image
     * @param \App\Http\Requests\StoreImageRequest $request
     * @param Image $image
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreImageRequest $request, Image $image): \Illuminate\Http\JsonResponse
    {
        // int $imageable_id, string $imageable_type
        $imageable = new ('\App\Models\\' . $request->get('imageable_type'));
        if ($image->save($request->all()) && $imageable::findOrFail($request->get('imageable_id'))->images()->save($image)) {
            return response()->json($image);
        } else {
            return response()->json('Something went wrong', 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Image $image
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Image $image, int $id): \Illuminate\Http\JsonResponse
    {
        return response()->json($image->findOrFail($id));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateImageRequest $request
     * @param \App\Models\Image $image
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateImageRequest $request, Image $image, int $id): \Illuminate\Http\JsonResponse
    {
        $updated_image = $image->findOrFail($id);
        return $updated_image->update($request->all()) ?
            response()->json($updated_image) :
            response()->json('Something went wrong, try again');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Image $image
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Image $image, int $id): \Illuminate\Http\JsonResponse
    {
        $deleted_image = $image->findOrFail($id);
        return $deleted_image->delete() ?
            response()->json('Deleted', 204) :
            response()->json('Something went wrong', 500);
    }
}
