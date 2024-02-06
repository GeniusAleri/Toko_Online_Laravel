<h1>Form Tambah Product</h1>

<form action="/products/create" method="post">
    @csrf
    Nama : <input type="text" name="name"> <br>
    Deskripsi : <input type="text" name="description"> <br>
    Harga : <input type="text" name="price"> <br>
    Image : <input type="text" name="image_url"> <br>
    <input type="submit" value="Simpan">
</form>
