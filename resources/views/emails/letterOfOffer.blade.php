<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winterfel University</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<h3>{{$details['subject']}}</h3>
 <p style="text-align: left;">To: {{$details['first_name']}} {{$details['middle_name']}} {{$details['last_name']}}</p>
 <p style="text-align: left;">From: Winterfel University</p>
 <br>
 <p style="text-align: left;">Dear {{$details['first_name']}},</p>
    
    <p>
        @foreach($details['courses'] as $course)
            We want to congratulate you on your acceptance to a course in <strong>{{$course->name}}</strong> under department of {{$course->department}}, {{$details['p1']}}
        @endforeach
    </p>
    <p>{{$details['p2']}}</p>
    <p>{{$details['p3']}}</p>
    <a href="{{ route('home.page') }}"> <button style="border:1px solid green; color:green; width:200px; height:40px; font-size:18px; font-type:lucida">PROCEED</button></a>
    <br>
    
    <p>Sincerely,</p> 
    <p>Uhuru Ruto,</p>
    <p>Registrar.</p>
    
            
</body>
</html>