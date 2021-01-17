@extends("layout.default")

@section("content")

    <div class="container">

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">judul</th>
                <th scope="col">deskripsi</th>
                <th scope="col">gambar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->judul}}</td>
                <td>{{$article->deskripsi}}</td>
                <td>
                    <img src="{{ url('storage/'.$article->gambar) }}" alt="">
                </td>
                {{$article->gambar}}
              </tr>
            </tbody>
          </table>

    </div>

@endsection
