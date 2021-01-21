<x-app-layout>
    <div id="ProjectContainer" class="d-flex justify-content-around row">
        @foreach($projects as $project)
        <div id="project" class="bg-white border border-secondary col-5  mt-2 p-2 rounded">
            <form action="{{route('delete_project', $project->id)}}" method="post">
            @method('delete')
            @csrf
                <div>
                    <h3 class="text-center text-primary">{{$project->name}}</h3>
                    <strong>{{trans('messages.category')}}</strong> 
                    <br>
                    {{$project->category}}
                    <br>
                    <strong>{{trans('messages.tag')}}</strong>
                    <br>
                        @foreach ($project->tags as $tag)
                        <a href="">#{{$tag->tag}}</a> 
                        @endforeach
                    <br>
                        <strong>{{trans('messages.needArtists')}}</strong>
                        <br>
                        @if ($project->director != null)
                            {{trans('messages.producers')}}
                        @endif
                        @if ($project->actor != null)
                            {{trans('messages.actor')}}
                        @endif
                        @if ($project->technitian != null)
                            {{trans('messages.technitians')}}
                        @endif
                        @if ($project->producer != null)
                            {{trans('messages.producers')}}
                        @endif
                        @if ($project->screenwriter != null)
                            {{trans('messages.writers')}}
                        @endif
                        <br>
                        <strong>{{trans('messages.description')}}</strong>
                        <p class="text-justify">
                        {{$project->description}}
                        </p>
                        <i class="d-flex justify-content-end">{{$project->updated_at}}</i>
                </div>
                <div>
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
        </div>
    @endforeach
    </div>
</x-app-layout>