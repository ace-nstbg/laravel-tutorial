@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="p-3">
                        <img style="max-width:40px" class="rounded-circle w-100" src="{{ $post->user->profile->profileImage() }}" alt="">
                    </div>
                    <div>
                        <div style="font-weight:bold !important" >
                            <a href="/profile/{{ $post->user->id}}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <a href="#" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>                
                <p> <span style="font-weight:bold !important">
                    <a href="/profile/{{ $post->user->id}}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span> {{ $post->caption }}</p>
            </div>
        </div>
    </div>    
</div>
@endsection
