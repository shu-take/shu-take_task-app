<h1>タスク詳細</h1>
<dl>
    <dt>タスク名</dt>
    <dd>{{ $task->title }}</dd>
    <dt>タスク内容</dt>
    <dd>{{ $task->body }}</dd>
</dl>
<form action="/tasks/{{ $task->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" onclick="if(!confirm('削除しますか？')){return false};">
</form>
<hr>
<a href="/tasks"><button>index task</button></a>
<a href="/tasks/{{ $task->id }}/edit"><button>edit task</button></a>