<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
   
<div class="container">
    
    <form action="{{ route('admin.list') }}" method="POST" enctype="multipart/form-data">
        @csrf
           
                <table class="table table-bordered" id="dynamicTable">  
                    <tr>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Delete</th>
                    </tr>
                    <tr>  
                        <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>  
                        <td><input type="text" name="addmore[0][icon]" placeholder="Enter your Icon" class="form-control" /></td>  
                        <td><button type="submit" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr> 

                    @foreach ($request->addmore as $key => $value) 
                        <tr>
                        <td><input type="text" {{ $value['name'] }}  name="addmore[{{ $value['id'] }}][name]" placeholder="Enter your Name" class="form-control" /></td> <input type="hidden" value="{{ $value['id'] }}" name="addMore[{{ $value['id'] }}][id]" placeholder="Enter your Name" class="form-control" /></td> 
                        <td><input type="text" {{ $value['icon'] }} name="addmore[{{ $value['id'] }}][icon]" placeholder="Enter your Icon" class="form-control" /></td>  
                        <td><button type="submit" name="add" id="add" class="btn btn-success">Add More</button></td>
                    </tr>
                 
        </table> 
    
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
<script type="text/javascript">
        // var table = $('#dynamicTable').DataTable({
        //     responsive: true,
        //     ordering: true,
        //     processing: true,
        //     serverSide: true,
        //     ajax: {
        //         url: '{{ route('admin.amenities.datatables') }}',
        //         data: function(d) {
        //         }
        //     },
        //     columns: [{
        //             data: 'name',
        //             name: 'name'
        //         },
        //         {
        //             data: 'icon',
        //             name: 'icon'
        //         },
        //         {
        //             data: 'action',
        //             searchable: false,
        //             orderable: false
        //         }
        //     ],
        //     language: {
        //         // processing: '">'
        //     },
       // });



   
    var i = 0;
       
    ("#add").click(function(){   
        ++i;
        ("#dynamicTable").append('<tr><td><input type="text" {{ $value['name'] }} name="addMore['+i+'][name]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addMore['+i+'][icon]" placeholder="Enter your Icon" class="form-control" /></td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });
   
    $(document).on('click', '.btn_remove', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
@endsection
  
</body>
</html>