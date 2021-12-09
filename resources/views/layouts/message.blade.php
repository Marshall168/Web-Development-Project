@if(count($errors) > 0)
    <div class="">
        <div class="col-md-4 cold-md-offset-4 text-red-600 text-center">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>

    </div>
@endif
@if(Session::has('message'))
    <div class="">
        <div class="col-md-4 cold-md-offset-4 text-green-600 text-center">
            {{Session::get('message')}}
        </div>

    </div>
@endif