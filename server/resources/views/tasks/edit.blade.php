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
    <p>
        【タスク名】<input type="text" name="title" value="{{ $task->title}}">
    </p>
    <p>
        【タスク内容】<input type="text" name="body" value="{{ $task->body }}">
    </p>
    <input type="submit" value="edit">
</form>