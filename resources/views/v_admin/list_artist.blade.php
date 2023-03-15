@extends('layouts/admin')
@section('adminMain')
<div class="row mx-auto">
    <h4 class="text-center mb-4">Danh sách ca sĩ</h4>
    <table class="table">
        <th>STT</th>
        <th>Mã ca sĩ</th>
        <th>Tên ca sĩ</th>
        <th colspan="2">Tùy chỉnh</th>       
            @foreach ($listArtists as $index=>$listArtist)       
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$listArtist->artistID}}</td>
                <td>{{$listArtist->artistName}}</td>               
                <td><a href="{{url('admin/edit-artist/'.$listArtist->artistID.'.html')}}"><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href="{{url('admin/delete-artist/'.$listArtist->artistID.'.html')}}"><i class='fa-solid fa-trash'></i></a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection