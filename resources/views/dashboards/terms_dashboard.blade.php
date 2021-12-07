@extends('layouts.dashboard')

@section('content')
<?php 

$i = 1;

?>

<div class="row">
    <div class="col-md-12">
        <h4 class="page-head-line">Manage Payment Terms</h4>

    </div>
</div>


<div class="panel panel-default w-auto">
    <div class="panel-heading">
    </div>
      @csrf
       <div class="panel-body" style="margin-bottom: 200px;">
        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#create_fee" style="margin-bottom: 10px; float: right;" ><i class="fa fa-plus"></i> Add new term</a>

        <table class="table table-responsive-md table-responsive-sm table-responsive-lg table-responsive-xl" id="fee_structure_table">
          <thead class="active">
              <th class="table-secondary">S/NO</th>
              <th class="table-secondary">Type</th>
              <th class="table-secondary">Grace Period</th>
              <th class="table-secondary">Description</th>
              <th class="table-secondary">Action</th>
          </thead>
      
          <tbody>
              @if (!$terms->isEmpty())
              @foreach ($terms as $term )
              
                      <tr>
                          <td>{{ $i++ }}</td>                                                                                                                       
                          <td>{{ $term->type }} </td>                                      
                          <td>{{ $term->grace_period }} </td>                                      
                          <td>{{ $term->description }} </td>                                      
                          <td>
                            @php
                                
                            @endphp
                                  <button type="button" name="edit_fee{{$term->id}}" data-toggle="modal" data-target="#edit_fee" id="add_marks" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</button>
                                 

                          </td>
                       

                          <!-- modal for removing student marks from the database -->

<div class="container">
<div class="row">
<div class="col-xs-12 col-lg-12 col-xl-12">
  <div class="modal" id="edit_fee" tabindex="-1">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title pull-left">Edit term</h4>
                  <button class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">

                  <form action="/update-term" method="POST" name="edit_term_form">


                      <input type="hidden" name="id" value="{{$term->id}}"/>
                      

                  @csrf
                  <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group" id="from_div">
                            <label for="from">Type</label>
                            <input type="text" id="" class="form-control" name="type" value="{{$term->type}}" >
                            <div id=""></div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group" id="to_div">
                      <label for="to">Grace Period</label>
                      <input type="number" id="" class="form-control" name="period" value="{{$term->grace_period}}" >
                      <div id=""></div>
                      </div>
  
                    </div>
                  </div>
                  
  
                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group" id="type_div">
                            <label for="type">Description</label>
                            <input type="text" id="" class="form-control" name="description" value="{{$term->description}}" >
                            <div id=""></div>
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
            <h4 class="modal-title pull-left">Add New Term</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <form action="/create-term" method="POST" name="create_term">


                    
                    

                @csrf
                <div class="row">

                  <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group" id="from_div">
                          <label for="from">Type</label>
                          <input type="text" id="" class="form-control" name="type" value="" >
                          <div id=""></div>
                          </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group" id="to_div">
                    <label for="to">Grace Period</label>
                    <input type="number" id="" class="form-control" name="period" value="" >
                    <div id=""></div>
                    </div>

                  </div>
                </div>
                

                  <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-group" id="type_div">
                          <label for="type">Description</label>
                          <input type="text" id="" class="form-control" name="description" value="" >
                          <div id=""></div>
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