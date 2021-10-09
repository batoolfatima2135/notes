<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('mark',$data->id)}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      Notifications <span class="badge badge-danger">{{$data->unreadnotifications->count()}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                       @foreach ($data->unreadnotifications as $notification )
                       <a class="dropdown-item bg-danger" href="#">
                        {{$notification->data['data']}}
                    </a>
                       @endforeach
                       @foreach ($data->readnotifications as $notification )
                       <a class="dropdown-item" href="#">
                        {{$notification->data['data']}}
                    </a><\
                       @endforeach



                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
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


