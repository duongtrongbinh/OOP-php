<form action="{{ route('add-p')}}" method="post" >
        name
        <input type="text" name="name" width="100%">
        <br>
        age
        <input type="number" name="age" width="100%">
        <br>
        <input type="submit" value="add" name="add">
    </form>