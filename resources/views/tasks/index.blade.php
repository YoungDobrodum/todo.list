@extends('layouts.app')

@section('content')

        @if(count($tasks) === 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            You don't have any tasks yet
        </div>
    </div>
        @endif

    @if(count($tasks)>0)
        <div class="container">
            <h3>Dashboard</h3>

            <div class="panel panel-default">


                <div class="panel-body">
                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        @foreach($tasks as $task)
                            <tbody>
                            <tr>
                                <td class="table-text">
                                    <div>{{$task->name}}</div>
                                </td>
                                <td>
                                    <div style="display: flex">
                                        <form action="{{route('task.edit', $task->id)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('GET')}}

                                            <button class="btn btn-secondary">Edit</button>
                                        </form>
                                        <form action="{{route('task.destroy', $task->id)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach

                    </table>

                </div>

            </div>
            @endif
            <a href="{{route('task.create')}}"><button class="btn btn-primary">Add new task</button></a>
        </div>


@endsection
