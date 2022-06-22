
<div class="col-4 mx-auto mt-5">
    <form method="POST" action="{{ url('products/' . $product->id) }}">
        @csrf
        @method(('PUT'))

        <div class="form-group">
            <label for="name">name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control
            @error('name') is-invalid @enderror"
                value="{{ $product->name}}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('name')
            <span class="invalid-feedback" role="alert">
 <strong>{{ $product->name }}</strong>
 </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">details</label>
            <input
                type="text"
                id="details"
                name="details"
                autocomplete="details"
                placeholder="Type your details"
                class="form-control
            @error('details') is-invalid @enderror"
                value="{{ $product->details}}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('details')
            <span class="invalid-feedback" role="alert">
 <strong>{{ $product->details }}</strong>
 </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cars">Choose a category:</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option
                        @if($product->category_id==$category->id)
                        selected
                        @endif
                        value="{{ $category->id }}">{{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cars">Choose a project:</label>
            <select name="project_id" id="project_id" class="form-control">
                @foreach($projects as $project)
                    <option
                        @if($product->project_id==$project->id)
                        selected
                        @endif
                        value="{{ $project->id }}">{{ $project->name }}
                    </option>
                @endforeach
            </select>
        </div>



        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
