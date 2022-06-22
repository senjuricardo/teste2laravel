
<div class="col-4 mx-auto mt-5">
    <form method="POST" action="{{ url('categories') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
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
        </div>

        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
