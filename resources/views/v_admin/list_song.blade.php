@extends('layouts/admin')
@section('adminMain')
<div class="row mx-auto">
    <h4 class="text-center mb-4">Danh sách bài hát</h4>
    <table class="table">
        <th>STT</th>
        <th>Thể loại</th>
        <th>Bài hát</th>
        <th>Ca sĩ</th>        
        <th>Nhạc sĩ</th>        
        <th>Hình ảnh</th>
        <th>Ngày phát hành</th>
        <th colspan="2">Tùy chỉnh</th>
        @foreach($songs as $index=>$song)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$song->genreName}}</td>
                <td>{{$song->songName}}</td>
                <td>
                    @foreach ($artists as $artist)
                    @if ($artist->songID == $song->songID)
                    {{$artist->artistName}}
                    @endif
                    @endforeach
                </td>  
                <td>{{$song->authorName}}</td>              
                <td>
                    <img class="img-thumbnail" src="{{asset('uploads/images/song/'.$song->img)}}" alt="">
                </td>              
                <td>{{$song->createAt}}</td>
                <td><a href="{{url('admin/edit-song/'.$song->songID.'.html')}}"><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href="{{url('admin/delete-song/'.$song->songID.'.html')}}"><i class='fa-solid fa-trash'></i></a></td>
            </tr>
            @endforeach
    </table>
</div>
@endsection
