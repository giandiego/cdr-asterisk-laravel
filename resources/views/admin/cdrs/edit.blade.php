@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.cdr.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cdrs.update", [$cdr->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="calldate">{{ trans('cruds.cdr.fields.calldate') }}</label>
                <input class="form-control datetime {{ $errors->has('calldate') ? 'is-invalid' : '' }}" type="text" name="calldate" id="calldate" value="{{ old('calldate', $cdr->calldate) }}">
                @if($errors->has('calldate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('calldate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.calldate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="clid">{{ trans('cruds.cdr.fields.clid') }}</label>
                <input class="form-control {{ $errors->has('clid') ? 'is-invalid' : '' }}" type="text" name="clid" id="clid" value="{{ old('clid', $cdr->clid) }}">
                @if($errors->has('clid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('clid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.clid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="src">{{ trans('cruds.cdr.fields.src') }}</label>
                <input class="form-control {{ $errors->has('src') ? 'is-invalid' : '' }}" type="text" name="src" id="src" value="{{ old('src', $cdr->src) }}">
                @if($errors->has('src'))
                    <div class="invalid-feedback">
                        {{ $errors->first('src') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.src_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dst">{{ trans('cruds.cdr.fields.dst') }}</label>
                <input class="form-control {{ $errors->has('dst') ? 'is-invalid' : '' }}" type="text" name="dst" id="dst" value="{{ old('dst', $cdr->dst) }}">
                @if($errors->has('dst'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dst') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.dst_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dcontext">{{ trans('cruds.cdr.fields.dcontext') }}</label>
                <input class="form-control {{ $errors->has('dcontext') ? 'is-invalid' : '' }}" type="text" name="dcontext" id="dcontext" value="{{ old('dcontext', $cdr->dcontext) }}">
                @if($errors->has('dcontext'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dcontext') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.dcontext_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="channel">{{ trans('cruds.cdr.fields.channel') }}</label>
                <input class="form-control {{ $errors->has('channel') ? 'is-invalid' : '' }}" type="text" name="channel" id="channel" value="{{ old('channel', $cdr->channel) }}">
                @if($errors->has('channel'))
                    <div class="invalid-feedback">
                        {{ $errors->first('channel') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.channel_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dstchannel">{{ trans('cruds.cdr.fields.dstchannel') }}</label>
                <input class="form-control {{ $errors->has('dstchannel') ? 'is-invalid' : '' }}" type="text" name="dstchannel" id="dstchannel" value="{{ old('dstchannel', $cdr->dstchannel) }}">
                @if($errors->has('dstchannel'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dstchannel') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.dstchannel_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lastapp">{{ trans('cruds.cdr.fields.lastapp') }}</label>
                <input class="form-control {{ $errors->has('lastapp') ? 'is-invalid' : '' }}" type="text" name="lastapp" id="lastapp" value="{{ old('lastapp', $cdr->lastapp) }}">
                @if($errors->has('lastapp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lastapp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.lastapp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lastdata">{{ trans('cruds.cdr.fields.lastdata') }}</label>
                <input class="form-control {{ $errors->has('lastdata') ? 'is-invalid' : '' }}" type="text" name="lastdata" id="lastdata" value="{{ old('lastdata', $cdr->lastdata) }}">
                @if($errors->has('lastdata'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lastdata') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.lastdata_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration">{{ trans('cruds.cdr.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="number" name="duration" id="duration" value="{{ old('duration', $cdr->duration) }}" step="1">
                @if($errors->has('duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.duration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="billsec">{{ trans('cruds.cdr.fields.billsec') }}</label>
                <input class="form-control {{ $errors->has('billsec') ? 'is-invalid' : '' }}" type="number" name="billsec" id="billsec" value="{{ old('billsec', $cdr->billsec) }}" step="1">
                @if($errors->has('billsec'))
                    <div class="invalid-feedback">
                        {{ $errors->first('billsec') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.billsec_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="disposition">{{ trans('cruds.cdr.fields.disposition') }}</label>
                <input class="form-control {{ $errors->has('disposition') ? 'is-invalid' : '' }}" type="text" name="disposition" id="disposition" value="{{ old('disposition', $cdr->disposition) }}">
                @if($errors->has('disposition'))
                    <div class="invalid-feedback">
                        {{ $errors->first('disposition') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.disposition_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amaflags">{{ trans('cruds.cdr.fields.amaflags') }}</label>
                <input class="form-control {{ $errors->has('amaflags') ? 'is-invalid' : '' }}" type="number" name="amaflags" id="amaflags" value="{{ old('amaflags', $cdr->amaflags) }}" step="1">
                @if($errors->has('amaflags'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amaflags') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.amaflags_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="accountcode">{{ trans('cruds.cdr.fields.accountcode') }}</label>
                <input class="form-control {{ $errors->has('accountcode') ? 'is-invalid' : '' }}" type="text" name="accountcode" id="accountcode" value="{{ old('accountcode', $cdr->accountcode) }}">
                @if($errors->has('accountcode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('accountcode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.accountcode_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="uniqueid">{{ trans('cruds.cdr.fields.uniqueid') }}</label>
                <input class="form-control {{ $errors->has('uniqueid') ? 'is-invalid' : '' }}" type="text" name="uniqueid" id="uniqueid" value="{{ old('uniqueid', $cdr->uniqueid) }}">
                @if($errors->has('uniqueid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('uniqueid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.uniqueid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="userfield">{{ trans('cruds.cdr.fields.userfield') }}</label>
                <input class="form-control {{ $errors->has('userfield') ? 'is-invalid' : '' }}" type="text" name="userfield" id="userfield" value="{{ old('userfield', $cdr->userfield) }}">
                @if($errors->has('userfield'))
                    <div class="invalid-feedback">
                        {{ $errors->first('userfield') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.userfield_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="peeraccount">{{ trans('cruds.cdr.fields.peeraccount') }}</label>
                <input class="form-control {{ $errors->has('peeraccount') ? 'is-invalid' : '' }}" type="text" name="peeraccount" id="peeraccount" value="{{ old('peeraccount', $cdr->peeraccount) }}">
                @if($errors->has('peeraccount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('peeraccount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.peeraccount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linkedid">{{ trans('cruds.cdr.fields.linkedid') }}</label>
                <input class="form-control {{ $errors->has('linkedid') ? 'is-invalid' : '' }}" type="text" name="linkedid" id="linkedid" value="{{ old('linkedid', $cdr->linkedid) }}">
                @if($errors->has('linkedid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linkedid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.linkedid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sequence">{{ trans('cruds.cdr.fields.sequence') }}</label>
                <input class="form-control {{ $errors->has('sequence') ? 'is-invalid' : '' }}" type="number" name="sequence" id="sequence" value="{{ old('sequence', $cdr->sequence) }}" step="1">
                @if($errors->has('sequence'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sequence') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cdr.fields.sequence_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection