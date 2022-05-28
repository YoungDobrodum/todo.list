@extends('layouts.app')

@section('content')

    <div class="panel-body">

    @include('common.errors')

        <form action="{{ route('task.update', $task->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Edit name task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task" class="form-control" value="{{old('name')?old('name'):$task->name}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Update
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
