@if (Auth::id() == $micropost->user_id)
    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
    {!! Form::button('<i class="fas fa-trash-alt trash1"></i>', ['class' => "btn btn-sm", 'type' => 'submit']) !!}
    {!! Form::close() !!}
@endif