<h1>タスク内容</h1>
<hr>
<p>
    【タスク名】{{ $task->title }}
</p>
<p>
    【内容】{{ $task->body }}
</p>
<hr>
<a href="/tasks/{{ $task->id }}/edit"><button>edit task</button></a>
