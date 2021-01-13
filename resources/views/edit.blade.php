
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>

    td{
        color: black!important;

    }
    th{
        color: black!important;

    }
    label{
        font-size: 25px!important;
    }
</style>
<body>


<div class="container">
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Chỉnh sửa đại lý phân phối </h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('edit',$agency->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên đại lý </label>
                    <input type="text" class="form-control" name="name" value="{{$agency->name}}" placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Điện thoại </label>
                    <input type="number" class="form-control" name="phone" value="{{$agency->phone}}" placeholder="Nhập số điện thoại">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$agency->email}}" placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label>Địa chỉ </label>
                    <input type="text" class="form-control" name="address" value="{{$agency->address}}" placeholder="Nhập địa chỉ">
                </div>
                <div class="form-group">
                    <label>Tên người quản lý</label>
                    <input type="text" class="form-control" name="managerName" value="{{$agency->managerName}}" placeholder="Nhập tên người quản lý">
                </div>
                <div class="form-group">
                    <label>Trạng thái</label>
                    <select name="status" id="status" >
                        <option value="Hoạt động">Hoạt động</option>
                        <option value="Ngừng hoạt động ">Ngừng hoạt động</option>
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Thay đổi </button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
</div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

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
