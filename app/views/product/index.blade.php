@extends('layout.main')
@section('content')
<a href="{{ route('add') }}" >thêm</a>
<br>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Product name</th>
        <th>Giá</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($products as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->ten_sp }}</td>
                <td>{{ $p->gia }}</td>
                <th>
                    <a href="{{ route('edit/'.$p->id) }}">Sửa</a>
                    <a href="{{ route('delete/'.$p->id) }}">Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
