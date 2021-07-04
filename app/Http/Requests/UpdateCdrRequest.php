<?php

namespace App\Http\Requests;

use App\Models\Cdr;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCdrRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cdr_edit');
    }

    public function rules()
    {
        return [
            'calldate' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'clid' => [
                'string',
                'max:80',
                'nullable',
            ],
            'src' => [
                'string',
                'nullable',
            ],
            'dst' => [
                'string',
                'nullable',
            ],
            'dcontext' => [
                'string',
                'nullable',
            ],
            'channel' => [
                'string',
                'nullable',
            ],
            'dstchannel' => [
                'string',
                'nullable',
            ],
            'lastapp' => [
                'string',
                'nullable',
            ],
            'lastdata' => [
                'string',
                'nullable',
            ],
            'duration' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'billsec' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'disposition' => [
                'string',
                'nullable',
            ],
            'amaflags' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'accountcode' => [
                'string',
                'nullable',
            ],
            'uniqueid' => [
                'string',
                'nullable',
            ],
            'userfield' => [
                'string',
                'nullable',
            ],
            'peeraccount' => [
                'string',
                'nullable',
            ],
            'linkedid' => [
                'string',
                'nullable',
            ],
            'sequence' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
