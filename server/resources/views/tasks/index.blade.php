@if (count($errors) > 0)
    <div>
        <P>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>タスク一覧</h1>
<ul type="none">
    @foreach ($tasks as $task)
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            <input type="submit" value="delete" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    @endforeach
</ul>
<hr>

<h1>タスク追加</h1>
<form action="/tasks" method="post">
    @csrf
    <dl>
        <dt><label for="title">タスク名</label></dt>
        <dt><input type="text" name="title" value="{{ old('title') }}"></dt>
        <dt><label for="body">タスク内容</label></dt>
        <dt><textarea name="body" id="" cols="30" rows="1">{{ old('body') }}</textarea></dt>
    </dl>
    <input type="submit" value="create">
</form>