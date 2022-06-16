@if (Auth::id() == $micropost->user_id)
    {!! Form::open(['route' => ['micropost.edit', $micropost->id], 'method' => 'get']) !!}
    {!! Form::button('<i class="fas fa-edit edit1"></i>', ['class' => "btn btn-sm", 'type' => 'submit']) !!}
    {!! Form::close() !!}
@endif