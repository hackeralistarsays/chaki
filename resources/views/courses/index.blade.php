@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">All Courses</h1>
    </div>
</div>
<?php $i = 1;


?>


<div class="panel panel-primary w-auto">
    <div class="panel-heading">
      List of all Courses
    </div>
       <div class="panel-body">

           <table class="table table-hover table-responsive-sm table-responsive-md responsive-lg table-responsive-xl " id="students_deatils_table">
                   <thead class="active">
                       <th width="5%">#NO</th>
                       <th>Picture</th>
                       <th>Name.</th>
                       <th>Department</th>
                       <th>HOD</th>
                       <th>Fees</th>
                       <th>Duration</th>
                       <th>Time</th>
                       <th>Students</th>
                       <th>Created At</th>
                   </thead>

                   <tbody>

                       @if (!$courses->isEmpty())
                           @foreach ($courses as $course)

                               <tr data-href='/course_details/{{$course->id}}'>
                                   <td>{{$i++}}</td>
                                   <td><img class="img-profile rounded-circle"  style="width: 40px; height: 40px;" src="/storage/{{ $course->photo }}" alt="Profile picture"> </td>
                                   <td>{{$course->name}}</td>
                                   <td>{{$course->department}}</td>
                                   <td>{{$course->professor}}</td>
                                   <td>{{ $course->feeitems->sum('amount') }}</td>
                                   <td>{{$course->duration}}</td>
                                   <td>{{$course->state}}</td>
                                   <td>{{ $students->where('course', $course->name)->count() }}</td>
                                   <td>{{$course->created_at->format('d-m-Y')}}</td>



                               </tr>
                           @endforeach
                       @endif
                   </tbody>
           </table>












       </div>
</div>



@endsection
