    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="fas fa-heart favorite1"></i>', ['class' => "btn btn-sm", 'type' => 'submit']) !!}
        {!! Form::close() !!}
        @else
            {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
                {!! Form::button('<i class="far fa-heart favorite2"></i>', ['class' => "btn btn-sm", 'type' => 'submit']) !!}
            {!! Form::close() !!}
    @endif