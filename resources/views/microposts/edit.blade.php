@extends('layouts.app')

@section('content')
   <h1>投稿編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($micropost, ['route' => ['micropost.update', $micropost->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('content', '変更後メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-light']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection