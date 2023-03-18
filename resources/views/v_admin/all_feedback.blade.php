@extends('layouts/admin')
@section('adminMain')

<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Feedback</h4>
        <table class="table table-bordered ">
    <thead>
    <tr>
      <th class="col-1">#</th>
      <th class="col-3">Username</th>
      <th class="col-8">Feedback content</th>
      
    </tr>
    </thead>
    <tbody>
        @foreach ($feedbacks as $index=>$feedback)
        <tr>
            <th class="col-1" >{{$index+1}}</th>
            <td class="col-3" >{{$feedback->name}}</td>
            <td class="col-8" >{{$feedback->fbContent}}</td>    
        </tr>
        @endforeach
    </tbody>
    </table>
        
    </div>
</div>
@endsection