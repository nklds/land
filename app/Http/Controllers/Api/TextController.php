<?php

namespace App\Http\Controllers\Api;

use App\Models\Text;
use App\Http\Requests\StoreTextRequest;
use App\Http\Requests\UpdateTextRequest;

class TextController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Text::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreTextRequest $request
     * @param \App\Models\Text $text
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreTextRequest $request, Text $text): \Illuminate\Http\JsonResponse
    {
        return $text->save($request->all()) ?
            response()->json( $text, 201) :
            response()->json( 'Some errors here', 204);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Text $textElement
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Text $textElement, int $id): \Illuminate\Http\JsonResponse
    {
        return response()->json($textElement->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateTextRequest $request
     * @param \App\Models\Text $text
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTextRequest $request, Text $text, int $id): \Illuminate\Http\JsonResponse
    {
        $editedText = $text->findOrFail($id);
        return $editedText->update($request->all()) ?
            response()->json( $editedText, 200):
            response()->json('Something went wrong here, try again', 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Text $textElement
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Text $textElement, int $id): \Illuminate\Http\JsonResponse
    {
        return $textElement->findOrFail($id)->delete() ?
            response()->json('Deleted', 204) :
            response()->json( 'Something went wrong', 500);
    }
}
