@extends('welcome')    

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are You Sure???</h4>
      </div>
      <div class="modal-body">

       {!! Form::open([ 'method'  => 'delete', 'route' => [ 'photos.destroy', $photo->id,$photo->blog_id ] ]) !!}

            <button class="btn btn-lg btn-block btn-danger" type="submit">Yes, Delete Post!</button>

        {!! Form::close() !!}
      </div>

    </div>

  </div>
</div>
@section('content')

@if($errors->any())
  <script>
    swal({   title: 'You Missed Something!',   text: '@foreach($errors->all() as $error) {{$error}}  @endforeach',   type: 'error',   confirmButtonText: 'Cool' });   
</script>  





@endif

    {!! Form::model($photo,['method'=>'PATCH','action' => ['PhotosController@update',$photo->id]]) !!}


    <!-- Post single start -->
    <section class="module-small">
      <div class="container">
        <div class="col-md-8 col-md-offset-2" >
           <!-- Trigger the modal with a button -->
                            <a class=" btn btn-danger" data-toggle="modal" data-target="#myModal">Delete Post</a>

           <img class="col-md-12" src="{{asset($photo->path)}}">

<hr>

            {!! Form::label('Name','Name') !!}
            {!! Form::text('name',$photo->name,['class'=> 'form-control']) !!}

    	<hr> 	

           	 {!! Form::label('Caption','Caption') !!}
	        {!! Form::textarea('caption',$photo->caption,['class'=> 'form-control']) !!}

        <hr>




	    {!! Form::label('status','Status') !!}
            {!! Form::select('status', 
                [
                    '0' => 'Default', 
                    '1' => 'Thumbnail', 
                    '2' => 'Banner', 


                ],$photo->status, ['class'=>' selectpicker form-control']); 
            !!}
 <hr>
 <button type="submit" class="btn btn-success  btn-block col-md-12">Save New Post!</button>
    <hr>

<br></br>


     <form action="photo"
      class="dropzone"
      id="my-awesome-dropzone">

{{csrf_field()}}
</form>   </div>
    </div>
</div>

<div class="container">


<script src="{{ asset('assets/js/summernote.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script> 
    {!! Form::close() !!}
        </div><!-- .row -->
  
      </div>
    </div>
    <!-- Widgets end -->
  
    <!-- Divider -->
    <hr class="divider-d">   
<script>
    $(document).ready(function() {  
        $('#summernote').summernote({
            height: 500
        });
    });
</script>
    <!-- Divider -->
  @stop
