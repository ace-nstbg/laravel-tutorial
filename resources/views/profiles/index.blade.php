@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
    <div class="row pt-5" >
        <div class="col-3">
            <img class="rounded-circle w-100" src="{{ $user->profile->profileImage() }}" alt="">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <h1>{{ $user->username }}</h1>
                    <button class="btn btn-primary ml-4">Follow</button>
                </div>
                
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan                
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div style="padding-right:5px"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div style="padding-right:5px"><strong>{{ $user->posts->count() }}</strong> followers</div>
                <div style="padding-right:5px"><strong>{{ $user->posts->count() }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? ""}}</div>
            <div>{{ $user->profile->description ?? "" }}</div>
            <div><a href="#"> {{ $user->profile->url ?? 'N/A' }}</a></div>

        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img style="width:100px" class="w-100 pt-4" src="/storage/{{ $post->image }}" alt="">
            </a>
        </div>
        @endforeach
        <!-- <div class="col-4">
            <img style="width:100px" class="w-100 pt-4" src="/img/cell1.jpg" alt="">
        </div>
        <div class="col-4">
            <img style="width:100px" class="w-100 pt-4" src="/img/cell2.jpg" alt="">
        </div>
        <div class="col-4">
            <img style="width:100px" class="w-100 pt-4" src="/img/cell3.jpg" alt="">
        </div> -->
    </div>

</div>
@endsection
