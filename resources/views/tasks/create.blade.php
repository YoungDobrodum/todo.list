@extends('layouts.app')

@section('content')



    @include('common.errors')

        <form action="{{ route('task.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Name task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task" class="form-control" value="{{old('name')}}">
                </div>
            </div>

            <div class="form-group" style="margin-top: 10px;">
                <div class="col-sm-offset-3 col-sm-6">
                    <button class="btn btn-primary">
                        <i class="fa fa-plus"></i> Create
                    </button>
                </div>
            </div>
        </form>
@endsection
