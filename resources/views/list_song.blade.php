@extends('layouts/adminlayout')
@section('adminMain')
<div class="row mx-auto">
    <h4 class="text-center mb-4">Danh sách bài hát</h4>
    <table class="table">
        <th>STT</th>
        <th>Tên thể loại</th>
        <th>Tên bài hát</th>
        <th>Tên ca sĩ</th>        
        <th>Hình ảnh</th>
        <th>Âm thanh</th>
        <th>Ngày phát hành</th>
        <th colspan="2">Tùy chỉnh</th>
        @foreach()
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>  
                <td></td>              
                <td><img class="img-thumbnail" src="" style="max-height:100px;max-width:90px;height:auto;width:auto;"></td>
                <td><audio type="audio/mpeg" src=""></audio></td>
                <td><a href="{{url('edit-song/''.html')}}"><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href="{{url('delete-song/'.'.html')}}"><i class='fa-solid fa-trash'></i></a></td>
            </tr>
            @endforeach
    </table>
</div>
@endsection
