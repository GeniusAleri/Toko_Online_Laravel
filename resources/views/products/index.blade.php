<h1>LIST PRODUCTS</h1>

<a href="/products/create">TAMBAH DATA</a>
<table>
    <tr>
        <th>No</th>
        <th>Name Product</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="/products/{{ $product->id }}/edit">Edit</a>
                <form action="/products/{{ $product->id }}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
