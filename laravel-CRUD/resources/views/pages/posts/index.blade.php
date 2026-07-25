@extends("layouts.app")

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="card bg-light mb-3">
            <div class="card-body">
                <h4 class="text-primary"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                <small>Written on {{$post->created_at}}</small>
            </div>
        </div>
        @endforeach
    @else
        <p>No posts available.</p>
    @endif
@endsection