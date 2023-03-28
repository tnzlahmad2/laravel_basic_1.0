<h1>update</h1>

<form action="" method="post" class="form-example">
    @csrf
    <input type="text" name="name" id="name" value="{{ $data['name'] }}" />
    <input type="email" name="email" id="email" value="{{ $data['email'] }}" />
    <input type="hidden" name="id" id="id" value="{{ $data['id'] }}" />
    <button type="submit" name="add" id="add" value="add">update value</button>
</form>
