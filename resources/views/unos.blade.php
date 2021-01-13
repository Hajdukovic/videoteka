@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodavanje novog filma</div>

                <div class="card-body">
                    <form method="POST" action=" {{ route('noviunos') }} " enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="naslov" class="col-md-4 col-form-label text-md-right">Naslov:</label>

                            <div class="col-md-6">
                                <input id="naslov" type="text" class="form-control" name="naslov" required autofocus>
                            </div>
                        </div>
    
						<div class="form-group row">
                            <label for="naslov" class="col-md-4 col-form-label text-md-right">Žanr:</label>
                            <div class="col-md-6">
                                <select id="zanr" type="text" name="zanr" class="form-control"> 
                                    @foreach($zanr as $z)
                                    <option value="{{$z->naziv}}">{{$z->naziv}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
						
                        <div class="form-group row">
                            <label for="godina" class="col-md-4 col-form-label text-md-right">Godina snimanja:</label>

                            <div class="col-md-6">

                            <select id="godina" type="number" name="godina" class="form-control"> 
                                    @for ($i = 1900; $i < 2022; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>

                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="trajanje" class="col-md-4 col-form-label text-md-right">Trajanje [minuta]:</label>

                            <div class="col-md-6">
                                <input id="trajanje" type="number" class="form-control" name="trajanje" step="1" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sl" class="col-md-4 col-form-label text-md-right">Slika naslovnice filma: </label>

                            <div class="col-md-3">
                                <input id="sl" type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Dodaj film
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection