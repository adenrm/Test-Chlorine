    <h1>Edit Produk</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <a href="{{ route('category') }}">Kembali</a>
    @if ($errors->any())
    <div class="text-red-500">{{ $errors }}</div>
    @endif
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="">
        </div>
        <div class="form-group">
            <label>Publish</label>
            <select name="is_publish" id="is_publish">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary"/>
    </form>