@extends("layout.default")

@section("content")

    <div class="container">

        <form method="post" action="{{ route("articles.update", $article->id) }}" >
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text"
                        class="form-control @error('judul') is-invalid @enderror"
                        id="judul"
                        name="judul"
                        value="{{old("judul") ? old("judul") : $article->judul}} ">
              @error('judul')
                  <p class="alert alert-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="deskripsi">deskripsi</label>
              <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{old("deskripsi") ? old("deskripsi") : $article->deskripsi}}">
              @error('deskripsi')
                  <p class="alert alert-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="gambar">gambar</label>
              <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{old("gambar") ? old("gambar") : $article->gambar}}">
                @error('gambar')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>

@endsection
