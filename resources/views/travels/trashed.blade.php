@extends('layouts.base')

@section('contents')
<h1>Your Trashed Travel</h1>
    

<div class="container">
    <div class="row row-cols-3">
        @foreach ($trashedTravels as $travel)
            <div class="col mb-3">
                <div class="card h-100">
                    <img style="height: 275px" src="{{ $travel->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $travel->title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $travel->country }}</li>
                        <li class="list-group-item">{{ $travel->city }}</li>
                        <li class="list-group-item">{{ $travel->text }}</li>
                        <li class="list-group-item">{{ $travel->date }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('travels.show', ['travel' => $travel->id]) }}" class="btn btn-primary">Travel info</a>
                        {{-- <form action="{{ route('travels.destroy', ['travel' => $travel->id]) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" href="">Delete</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $trashedTravels->links() }}
</div>

@endsection