@extends('layouts.dashboard')

@section('content')

<div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Unit Details </h4> 
            <a href="/all_courses"><i class="fa fa-arrow-left mr-2" ></i>Back</a>

    
        </div>
    </div>
    
    
    <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#bio_data">Unit Details</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#teaching_classes">Course Units</a>
            </li>
                 
    </ul>

          <div style="margin-top: 10px;">
            <div>

            @if ( Session::get('updated_successfully') != null)
    
            <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>SUCCESS</strong> : {{ Session::get('updated_successfully')}}
            </div>
        
            @endif
        </div>   
    
    <div>
            @if ( Session::get('name_check' ) != null)
        
            <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Failed</strong> : {{ Session::get('name_check')}}
            </div>
        
            @endif
        </div>    
    
         <div>
            @if ( Session::get('code_check') != null)
        
            <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Failed</strong> : {{ Session::get('code_check')}}
            </div>
        
            @endif
        </div>    
    
         <div>
            @if ( Session::get('email_crash') != null)
        
            <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Failed</strong> : {{ Session::get('email_crash')}}
            </div>
        
            @endif
        </div>  

        <div>
            @if ( Session::get('success') != null)

            <div class="alert alert-success">
                    <strong>Success</strong> : {{ Session::get('success')}}
            </div>
    
            @endif
</div>

<div>
            @if ( Session::get('responsibility_added_successfully') != null)

            <div class="alert alert-success">
                    <strong>Success</strong> : {{ Session::get('responsibility_added_successfully')}}
            </div>
    
            @endif
</div>

<div>
            @if ( Session::get('special_role_removed') != null)

            <div class="alert alert-success">
                    <strong>Success</strong> : {{ Session::get('special_role_removed')}}
            </div>
    
            @endif
</div>

<div>
            @if ( Session::get('responsibility_removed') != null)

            <div class="alert alert-success">
                    <strong>Success</strong> : {{ Session::get('responsibility_removed')}}
            </div>
    
            @endif
</div>

<div>
@if ( Session::get('class_taken') != null)

<div class="alert alert-danger">
        <strong>Failed</strong> : {{ Session::get('class_taken')}}
</div>

@endif
</div>

<div>
@if ( Session::get('teaching_class_successful') != null)

<div class="alert alert-success">
        <strong>Success</strong> : {{ Session::get('teaching_class_successful')}}
</div>

@endif
</div>

<div>
@if ( Session::get('teacher_class_withdrawn') != null)

<div class="alert alert-success">
        <strong>Success</strong> : {{ Session::get('teacher_class_withdrawn')}}
</div>

@endif
</div>


          </div>

          <div style="margin-top: 20px;">

          <div class="tab-content">
               
                <div id="teaching_classes" class="tab-pane container fade">
                     
                     <div class="panel panel-primary w-auto" >
                             <div class="panel-heading">
                               Courses Units
                             </div>                    
                             <div class="panel-body">
                                @if (!$units->isEmpty())

                                    <button style="float:right; margin-bottom: 10px;" type="button" id="{{$id}}" name="addButton" data-toggle="modal" data-target="#add_teachingClass_modal{{$id}}" class="btn btn-success">Add</button>
                                        
                                @endif
                               
                                <table class="table table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl " id="teaching_classes_table" style="margin-top: 30px;">
                                        <thead>
                                                <th>S/NO</th>
                                                <th>Unit Name</th>
                                                <th>Unit Code</th>
                                                <th>C.F</th>
                                                <th>Year</th>
                                                <th>Semester</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 $j = 1;
                                            ?>
                                                @if (!$units->isEmpty())
                
                                                @foreach ($units as $unit)
                                                <tr>
                                                    <td><?php  echo $j++ ?></td>
                                                    <td>{{ $unit->unit_name}}</td>
                                                    <td>{{ $unit->code}}</td>
                                                    <td>{{ $unit->qualification}}</td>
                                                    <td>{{ $unit->year}}</td>
                                                    <td>{{ $unit->semester}}</td>
                                                    <td><button id="{{$unit->id}}_subject1" name="remove_button" data-toggle="modal" data-target="#remove_teaching_class_modal_subject1{{$unit->id}}" class="btn btn-danger">Remove</button></td>
                                                </tr>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-lg-12 col-xl-12">
                                                                <div class="modal" id="remove_teaching_class_modal_subject1{{$unit->id}}" tabindex="-1">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title pull-left" style="color: red;">Delete The Unit</h4>
                                                                                <button class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="/removeTeachingClassSubject1" method = "POST">
                                                                                @csrf
                                                                                <input type="hidden" name="id" value='{{$unit->id}}'/>
                                                                                <input type="hidden" name="course_id" value="{{$unit->id}}"/>
                                                                                <div class="row">
                                                                                    <p>Are you sure you want to remove this unit from the unit list??</p>                                     
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-success" data-dismiss="modal">NO, Cancel</button>
                                                                                            <input type="submit" class="btn btn-danger" value="Yes, Remove"></input>
                                                                                </div>
                                                                                </form>	
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    
                                                    
                
                                                @endforeach      
                                                @endif
                                                
                      
                                                
                                                
                                        </tbody>
                                </table>
                                
                                @if ($units->isEmpty())
                <p>The Course has not been assigned any units. Click <a id="{{$id}}" href="#" data-toggle="modal" data-target="#add_teachingClass_modal{{$id}}">here</a> to add a special unit.</p>
                    
                @endif
      
                          <div class="container">
                                      <div class="row">
                                          <div class="col-xs-12 col-lg-12 col-xl-12">
                                              <div class="modal" id="add_teachingClass_modal{{$id}}" tabindex="-1">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h4 class="modal-title pull-left">Add A new Unit</h4>
                                                              <button class="close" data-dismiss="modal">&times;</button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <form action="/more/units" method = "POST" name="teachingClasses_form">
                                                              @csrf
                                                              <input type="hidden" name="course_id" value='{{$id}}'/>
                                                              <div class="row">
                                                                  <div class="col-md-8">
                                                                      <div class="form-group" id="unit_name_div">
                                                                          <label for="unit_name">Unit Name</label>
                                                                          <input type="text" name="unit_name" id="unit_name" class="form-control">
                                                                      </div>
                                                                  </div>

                                                                  <div class="col-md-4">

                                                                      <div class="form-group" id="code_div">
                                                                          <label for="code">Unit code</label>
                                                                          <input type="text" name="code" id="code" class="form-control">
                                                                      </div>
                                                                  </div>

                                                              </div>
                                                              <div class="row">
                                                                     
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" id="cf_div">
                                                                                <label for="class_cf">C.F</label>
                                                                                <input type="text" name="cf" id="cf" class="form-control">
                                                                           <div id="cf_error"></div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" id="year_div">
                                                                          <label for="year">Year</label>
                                                                          <input type="number" name="year" id="year" class="form-control">
                                                                            <div id="year_error"></div>
  
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" id="semester_div">
                                                                          <label for="semester">Semester</label>
                                                                          <input type="number" class="form-control" name="semester" id="semester">
                                                                            <div id="semester_error"></div>
  
                                                                        </div>
                                                                    </div>
                                                               <span id="availability"><span>
                                                                                                     
                                                              </div>
                                                              <div class="modal-footer">
                                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">NO, Cancel</button>
                                                                          <input type="submit" class="btn btn-success" onclick="return validateTeacherClasses()" value="Add"></input>
                                                              </div>
                                                              </form>	
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                    
                              

                                
                             </div>

                             </div>
                     </div>
                </div>
          </div>


	
@endsection