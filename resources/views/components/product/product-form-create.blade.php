
<div class="col-4 mx-auto mt-5">
    <form method="POST" action="{{ url('products') }}">
        @csrf


        <label for="name">name</label>
        <input
            type="text"
            id="name"
            name="name"
            autocomplete="name"
            placeholder="Type your name"
            class="form-control
            @error('name') is-invalid @enderror"
            value="{{ old('name') }}"
            required
            aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        @error('name')
        <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
        @enderror



        <label for="name">details</label>
        <input
            type="text"
            id="details"
            name="details"
            autocomplete="details"
            placeholder="Type your year_of_manufacture"
            class="form-control
            @error('details') is-invalid @enderror"
            value="{{ old('details') }}"
            required
            aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        @error('details')
        <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
        @enderror

        <div class="form-group">

            <label for="cars">Choose a category:</label>
            <select name="category_id" id="category_id" >

                @foreach($categories as $category)
                    <option

                        value="{{$category->id}}">{{ $category->name}}</option>
                @endforeach
            </select>
            <br>

            <div class="form-group">

                <label for="cars">Choose a project:</label>
                <select name="project_id" id="project_id" >

                    @foreach($projects as $project)
                        <option

                            value="{{$project->id}}">{{ $project->name}}</option>
                    @endforeach
                </select>
                <br>






            </div>

            <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
