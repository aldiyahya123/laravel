@extends("layout.default")

@section("content")

    <div class="container">

        <form method="post" action="{{ route("articles.store") }}" enctype="multipart/form-data" >
            @csrf
            @method('POST')

            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old("judul")}}">
              @error('judul')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="deskripsi">deskripsi</label>
              <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{old("deskripsi")}}">
              @error('deskripsi')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="gambar">gambar</label>
              <input type="file" class="form-control-file @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{old("gambar")}}">
                @error('gambar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>

@endsection
