<?php

namespace App\Http\Controllers\Api;

use App\Models\Head;
use App\Http\Requests\StoreHeadRequest;
use App\Http\Requests\UpdateHeadRequest;
use App\Models\Page;
use Illuminate\Http\JsonResponse;

class HeadController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Head::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreHeadRequest $request
     * @param Head $head
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreHeadRequest $request, Head $head): JsonResponse
    {
        if ($new_head = $head->save($request->all())) {
            return response()->json($new_head, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Head $head
     * @param int $id
     * @return JsonResponse
     */
    public function show(Head $head, int $id): JsonResponse
    {
        return response()->json($head->findOrFail($id));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateHeadRequest $request
     * @param \App\Models\Head $head
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateHeadRequest $request, Head $head, int $id): JsonResponse
    {
        if($edited_head = $head->findOrFail($id)){
            if($edited_head->update($request)){
                return response()->json($edited_head);
            } else {
                return response()->json('Something went wrong', 204);
            }
        } else {
            return response()->json('Oops... It looks like there is no wondered head', 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Head $head
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Head $head, int $id): JsonResponse
    {
        return response()->json($head->findOrFail($id), 204);
    }
}
