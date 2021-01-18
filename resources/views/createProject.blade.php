<x-app-layout>
<div class="container-fluid">
<x-jet-validation-errors class="mb-4" />
        <form action="{{route('createProject', Auth::user()->id)}}" method="post">
        @csrf
            <div class="form-group">
                <label>Project name</label>
                <input type="text" class="form-control" name="name" maxlenght="20" required>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select a category</label>
                <select class="form-control" name="category" required>
                <option disabled selected value >Category</option>
                <option value="Film">Film</option>
                <option value="Short Film">Short Film</option>
                <option value="Music video">Music video</option>
                <option value="Photo shoot">Photo shoot</option>
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label>Project Tags</label>
                <input class="form-control" type="text" name="tags" aria-describedby="tagHelp">
                <small id="tagHelp" class="form-text text-muted">This will make easier for people to search your project</small>
            </div>
            <hr>
            <div>
                <label>Needed artists</label>
                <div class="form-group form-row">
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Director" name="director" id="director">
                        <label class="custom-control-label" for="director">Director</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Actor" name="actor" id="actor"> 
                        <label class="custom-control-label" for="actor">Actor</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Technitian" name="technitian" id="technitian">
                        <label class="custom-control-label" for="technitian">Technitian</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Producer" name="producer" id="producer">
                        <label class="custom-control-label" for="producer">Producer</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3">
                        <input class="custom-control-input" type="checkbox" value="Screenwriter" name="screenwriter" id="screenwriter">
                        <label class="custom-control-label" for="screenwriter">Screenwriter</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1">
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</x-app-layout>