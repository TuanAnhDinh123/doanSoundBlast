@extends('layouts/admin')
@section('adminMain')
<div class="row mx-auto">
    <h4 class="text-center mb-4">Danh sách thể loại nhạc</h4>
    <table class="table">
        <th>STT</th>
        <th>Mã thể loại</th>
        <th>Tên thể loại</th>
        <th colspan="2">Tùy chỉnh</th>
        @foreach ($listCates as $index=>$listCate)       
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$listCate->genreID}}</td>
                <td>{{$listCate->genreName}}</td>               
                <td><a href="{{url('admin/edit-cate/'.$listCate->genreID.'.html')}}"><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href="{{url('admin/delete-cate/'.$listCate->genreID.'.html')}}"><i class='fa-solid fa-trash'></i></a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
