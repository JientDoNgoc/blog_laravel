@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('admin.create')}}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value ="{{$post['title']}}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value ="{{$post['content']}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                 {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection