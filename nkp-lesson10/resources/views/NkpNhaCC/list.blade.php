<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhà cung cấp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sách nhà cung cấp</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã nhà cung cấp</th>
                    <th>Tên nhà cung cấp</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>Chức năng<th>
                </tr>
            </thead>
            <tbody>
                @forelse ($nkpNhaCCs as $item)
                <tr>
                    <td>1</td>
                    <td>{{$item->nkpMaNCC}}</td>
                    <td>{{$item->nkpTenNCC}}</td>
                    <td>{{$item->nkpDiaChi}}</td>
                    <td>{{$item->nkpemail}}</td>
                    <td>{{$item->nkpDienThoai}}</td>
                    <td>
                        View / edit / delete
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="7">Chưa có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
</body>
</html>