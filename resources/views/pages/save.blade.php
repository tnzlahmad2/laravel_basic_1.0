<form action="add" method="post" class="form-example">
    @csrf
    <input type="text" name="name" id="name" value="name" />
    <input type="email" name="email" id="email" value="email" />
    <button type="submit" name="add" id="add" value="add">add</button>
</form>
