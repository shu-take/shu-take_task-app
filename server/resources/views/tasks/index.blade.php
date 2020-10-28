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
<hr>
<ul type="none">
    @foreach ($tasks as $task)
        <table>
            <td>
                <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            </td>
            <td>
                <form action="/tasks/{{ $task->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" onclick="if(!confirm('削除しますか？')){return false};">
                </form>
            </td>
        </table>
    @endforeach
</ul>
<hr>
<h1>タスク追加</h1>
<form action="/tasks" method="post">
    @csrf
    <p>
        【タスク名】<input type="text" name="title" value="{{ old('title') }}">
    </p>
    <p>
        【タスク内容】<input type="text" name="body" value="{{ old('body') }}">
    </p>
    <input type="submit" value="create task">
</form>