<?php

namespace App\Http\Controllers\Api;

use App\Models\Section;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;

class SectionController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Section::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSectionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreSectionRequest $request, Section $section): \Illuminate\Http\JsonResponse
    {
        return $section->save($request->all()) ?
            response()->json($section) :
            response()->json('Something went wrong here', 500);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Section $section
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Section $section, int $id): \Illuminate\Http\JsonResponse
    {
        return response()->json($section->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateSectionRequest $request
     * @param \App\Models\Section $section
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateSectionRequest $request, Section $section, int $id): \Illuminate\Http\JsonResponse
    {
        if ($edited_section = $section->findOrFail($id)) {
            if ($edited_section->update($request)) {
                return response()->json($edited_section);
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
     * @param \App\Models\Section $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
