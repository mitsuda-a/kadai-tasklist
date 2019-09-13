@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if(count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id],[]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif 
    
    
    {!! link_to_route('tasks.create', '新規タスク', [], ['class' => 'btn btn-
    primary bg-info']) !!}
    
    
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Task List へ ようこそ　!</h1>
            {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-primary btn-lg']) !!}
        </div>
    </div>

@endsection