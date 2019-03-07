@foreach($subjects as $sub)
    <p>{{$sub->teacher->name}}</p>
    <p>{{$sub->course->name}}</p>
@endforeach

@foreach($cquestions as $q)
    <p>{{$q->question}}</p>
@endforeach

@foreach($tquestions as $q)
    <p>{{$q->question}}</p>
@endforeach
{{-- 
@foreach($course as $c)
    <p>{{$c->subjects->id}}</p>
@endforeach --}}

 <p>{{$course->name}}</p>
<p>{{$sem}}</p>