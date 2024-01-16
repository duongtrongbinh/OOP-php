<form action="{{ route('update')}}" method="post" >
        tên sản phẩm 
        <input type="text" name="ten_sp" width="100%" value='{{ $product->ten_sp}}'>
        <br>
        giá
        <input type="number" name="gia" width="100%" value='{{ $product->gia}}'>
        <br>
        <input type="submit" value="edit" name="edit">
        <input type="hidden" name="id" value='{{ $product->id}}'>
    </form>