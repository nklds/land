<?php

namespace App\Http\Controllers\Api;

use App\Models\Anchor;
use App\Http\Requests\StoreAnchorRequest;
use App\Http\Requests\UpdateAnchorRequest;

class AnchorController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Anchor::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAnchorRequest $request
     * @param Anchor $anchor
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreAnchorRequest $request, Anchor $anchor): \Illuminate\Http\JsonResponse
    {
        return $anchor->save($request->all()) ?
            response()->json($anchor) :
            response()->json('Something went wrong', 500);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Anchor $anchor
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Anchor $anchor, int $id): \Illuminate\Http\JsonResponse
    {
        return response()->json($anchor->findOrFail($id));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateAnchorRequest $request
     * @param \App\Models\Anchor $anchor
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateAnchorRequest $request, Anchor $anchor, int $id): \Illuminate\Http\JsonResponse
    {
        return $anchor->findOrFail($id)->update() ?
            response()->json($anchor) :
            response()->json('Something went wrong', 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Anchor $anchor
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Anchor $anchor, int $id): \Illuminate\Http\JsonResponse
    {
        return $anchor->findOrFail($id)->delete() ?
            response()->json('Deleted', 204) :
            response()->json('Something went wrong', 500);

    }
}
