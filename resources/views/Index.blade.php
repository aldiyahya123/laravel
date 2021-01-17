@extends("layout.default");

@section("content")

    <div class="container">
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-md-4">
                    <div class="card" style="width: 22rem;">
                        <img src=" {{asset('storage/'.$article->gambar)}} " class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $article->judul }}</h5>
                          <p class="card-text">{{ $article->deskripsi }}</p>
                          <a href="{{ route("articles.show", $article->id) }}" class="btn btn-primary">read</a>
                          <a href="{{ route("articles.edit", $article->id) }}" class="btn btn-info">edit</a>
                          <form action="{{ route("articles.destroy", $article->id) }}" class="d-inline" >
                            @csrf
                            @method("delete")

                            <button class="btn btn-danger" >delete</button>

                        </form>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse

        </div>
    </div>

@endsection
