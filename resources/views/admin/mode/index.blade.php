{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'デバイス機能一覧')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
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
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">メーカー名</th>
                                <th width="10%">デバイス種類</th>
                                <th width="20%">区分</th>
                                <th width="20%">タイトル</th>
                                <th width="40%">説明</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $modes)
                                <tr>
                                    <th>{{ $modes->id }}</th>
                                    <td>{{ \Str::limit($modes->title, 100) }}</td>
                                    <td>{{ \Str::limit($modes->body, 10000) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection