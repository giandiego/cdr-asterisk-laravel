<?php

namespace App\Http\Requests;

use App\Models\Cdr;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCdrRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cdr_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:cdrs,id',
        ];
    }
}
