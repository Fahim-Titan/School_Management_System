@foreach($lectures as $lecture)
    <a href="{{asset('lectures/'.$lecture->file)}}">{{$lecture->file}}</a>
    @endforeach