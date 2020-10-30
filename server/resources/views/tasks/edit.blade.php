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

<h1>タスク編集</h1>
<form action="/tasks/{{ $task->id }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $task->id }}">
    <dl>
        <dt><label for="title">タスク名</label></dt>
        <dd><input type="text" name="title" value="{{ $task->title}}"></dd>
        <dt><label for="body">タスク内容</label></dt>
        <dd><textarea name="body" id="" cols="30" rows="1">{{ $task->body }}</textarea></dd>
    </dl>
    <input type="submit" value="update">
</form>
<hr>
<a href="/tasks"><button>index task</button></a>
<a href="/tasks/{{ $task->id }}"><button>show task</button></a>