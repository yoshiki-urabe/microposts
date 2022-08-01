@extends('layouts.app')

@section('content')
    <h1>ユーザー設定</h1>
        <p class="mb-0">{!! nl2br(e($user_datas)) !!}</p>
@endsection