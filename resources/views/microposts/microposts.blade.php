@if (count($microposts) > 0)
    <ul class="list-unstyled">
        @foreach ($microposts as $micropost)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($micropost->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $micropost->user->name, ['user' => $micropost->user->id]) !!}
                        @if ($micropost->created_at == $micropost->updated_at)
                            <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                            @else
                                <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                                <span class="text-muted">[updated at {{ $micropost->updated_at }}]</span>
                        @endif
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>
                    </div>
                        <div class="container">
                            <div class="row">
                                @include('favorites.favorites_button')
                                @include('microposts.update_button')
                                @include('microposts.delete_button')
                            </div>    
                        </div>    
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $microposts->links() }}
@endif