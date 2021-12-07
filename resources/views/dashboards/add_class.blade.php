@extends('layouts.dashboard')

@section('content')
<?php 

$i = 1;

?>

<div class="row">
    <div class="col-md-12">
        <h4 class="page-head-line">Manage Classes</h4>

    </div>
</div>


<div class="panel panel-default w-auto">
    <div class="panel-heading">
    </div>
      @csrf
       <div class="panel-body" style="margin-bottom: 200px;">
        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#create_fee" style="margin-bottom: 10px; float: right;" ><i class="fa fa-plus"></i> Add new class</a>

        <table class="table table-responsive-md table-responsive-sm table-responsive-lg table-responsive-xl" id="fee_structure_table">
          <thead class="active">
              <th class="table-secondary">S/NO</th>
              <th class="table-secondary">Class</th>
              <th class="table-secondary">Full Name</th>
              <th class="table-secondary">Action</th>
          </thead>
      
          <tbody>
              @if (!$classes->isEmpty())
              @foreach ($classes as $class )
              
                      <tr>
                          <td>{{ $i++ }}</td>                                      
                          <td>{{ $class->class_name }} </td>                                      
                          <td>{{ $class->full_name }} </td>                                                                                                                        
                                     
                          <td>
                            @php
                                
                            @endphp
                                  <button type="button" name="edit_fee{{$class->id}}" data-toggle="modal" data-target="#edit_fee" id="add_marks" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</button>
                                  <a name="deactivate" href="{{ route('class.destroyer', $class->id)}}" id="add_marks" class="btn btn-danger">Remove</a>

                          </td>
                       

                          <!-- modal for removing student marks from the database -->

<div class="container">
<div class="row">
<div class="col-xs-12 col-lg-12 col-xl-12">
  <div class="modal" id="edit_fee" tabindex="-1">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title pull-left">Edit class</h4>
                  <button class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">

                  <form action="/update_class" method="POST" name="edit_class_form">


                      <input type="hidden" name="id" value="{{$class->id}}"/>
                      

                  @csrf
                  <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group" id="from_div">
                            <label for="from">Name</label>
                            <input type="text" id="" class="form-control" name="class" value="{{$class->class_name}}" >
                            <div id=""></div>
                            </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group" id="fee_div">
                      <label for="fee">Full Name</label>
                      <input type="text" id="" class="form-control" name="full_name" value="{{$class->full_name}}" >
                      <div id=""></div>
                      </div>
  
                    </div>
                  </div>
              
                 
                  <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-warning" name="update">Update</button>
                              
                  </div>

              </form>
              </div>
          </div>
      </div>
  </div>

  
</div>
</div>
</div>
                  
</tr>
@endforeach
@else
<span class="text-danger">No records Found</span>
@endif

</tbody>
</table>

<div class="modal" id="create_fee" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title pull-left">New class</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <form action="/create_class" method="POST" name="create_class">


                    
                    <input type="hidden" name="status" value="not-paid"/>

                @csrf
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group" id="from_div">
                            <label for="from">Name</label>
                            <input type="text" id="" class="form-control" name="class" value="" >
                            <div id=""></div>
                            </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group" id="fee_div">
                      <label for="fee">Full Name</label>
                      <input type="text" id="" class="form-control" name="full_name" value="" >
                      <div id=""></div>
                      </div>
  
                    </div>
                  </div>
            
               
                <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success" name="update">Create</button>
                            
                </div>

            </form>
            </div>
        </div>
    </div>
</div>


       </div>

       
</div>
@endsection