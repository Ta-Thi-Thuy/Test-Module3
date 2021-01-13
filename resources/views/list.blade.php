<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách đại lý phân phối</h1>
            </div>

            <a class="btn btn-primary" href="{{route('show.create')}}">Thêm
                mới</a>
            <form  action="{{route('search')}}"   method="post">
                @csrf
                <input type="text" name="keyword" class="form-control search" placeholder=" Search...">

            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Mã số đại lý</th>
                    <th scope="col">Tên đại lý </th>
                    <th scope="col">Điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Tên người quản lý</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Chức năng</th>

                </tr>
                </thead>
                <tbody>
                @foreach($agencys as $key => $agency)

                    <tr>
                        <td>{{$agency->id}}</td>
                        <td>{{$agency->name}}</td>
                        <td>{{$agency->phone}}</td>
                        <td>{{$agency->email}}</td>
                        <td>{{$agency->address}}</td>
                        <td>{{$agency->managerName}}</td>
                        <td>{{$agency->status}}</td>

                        <td>
                            <a href="{{route('show.edit',$agency->id)}}" class="btn btn-info">Sửa</a>
                            <a href="{{route('delete',$agency->id)}}" class="btn btn-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            @if(Session::has('search_result'))
            @endif
            <div style="float: right;">{{ $agencys->links( "pagination::bootstrap-4") }}</div>

        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
