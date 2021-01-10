
@foreach($projects as $project)
<form action="{{route('delete_project', $project->id)}}" method="post">
@method('delete')
@csrf
    <div>
        <h1>{{$project->name}}</h1>
        <p>{{$project->description}}
            
        </p>
        <i>{{$project->created_at}} </i>
        <i>{{$project->updated_at}}</i>
        <button type="submit">Delete</button>
    </div>
</form>
@endforeach