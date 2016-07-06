@if(Session::has('esojtec.messages'))
    @foreach(Session::get('esojtec.messages') as $message)
        <div class="alert alert-{{$message['type']}}">
            {{$message['message']}}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        </div>
    @endforeach
@endif