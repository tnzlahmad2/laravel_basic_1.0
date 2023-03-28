<h1>delete user</h1>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Id</th>
        <th>Operations</th>
    </tr>
    @foreach ($members as $data)
    <tr>
        <td>{{ $data["name"] }}</td>
        <td>{{ $data["email"] }}</td>
        <th>{{ $data["id"] }}</th>
        <td>
            <a href="{{ route('member.delete', $data['id']) }}">delete</a>
            <a href="{{ route('member.edit', $data['id']) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
