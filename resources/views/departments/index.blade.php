@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">All Departments</h1>
    </div>
</div>
<?php $i = 1;
?>
 

<div class="panel panel-primary w-auto">
    <div class="panel-heading">
      List of all Departments
    </div>
       <div class="panel-body">
 

            

           
           
           <table class="table table-hover table-responsive-sm table-responsive-md responsive-lg table-responsive-xl " id="students_deatils_table">
                   <thead class="active">
                       <th width="5%">#NO</th>
                       <th>Department Name</th>
                       <th>Abbreviation</th>
                       <th>Created At</th>
                       
                   </thead>

                   <tbody>

                       @if (!$students->isEmpty())
                           @foreach ($students as $student)
                               <tr>
                                   <td>{{$i++}}</td>
                                   
                                   <td>{{$student->name}}</td>
                                   <td>{{$student->abbr}}</td>
                                  
                                   <td>{{$student->created_at}}</td>
                                   
                                   
                               </tr>
                           @endforeach
                       @endif
                   </tbody>
           </table>
        



          
       </div>
</div>

                
    
@endsection