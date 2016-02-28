@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Post</div>

                <form action="{{ route('posts.store') }}" method="POST">
            
                    <div class="form-group">
                        <label for="exampleInputName2">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputName2">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputName2">Body</label>
                        <textarea name="body" class="form-control" id="exampleInputName2"></textarea>
                    </div>
                    
                    <input class="btn btn-warning" type="submit" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
