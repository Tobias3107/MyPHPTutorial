@extends('layout.app')
@section('content')
<?php $kurse = App\Kurs2::all();  ?>
<div class="album py-5 ">
    <div class="container">
        <div class="row">
            @foreach($kurse as $kurs) 
                <div class="col-md-4">
                    <div class="card theme-dark mb-4 shadow-sm">
                        <div class="card-header">
                            <p class="card-text">{{ $kurs->name }}</p>
                        </div>
                        <img class="card-img-top" src="{!! asset('/images/php_thumb.png') !!}"
                                    alt="Card image cap" onclick="">
                        <div class="card-body">
                            <p class="card-text">{{ $kurs->desciption }}</p>
                        </div>
                        <div class="card-footer">
                            <form action="/kurs/{{ $kurs->id }}" method="GET">
                                <input type="submit"
                                    class="btn btn-sm theme-dark btn-outline-secondary float-right" value="View">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection