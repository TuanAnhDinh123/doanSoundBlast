@extends('layouts/adminlayout')
@section('adminMain')
<div class="row mx-auto">
    <h4 class="text-center mb-4">Danh sách thể loại nhạc</h4>
    <table class="table">
        <th>STT</th>
        <th>Mã thể loại</th>
        <th>Tên thể loại</th>
        <th colspan="2">Tùy chỉnh</th>       
            <tr>
                <td></td>
                <td></td>
                <td></td>               
                <td><a href="{{url('edit-cate/.html')}}"><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href="{{url('delete-cate/.html')}}"><i class='fa-solid fa-trash'></i></a></td>
            </tr>
       
    </table>
</div>
@endsection
