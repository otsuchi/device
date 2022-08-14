@extends('layouts.admin')
@section('title', 'デバイス機能新規追加')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>デバイス機能新規追加</h2>
                <form action="{{ action('Admin\ModeController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">メーカー名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="company-id" value="{{ old('company-id') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">デバイス種類</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="device_id" value="{{ old('device_id') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">種類</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">区分</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="division_id" value="{{ old('division_id') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">詳細説明</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">添付画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection