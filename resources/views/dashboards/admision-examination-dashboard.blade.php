@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">Applicants</h1>
    </div>
</div>
<?php $i = 1;
?>
 

<div class="panel panel-default w-auto">
    <div class="panel-heading">
      List of all Applicants
    </div>
       <div class="panel-body">
 

            

           
           
           <table class="table table-hover table-responsive-sm table-responsive-md responsive-lg table-responsive-xl " id="students_deatils_table">
                   <thead class="active">
                       <th width="5%">#NO</th>
                       <th>Full Name</th>
                       <th>ID NO</th>
                       <th>Email</th>
                       <th>Course Name</th>
                       <th>Department</th>
                       <th>Date</th>

                       
                   </thead>

                   <tbody>

                       @if (!$applicants->isEmpty())
                           @foreach ($applicants as $applicant)
                               <tr data-href='/applicant_details/{{$applicant->id_number}}'>
                                   <td>{{$i++}}</td>
                                   
                                   <td>{{$applicant->applicant_name}}</td>
                                   <td>{{$applicant->id_number}}</td>
                                   <td>{{$applicant->email}}</td>
                                   @foreach($courses->where('id',$applicant->course_id) as $course)
                                   <td>{{$course->name}}</td>
                                   <td>{{$course->department}}</td>
                                    @endforeach

                                   <td>{{$applicant->created_at}}</td>
                                   
                                   
                               </tr>
                           @endforeach
                       @endif
                   </tbody>
           </table>
        



          
       </div>
</div>

                
    
@endsection