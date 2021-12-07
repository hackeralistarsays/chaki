@extends('layouts.dashboard')

@section('content')
<?php 

$i = 1;

?>

<div class="row">
    <div class="col-md-12">
        <h4 class="page-head-line">Manage Payments</h4>

    </div>
</div>


<div class="panel panel-default w-auto">
    <div class="panel-heading">
    </div>
      @csrf
       <div class="panel-body" style="margin-bottom: 200px;">
        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#create_fee" style="margin-bottom: 10px; float: right;" ><i class="fa fa-plus"></i> Add new Payment</a>

        <table class="table table-responsive-md table-responsive-sm table-responsive-lg table-responsive-xl" id="fee_structure_table">
          <thead class="active">
              <th class="table-secondary">S/NO</th>
              <th class="table-secondary">From</th>
              <th class="table-secondary">To</th>
              <th class="table-secondary">Type</th>
              <th class="table-secondary">Amount</th>
              <th class="table-secondary">Status</th>
              <th class="table-secondary">Action</th>
          </thead>
      
          <tbody>
              @if (!$payments->isEmpty())
              @foreach ($payments as $payment )
              
                      <tr>
                          <td>{{ $i++ }}</td>                                      
                          <td>{{ $payment->from }} </td>                                      
                          <td>{{ $payment->to }} </td>                                                                                   
                          <td>{{ $payment->type }} </td>                                      
                          <td>{{ $payment->amount }} </td>                                      
                          <td>{{ $payment->status }} </td>                                      
                          <td>
                            @php
                                
                            @endphp
                                  <button type="button" name="edit_fee{{$payment->id}}" data-toggle="modal" data-target="#edit_fee" id="add_marks" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</button>
                                  <a name="pay_fee" href="{{ route('admin.payment', $payment->id)}}" id="add_marks" class="btn btn-success"> <i class="fa fa-dollar-sign"></i> pay</a>

                          </td>
                       

                          <!-- modal for removing student marks from the database -->

<div class="container">
<div class="row">
<div class="col-xs-12 col-lg-12 col-xl-12">
  <div class="modal" id="edit_fee" tabindex="-1">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title pull-left">Edit Payment</h4>
                  <button class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">

                  <form action="/update_payment" method="POST" name="edit_payment_form">


                      <input type="hidden" name="id" value="{{$payment->id}}"/>
                      <input type="hidden" name="status" value="not-paid"/>

                  @csrf
                  <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group" id="from_div">
                            <label for="from">From</label>
                            <input type="date" id="" class="form-control" name="from" value="{{$payment->from}}" >
                            <div id=""></div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group" id="to_div">
                      <label for="to">To</label>
                      <input type="date" id="" class="form-control" name="to" value="{{$payment->to}}" >
                      <div id=""></div>
                      </div>
  
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group" id="type_div">
                            <label for="type">Payment Type</label>
                            
                            <select class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="type">
                              @foreach ($terms as $term)
                                  <option value="{{ $term->type }}">{{ $term->type }}</option>
                              @endforeach
                          </select>
                            <div id=""></div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group" id="fee_div">
                      <label for="fee">Amount</label>
                      <input type="number" id="" class="form-control" name="fee" value="{{$payment->amount}}" >
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
            <h4 class="modal-title pull-left">New Payment</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <form action="/create_payment" method="POST" name="create_payment">


                    
                    <input type="hidden" name="status" value="not-paid"/>

                @csrf
                <div class="row">

                  <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group" id="from_div">
                          <label for="from">From</label>
                          <input type="date" id="" class="form-control" name="from" value="" >
                          <div id=""></div>
                          </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group" id="to_div">
                    <label for="to">To</label>
                    <input type="date" id="" class="form-control" name="to" value="" >
                    <div id=""></div>
                    </div>

                  </div>
                </div>
                <div class="row">

                  <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group" id="type_div">
                          <label for="type">Payment Type</label>
                          <select class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="type">
                            @foreach ($terms as $term)
                                <option value="{{ $term->type }}">{{ $term->type }}</option>
                            @endforeach
                        </select>
                         
                          <div id=""></div>
                          </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group" id="fee_div">
                    <label for="fee">Amount</label>
                    <input type="number" id="" class="form-control" name="fee" value="" >
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