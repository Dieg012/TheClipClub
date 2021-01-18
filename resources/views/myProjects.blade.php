<x-app-layout>
    <div class="container-fluid">
    <div class="">
        @foreach($projects as $project)
            <form action="{{route('delete_project', $project->id)}}" method="post">
            @method('delete')
            @csrf
                <div>
                    <strong>{{$project->name}}</strong>
                    <p> <strong>Category</strong> {{$project->category}}</p>
                    <strong>Tags</strong>
                    @foreach ($project->tags as $tag)
                    <p>{{$tag->tag}}</p>
                    @endforeach
                    <p> <strong>Dectiption</strong> {{$project->description}}</p>
                    <div>
                        <strong>Needed artists</strong>
                        <p>{{$project->director}}</p>
                        <p>{{$project->actor}}</p>
                        <p>{{$project->technitian}}</p>
                        <p>{{$project->producer}}</p>
                        <p>{{$project->screenwriter}}</p>
                    </div>
                    <strong>Last update</strong>
                    <i>{{$project->updated_at}}</i>
                    
                </div>
                <div class="d-flex  justify-content-between">
                    <button type="submit" class="btn btn-danger" onclick="alert('sure?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
                            <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                        </svg>
                    </button>
            </form>
                @can('Admin')
                    <form action="{{route('delete_user', $project->user_id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="alert('sure?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                    </form>
                @endcan
            </div>
        @endforeach
    </div>
    </div>
</x-app-layout>