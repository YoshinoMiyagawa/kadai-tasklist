@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
   
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>進行状況</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{$task->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('tasks.create', 'タスクの追加', [], ['class' => 'btn btn-primary']) !!}
    
    

@endsection