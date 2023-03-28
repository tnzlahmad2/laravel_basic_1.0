<h1>crud</h1>

<table border="1">
    <tr>
        <th>Id</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
    </tr>
    @endforeach
</table>
