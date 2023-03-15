@extends('layouts/admin')
@section('adminMain')
<div class="row mx-auto">
    <h4 class="text-center mb-4">Danh sách nhạc sĩ</h4>
    <table class="table">
        <th>STT</th>
        <th>Mã nhạc sĩ</th>
        <th>Tên nhạc sĩ</th>
        <th colspan="2">Tùy chỉnh</th>       
            @foreach ($listAuthors as $index=>$listAuthor)       
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$listAuthor->authorID}}</td>
                <td>{{$listAuthor->authorName}}</td>               
                <td><a href="{{url('admin/edit-author/'.$listAuthor->authorID.'.html')}}"><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href="{{url('admin/delete-author/'.$listAuthor->authorID.'.html')}}"><i class='fa-solid fa-trash'></i></a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection