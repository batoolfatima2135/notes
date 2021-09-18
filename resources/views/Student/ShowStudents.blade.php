@extends('masterlayout')

@section('data')
<h3>
    @if (session()->has('msg'))
        {{session()->get('msg')}}
    @endif
</h3>
    @if (session()->has('msg1'))
    {{session()->get('msg')}}
    @endif
</h3>
<a class="btn btn-primary" href="{{route('CreateStudentForm')}}">add new</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">image</th>
        <th scope="col">age</th>
        <th scope="col">qualification</th>
        <th scope="col" >operations</th>
      </tr>
    </thead>
    <tbody>

        @foreach ( $data as $Student )
        <tr>
            <td>{{$Student->id}}</td>
            <td>{{$Student->name}}</td>
            <td><img src="{{asset('/storage/StudentImages/'.$Student->image)}}"></td>
            <td>{{$Student->age}}</td>
            <td>{{$Student->qualification}}</td>
            <td>
                <a href="{{route('StudentEditForm', $Student->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('DeleteStudent', $Student->id)}}" method="POST">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td>


        </tr>

        @endforeach

    </tbody>
  </table>
@endsection


