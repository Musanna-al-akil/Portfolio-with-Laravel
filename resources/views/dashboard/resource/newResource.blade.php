@extends('layouts.dashboardApp')

@section('title')New Resource | Abdullah un noman @endsection

@section('content')

<div class="content">
    <div class="fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h1>New Resource</h1>
                </div>
                @if(Session::has('success'))
                    <div class="alert alert-primary">{{Session::get('success')}}</div>
                @endif
                @if($errors->any())
                    <div>
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('createResource')}}" enctype = 'multipart/form-data'>@csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="title" class="form-control-label"><h5>Resource Title:</h5></label>
                                    <input id="normal-input" class="form-control" name="title" placeholder="Post Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tags"><h5>Select Tag:</h5></label>                  
                            <div> 
                                @foreach($tags as $tag)
                                <label class="btn checkbox"><b><input class="checkbox" type="checkbox" name="tags[]" value="{{$tag->id}}"><h5>{{$tag->tag_name}}</h5></b></label>
                                @endforeach
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="content" class="form-control-label"><h5>Resource Content:</h5></label>
                                        <textarea class="form-control" cols="30" name="content" id="editor" placeholder="Resource Content"  rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control-file" type="file"  name="image" placeholder="Image" >
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Create Resource</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>

</div>
        
</div>
@endsection
@section('jsd')
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
    @endsection