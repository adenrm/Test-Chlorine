    <h1>Edit Produk</h1>
    <form>
        @method('put')
        @csrf
        <a href="{{ route('category') }}">Kembali</a>
        <input type="hidden" name="id" value="{{ $category->id }}">
        <div class="form-group">
            <label>Name</label>
            <input disabled type="text" name="name" id="" value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <label>Publish</label>
            <input disabled type="text" name="is_publish" id="" value="{{ $category->is_publish == 1 ? 'Yes' : 'No' }}">
        </div>
    </form>