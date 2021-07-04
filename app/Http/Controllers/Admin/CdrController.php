<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Cdr;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CdrController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('cdr_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cdrs = Cdr::with(['media'])->get();

        return view('admin.cdrs.index', compact('cdrs'));
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('cdr_create') && Gate::denies('cdr_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Cdr();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
