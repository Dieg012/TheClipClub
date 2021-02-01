<x-app-layout>
<div class="container-fluid">
<x-jet-validation-errors class="mb-4" />
        <form name="projectForm" action="{{route('createProject', Auth::user()->id)}}" method="post">
        @csrf
            <div class="form-group">
                <label>{{trans('messages.projectName')}}</label>
                <input type="text" class="form-control" name="name" maxlenght="20" required>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlSelect1">{{trans('messages.catSelect')}}</label>
                <select class="form-control" name="category" required>
                <option disabled selected value >{{trans('messages.category')}}</option>
                <option value="Film">{{trans('messages.films')}}</option>
                <option value="Short Film">{{trans('messages.shortFilm')}}</option>
                <option value="Music video">{{trans('messages.musicVideo')}}</option>
                <option value="Photo shoot">{{trans('messages.photoShoot')}}</option>
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label>{{trans('messages.tag')}}</label>
                <input class="form-control" type="text" name="tags" aria-describedby="tagHelp">
                <small id="tagHelp" class="form-text text-muted">This will make easier for people to search your project</small>
            </div>
            <div class="form-group">
                <label for="coordinates">Coordinates</label>
                <input class="form-control" type="text" name="coordinates" id="coordinates">
                <a href="https://www.google.es/maps/preview" target="_black">Maps</a>
                <small id="coordinatesHelp" class="form-text text-muted">Right click on the wanted place and select the first option for getting the coordinates and the paste them here</small>
            </div>
            <hr>
            <div>
                <label>{{trans('messages.needArtists')}}</label>
                <div class="form-group form-row">
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Director" name="director" id="director">
                        <label class="custom-control-label" for="director">{{trans('messages.director')}}</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Actor" name="actor" id="actor">
                        <label class="custom-control-label" for="actor">{{trans('messages.actor')}}</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Technitian" name="technitian" id="technitian">
                        <label class="custom-control-label" for="technitian">{{trans('messages.tech')}}</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Producer" name="producer" id="producer">
                        <label class="custom-control-label" for="producer">{{trans('messages.producers')}}</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Screenwriter" name="screenwriter" id="screenwriter">
                        <label class="custom-control-label" for="screenwriter">{{trans('messages.writer')}}</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlFile1">{{trans('messages.image')}}</label>
                <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1">
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">{{trans('messages.description')}}</label>
                <textarea class="form-control" name="description" rows="3" required></textarea>
            </div>
            <button type="button" id="send" class="btn btn-primary">{{trans('messages.submit')}}</button>
        </form>
    </div>
    <script src="{{ asset('js/validations.js')}}"></script>
</x-app-layout>
