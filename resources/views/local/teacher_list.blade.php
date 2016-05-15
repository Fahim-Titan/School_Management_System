this is teacher list page
@foreach($teacher as $value)
    <img src="{{asset('teacher_images/'.$value->image)}}">
    {{$value->name}} <br>
    {{$value->qualification}}<br>
    {{--{{ HTML::image('img/picture.jpg', 'a picture', array('class' => 'thumb')) }}--}}
    {{--<img src="{{asset('public/teacher_images/2016-05-15-07-36-44-Capture.PNG')}}"><br>--}}
    {{--<img src="http://localhost:8000/public/teacher_images/2016-05-15-07-36-44-Capture.PNG">--}}
    {{$value->email}}<br>
    {{$value->phone_number}}
    @endforeach