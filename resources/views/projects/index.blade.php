@extends('projects._template.app')

@section('content')

    <h2>Projects</h2>

    @if ( !$projects->count() )
        You have no projects
    @else
        <ol class="list-group">
            @foreach( $projects as $project )
                <li class="list-group-item">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                    <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                    {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ol>
    @endif

    <p>
        {!! link_to_route('projects.create', 'Create Project' , array($project->slug),array('class' => 'btn btn-primary')) !!}
    </p>
@endsection
