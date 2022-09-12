<?php

namespace App\Http\Controllers\Api;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class PageController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Page::paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePageRequest $request
     * @param Page $page
     * @return JsonResponse
     */
    public function store(StorePageRequest $request, Page $page): JsonResponse
    {
        if ($newPage = $page->save($request->all())) {
            return response()->json($newPage, 201);
        } else return response()->json('error!', 400);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Page $page
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Page $page, $slug): JsonResponse
    {
        $curPage = $page->where('slug', $slug)->first();
        return response()->json($curPage);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePageRequest $request
     * @param \App\Models\Page $page
     * @param $slug
     * @return JsonResponse
     */
    public function update(UpdatePageRequest $request, Page $page, $slug): JsonResponse
    {
        if($curPage = $page->where('slug', $slug)->first()){
            if($curPage->update($request->all())){
                return response()->json($curPage);
            } else{
                return response()->json('Something went wrong, try again!', 400);
            }
        } else {
            return response()->json('Ooops! It looks like this page does not exist' , 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Page $page
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(Page $page, int $id): JsonResponse
    {
        return response()->json($page->findOrFail($id), 204);
    }
}
