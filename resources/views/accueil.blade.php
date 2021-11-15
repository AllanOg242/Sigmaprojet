@section('content')
    <h1>La liste des formation</h1>
        <div class="row">
            @foreach($formations as $formation)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset("storage/$formation->image")}}" style="objet-fit:cover" height="200">
                        <div class="card-body">
                            <h5>{{$formation->nom}}</h5>
                            <h5>{{$formation->description}}</h5>
                            <h5>{{$formation->prix}}</h5>
                            <h5>{{$formation->type}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
