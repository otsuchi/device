{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

@section('title', 'デバイス機能一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>デバイス機能一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ModeController@add') }}" role="button" class="btn btn-primary">機能新規作成</a>
            </div>
                <form action="{{ action('Admin\ModeController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">メーカー名</label>
                        <div class="col-md-10">
                            {!! Form::select('cond_company_id', $companies,'',['placeholder' => '選択してください']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">デバイス種類</label>
                        <div class="col-md-10">
                            {!! Form::select('cond_device_id', $devices,'',['placeholder' => '選択してください']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">種類</label>
                        <div class="col-md-10">
                            {!! Form::select('cond_type', \App\Enums\ModesType::toSelectArray(),'',['placeholder' => '選択してください']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">区分</label>
                        <div class="col-md-10">
                            {!! Form::select('cond_division_id', $divisions,'',['placeholder' => '選択してください']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                    </div>
                        <label class="col-md-2">詳細説明</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_body" value="{{ $cond_body }}">
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
        </div>
        <div class="row">
            <div class="list-mode col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">メーカー名</th>
                                <th width="10%">デバイス種類</th>
                                <th width="20%">区分</th>
                                <th width="20%">タイトル</th>
                                <th width="40%">詳細説明</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($modes as $mode)
                                <tr>
                                   <td>{{ $mode->companies->name }}</td>
                                   <td>{{ $mode->devices->name }}</td>
                                   <td>{{ $mode->divisions->name }}</td>
                                   <td>{{ \Str::limit($mode->title, 100) }}</td>
                                   <td>{{ \Str::limit($mode->body, 10000) }}</td>
                                　 <td>
                                        <div>
                                            <a href="{{ action('Admin\ModeController@edit', ['id' => $mode->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\ModeController@delete', ['id' => $mode->id]) }}">削除</a>
                                        </div>
                                   </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection