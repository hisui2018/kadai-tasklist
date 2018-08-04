@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

    <p>ステータス: {{ $task->status }}</p>
    <p>メッセージ：{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
@endsection