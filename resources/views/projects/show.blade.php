@extends('projects._template.app')

@section('content')
    <h2>{{ $project->name }}</h2>

    @if ( !$project->tasks->count() )
        Your project has no tasks.
    @else
        <ol class="list-group">
            @foreach( $project->tasks as $task )
                <li class="list-group-item">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
                    <a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a>

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                    {!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!}


                    {!! Form::close() !!}
                </li>
            @endforeach
        </ol>
    @endif

    <p>
        {!! link_to_route('projects.index', 'Back to Projects', array($project->slug),array('class' => 'btn btn-warning')) !!} |
        {!! link_to_route('projects.tasks.create', 'Create Task', array($project->slug),array('class' => 'btn btn-primary')) !!}
    </p>
@endsection