@if($errors->any())
    

        <script>
               swal({   title: "All Fields Are Required!",   text: "@foreach($errors->all() as $error) {{$error}},  @endforeach",   type: "warning",   confirmButtonText: "Cool" });
        </script>
   
@endif
