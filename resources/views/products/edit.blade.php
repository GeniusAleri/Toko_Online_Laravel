<h1>Form Edit Product</h1>

<form action="/products/{{ $product->id }}" method="post">
    @method('put')
    @csrf
    Nama : <input type="text" name="name" value="{{ $product->name }}"> <br>
    Deskripsi : <input type="text" name="description" value="{{ $product->description }}"> <br>
    Harga : <input type="text" name="price" value="{{ $product->price }}"> <br>
    Image : <input type="text" name="image_url" value="{{ $product->image_url }}"> <br>
    <input type="submit" value="Simpan">
</form>
