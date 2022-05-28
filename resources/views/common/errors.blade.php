@if(count($errors)>0)
    <div class="alert alert-danger">
        <strong>Something went wrong, please try again</strong>

        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif