this is course list
{{--{{$courses}}--}}
@foreach($courses as $course)
    <h1>course name = jhakanaka;</h1>
{{--{{isset($value->sub_id1)}} taken by {{isset($value->t_id1)}}--}}
    {{--{{$course->sub_id1}}--}}
    @if($course->sub_id1 != 100 || NULL)
        {{$course->sub_id1}} is taken by {{$course->t_id1}}<br>
    @endif
    @if(!$course->sub_id2 != 100 || NULL)
        {{$course->sub_id2}} is taken by {{$course->t_id2}}<br>
    @endif
        @if(!$course->sub_id3 != 100 || NULL)
        {{$course->sub_id3}} is taken by {{$course->t_id3}}<br>
        @endif
        @if(!$course->sub_id4 != 100 || NULL)
        {{$course->sub_id4}} is taken by {{$course->t_id4}}<br>
        @endif
        @if(!$course->sub_id15 != 100 || NULL)
        {{$course->sub_id5}} is taken by {{$course->t_id5}}<br>
        @endif
        @if(!$course->sub_id6 != 100 || NULL)
        {{$course->sub_id6}} is taken by {{$course->t_id6}}<br>
        @endif
        @if(!$course->sub_id7 != 100 || NULL)
        {{$course->sub_id7}} is taken by {{$course->t_id7}}<br>
        @endif
        @if(!$course->sub_id8 != 100 || NULL)
        {{$course->sub_id8}} is taken by {{$course->t_id8}}<br>
        @endif
        @if(!$course->sub_id9 != 100 || NULL)
        {{$course->sub_id9}} is taken by {{$course->t_id9}}<br>
        @endif
        @if(!$course->sub_id10 != 100 || NULL)
        {{$course->sub_id10}} is taken by {{$course->t_id10}}<br>
        @endif
        @if(!$course->sub_id11 != 100 || NULL)
        {{$course->sub_id11}} is taken by {{$course->t_id11}}<br>
        @endif
        @if(!$course->sub_id12 != 100 || NULL)
        {{$course->sub_id12}} is taken by {{$course->t_id12}}<br>
        @endif
        @if(!$course->sub_id13 != 100 || NULL)
        {{$course->sub_id13}} is taken by {{$course->t_id13}}<br>
        @endif
        @if(!$course->sub_id14 != 100 || NULL)
        {{$course->sub_id14}} is taken by {{$course->t_id14}}<br>
        @endif
@endforeach

