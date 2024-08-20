<div>
Hello Im a blade template!
</div>

<div>
<h1>Tasks</h1>
    @forelse ($tasks as $task) 
        <a href="{{ route('task.show', ['id'=> $task->id])}}">{{$task->title}}</a>
    @empty
        <div>There are no tasks</div>
    @endforelse
</div>