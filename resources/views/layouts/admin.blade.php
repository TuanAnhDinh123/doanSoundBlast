<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundBlast Admin</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header>
        <h3 class="text-center mt-3">SOUND BLAST</h3>
        <h3 class="text-center mt-3">ADMIN</h3>
        <hr>
    </header>
    <div class="container row mx-auto">
        <div class="col-3">
            <ul class="list-group">
                <li class="list-group-item  pe-0">
                    <span class="fw_bold font-weight-bold">THỂ LOẠI</span>
                    <ul>
                        <a href="{{url('admin/add-cate')}}" class="text-decoration-none">
                            <li class="list-group-item border-0 adminSidebarTag">Thêm thể loại</li>
                        </a>
                        <a href="{{url('admin/list-cate')}}" class=" text-decoration-none">
                            <li class="list-group-item border-0 adminSidebarTag">Danh sách thể loại</li>
                        </a>
                    </ul>
                
                <li class="list-group-item fw_bold pe-0">CA SĨ
                    <ul>
                        <a href="{{url('admin/add-artist')}}" class=" text-decoration-none">
                            <li class="list-group-item border-0 adminSidebarTag">Thêm ca sĩ</li>
                        </a>
                        <a href="{{url('admin/list-artist')}}" class=" text-decoration-none">
                            <li class="list-group-item border-0 adminSidebarTag">Danh sách ca sĩ</li>
                        </a>
                    </ul>
                </li>

                <li class="list-group-item fw_bold pe-0">NHẠC SĨ
                    <ul>
                        <a href="{{url('admin/add-author')}}" class=" text-decoration-none">
                            <li class="list-group-item border-0 adminSidebarTag">Thêm nhạc sĩ</li>
                        </a>
                        <a href="{{url('admin/list-author')}}" class=" text-decoration-none">
                            <li class="list-group-item border-0 adminSidebarTag">Danh sách nhạc sĩ</li>
                        </a>
                    </ul>
                </li>

                <li class="list-group-item fw_bold pe-0">BÀI HÁT
                    <ul>
                        <a href="{{url('admin/add-song')}}" class=" text-decoration-none">
                            <li class="list-group-item border-0 adminSidebarTag">Thêm bài hát</li>
                        </a>
                        <a href="{{url('admin/list-song')}}" class=" text-decoration-none">
                            <li class="list-group-item border-0 adminSidebarTag">Danh sách bài hát</li>
                        </a>
                    </ul>
                </li>
                <li class="list-group-item fw_bold adminSidebarTag">
                    <a href="{{url('admin/feedback')}}" class=" text-decoration-none" style="color: #000000">FEEDBACK FROM USER</a>
                </li>
            </ul>
        </div>
        <div class="col-9">
            @yield('adminMain')
        </div>
    </div>
<script src="{{asset('js/AdminPage.js')}}"></script>
</body>
</html>