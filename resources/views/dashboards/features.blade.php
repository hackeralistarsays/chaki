@extends('layouts.dashboard')

@section('content')
<?php 

$i = 1;

?>

<div class="row">
    <div class="col-md-12">
        <h4 class="page-head-line">Manage Features</h4>

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
              <th class="table-secondary">Feature</th>
              <th class="table-secondary">Value</th>
              <th class="table-secondary">State</th>
              <th class="table-secondary">Action</th>
          </thead>
      
          <tbody>
              @if (!$features->isEmpty())
              @foreach ($features as $class )
              
                      <tr>
                          <td>{{ $i++ }}</td>                                      
                          <td>{{ $class->feature }} </td>                                      
                          <td>{{ $class->value }} </td>                                                                                                                        
                          <td>
                            @if ($class->state == 'active')
                                <span class="badge badge-primary">{{$class->state}}</span>
                                @else
                                <span class="badge badge-danger">{{$class->state}}</span>
                                
                            @endif
                          </td>                                                                                                                        
                                     
                          <td>
                            
                            @if ($class->state == 'inactive')
                                
                            <a name="activate" href="{{ route('feature.activate', $class->id)}}" id="add_marks" class="btn btn-success">Activate</a>
                            @else
                            <a name="deactivate" href="{{ route('feature.deactivate', $class->id)}}" id="add_marks" class="btn btn-danger">Deactivate</a>
                                
                            @endif

                          </td>
                       

                          <!-- modal for removing student marks from the database -->

<div class="container">
<div class="row">
<div class="col-xs-12 col-lg-12 col-xl-12">
  <div class="modal" id="edit_fee" tabindex="-1">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title pull-left">Edit feature</h4>
                  <button class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">

                  <form action="/update_feature" method="POST" name="edit_feature_form">


                      <input type="hidden" name="id" value="{{$class->id}}"/>
                      

                  @csrf
                  <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group" id="from_div">
                            <label for="from">Feature Name</label>
                            <input type="text" id="" class="form-control" name="feature" value="{{$class->feature}}" >
                            <div id=""></div>
                            </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group" id="fee_div">
                      <label for="fee">Value</label>
                      <input type="text" id="" class="form-control" name="value" value="{{$class->value}}" >
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
            <h4 class="modal-title pull-left">Add feature</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <form action="/create_feature" method="POST" name="create_feature">


                    
                    

                @csrf
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group" id="from_div">
                            <label for="from">Feature Name</label>
                            <input type="text" id="" class="form-control" name="feature" value="" >
                            <div id=""></div>
                            </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group" id="fee_div">
                      <label for="fee">Value</label>
                      <input type="text" id="" class="form-control" name="value" value="" >
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