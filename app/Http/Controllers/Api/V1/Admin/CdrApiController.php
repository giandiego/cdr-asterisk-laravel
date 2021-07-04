<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Resources\Admin\CdrResource;
use App\Models\Cdr;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CdrApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('cdr_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CdrResource(Cdr::all());
    }
}
