this is notice list page.
<br>
<br>
@foreach($notices as $notice)
    {{$notice->n_data}}<br>
    given at: {{$notice->date}}
    <br>
    <br>
    @endforeach