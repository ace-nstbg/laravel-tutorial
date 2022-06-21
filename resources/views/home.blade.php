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
            <img class="rounded-circle" src="/img/freecodecamplogo.jpg" alt="">
        </div>
        <div class="col-9">
            <div><h1>free code camp</h1></div>
            <div class="d-flex">
                <div style="padding-right:5px"><strong>153</strong> posts</div>
                <div style="padding-right:5px"><strong>23k</strong> followers</div>
                <div style="padding-right:5px"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together.
LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div><a href="#">www.freecodecamp.org</a></div>

        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img style="width:100px" class="w-100 pt-4" src="/img/cell1.jpg" alt="">
        </div>
        <div class="col-4">
            <img style="width:100px" class="w-100 pt-4" src="/img/cell2.jpg" alt="">
        </div>
        <div class="col-4">
            <img style="width:100px" class="w-100 pt-4" src="/img/cell3.jpg" alt="">
        </div>
    </div>

</div>
@endsection
