@extends('layouts.dashboardApp')

@section('title')New Feedback | Abdullah Un Noman | UI/UX Expert @endsection

@section('content')
<br>

<div class="content">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                           <h3 class="text-dark">New Post</h3>
                        </div>

                        @if(Session::has('success'))
                    <div class="alert alert-primary">{{Session::get('success')}}</div>
                        @endif

                        @if($errors->any())
                        <div >
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <form method="POST" action="{{route('createFeedbackSubmit')}}" enctype = 'multipart/form-data'>
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5 class="text-dark">Client Name</h5></label>
                                        <input id="normal-input" class="form-control" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5 class="text-dark">Client Title</h5></label>
                                        <input id="normal-input" class="form-control" name="title" placeholder="Client Title">
                                    </div>
                                </div>

                                
                            </div>
                             

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="placeholder-input" class="form-control-label"><h5 class="text-dark">Testimonial</h5></label>
                                        <textarea class="form-control" cols="30" name="discription" id="editor" placeholder="Testemonial"  rows="10"></textarea>
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
                            <button class="btn btn-success" type="submit">Create Post</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        
</div>
@endsection
@section('jsd')
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
    @endsection