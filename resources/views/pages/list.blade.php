<h1>hammad</h1>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($members as $data)
    <tr>
        <td>{{ $data["name"] }}</td>
        <td>{{ $data["email"] }}</td>
    </tr>
    @endforeach
</table>

<div>{{$members->links()}}</div>

<style>
    .w-5 {
        display: none;
    }
</style>
