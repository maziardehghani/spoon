<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use App\Models\Media;
use App\Services\MediaService;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\JsonResponse;

class FileController extends Controller
{
    /**
     * @param FileRequest $request
     * @return JsonResponse
     *
     *
     * upload files with this method is possible
     */
    public function store(FileRequest $request):JsonResponse
    {
        MediaService::uploadIf(
            $request->hasFile('file'),
            $request->file('file'),
            $request->type,
            $request->modelable_type,
            $request->modelable_id,
        );

        return response()->success(null,'فایل با موفقیت ذخیره شد');
    }

    /**
     * @param FileRequest $request
     * @return JsonResponse
     *
     * replacing file with last one
     */
    public function replace(FileRequest $request):JsonResponse
    {
        MediaService::replace(
            $request->file('file'),
            $request->type,
            $request->modelable_type,
            $request->modelable_id,
        );

        return response()->success(null,'فایل با موفقیت ذخیره شد');
    }


    /**
     * @param Media $media
     * @return \Illuminate\Http\JsonResponse containing error or success response
     *
     * in deleting File process the actual file will be removed from server
     * and also the data of that file were from database will remove too
     *
     *
     */
    public function delete(Media $media):JsonResponse
    {
        MediaService::delete($media);
        $media->delete();

        return response()->success(null, 'فایل با موفقیت حذف شد');
    }

}
