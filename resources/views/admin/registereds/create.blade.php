@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.registered.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.registereds.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.registered.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fname">{{ trans('cruds.registered.fields.fname') }}</label>
                <input class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" type="text" name="fname" id="fname" value="{{ old('fname', '') }}">
                @if($errors->has('fname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.fname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lname">{{ trans('cruds.registered.fields.lname') }}</label>
                <input class="form-control {{ $errors->has('lname') ? 'is-invalid' : '' }}" type="text" name="lname" id="lname" value="{{ old('lname', '') }}">
                @if($errors->has('lname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.lname_helper') }}</span>
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