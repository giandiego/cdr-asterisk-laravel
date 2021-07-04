@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.cdr.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cdrs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.id') }}
                        </th>
                        <td>
                            {{ $cdr->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.calldate') }}
                        </th>
                        <td>
                            {{ $cdr->calldate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.clid') }}
                        </th>
                        <td>
                            {{ $cdr->clid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.src') }}
                        </th>
                        <td>
                            {{ $cdr->src }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.dst') }}
                        </th>
                        <td>
                            {{ $cdr->dst }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.dcontext') }}
                        </th>
                        <td>
                            {{ $cdr->dcontext }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.channel') }}
                        </th>
                        <td>
                            {{ $cdr->channel }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.dstchannel') }}
                        </th>
                        <td>
                            {{ $cdr->dstchannel }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.lastapp') }}
                        </th>
                        <td>
                            {{ $cdr->lastapp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.lastdata') }}
                        </th>
                        <td>
                            {{ $cdr->lastdata }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.duration') }}
                        </th>
                        <td>
                            {{ $cdr->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.billsec') }}
                        </th>
                        <td>
                            {{ $cdr->billsec }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.disposition') }}
                        </th>
                        <td>
                            {{ $cdr->disposition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.amaflags') }}
                        </th>
                        <td>
                            {{ $cdr->amaflags }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.accountcode') }}
                        </th>
                        <td>
                            {{ $cdr->accountcode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.uniqueid') }}
                        </th>
                        <td>
                            {{ $cdr->uniqueid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.userfield') }}
                        </th>
                        <td>
                            {{ $cdr->userfield }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.peeraccount') }}
                        </th>
                        <td>
                            {{ $cdr->peeraccount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.linkedid') }}
                        </th>
                        <td>
                            {{ $cdr->linkedid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cdr.fields.sequence') }}
                        </th>
                        <td>
                            {{ $cdr->sequence }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cdrs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection