{{-- Layout and design by WhileD0S <https://vk.com/whiled0s>  --}}
@extends('layouts.shop')

@section('title')
    {{ $news->title }}
@endsection

@section('content')
    <div id="content-container">
        <div class="z-depth-1 content-header text-center">
            <h1>{{ $news->title }}</h1>
        </div>
        <div class="product-container">
            <div class="card card-block f-card">
                <p class="card-text">
                    {!! $news->content !!}
                </p>
                <hr>
                <div class="row">
                    <div class="col-6 text-left">
                        <i class="fa fa-user"></i>
                        {{ $news->author->username }}
                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-calendar"></i>
                        {{ $news->created_at }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
