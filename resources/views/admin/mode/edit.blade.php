@extends('layouts.admin')
@section('title', 'デバイス機能の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>デバイス機能編集</h2>
                <form action="{{ action('Admin\ModeController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div>
                        <a href="{{ action('Admin\ModeController@index') }}">一覧</a>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メーカー名</label>
                        <div class="col-md-10">
                            {!! Form::select('company_id', $companies, $modes_form->company_id) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">デバイス種類</label>
                        <div class="col-md-10">
                            {!! Form::select('device_id', $devices, $modes_form->device_id) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">種類</label>
                        <div class="col-md-10">
                            {!! Form::select('type', \App\Enums\ModesType::toSelectArray(),$modes_form->type) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">区分</label>
                        <div class="col-md-10">
                            {!! Form::select('division_id', $divisions, $modes_form->division_id) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $modes_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">詳細説明</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $modes_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">添付画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $modes_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $modes_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection