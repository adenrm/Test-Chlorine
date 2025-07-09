    <h1>Edit Produk</h1>
    <form action="{{ route('category.update') }}" method="POST">
        @csrf
        <a href="{{ route('category') }}">Kembali</a>
    @if ($errors->any())
    <div class="text-red-500">{{ $errors }}</div>
    @endif
        <input type="hidden" name="id" value="{{ $category->id }}">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="" value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <label>Publish</label>
            <select name="is_publish" id="is_publish">
                <option value="0" {{ $category->is_publish == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ $category->is_publish == 1 ? 'selected' : '' }}>Yes</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary"/>
    </form>