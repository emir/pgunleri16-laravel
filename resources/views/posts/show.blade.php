@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>

                <p>{{ $post->body }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
