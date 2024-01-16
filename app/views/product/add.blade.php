<form action="{{ route('add-p')}}" method="post" >
        tên sản phẩm 
        <input type="text" name="ten_sp" width="100%">
        <br>
        giá
        <input type="number" name="gia" width="100%">
        <br>
        <input type="submit" value="add" name="add">
    </form>