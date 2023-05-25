@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Treni di oggi:</h1>

        <ul>
            @foreach ($trains as $train)
                <li class="py-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $train->azienda }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Stazione partenza: <span>{{ $train->stazione_di_partenza }}</span>
                            </li>
                            <li class="list-group-item">Stazione arrivo: <span>{{ $train->stazione_di_arrivo }}</span></li>
                            <li class="list-group-item">Data partenza: <span>{{ $train->data_di_partenza }}</span></li>
                            <li class="list-group-item">Orario partenza: <span>{{ $train->orario_di_partenza }}</span></li>
                            <li class="list-group-item">Orario arrivo: <span>{{ $train->orario_di_arrivo }}</span></li>
                            <li class="list-group-item">Codice treno: <span>{{ $train->codice_treno }}</span></li>
                            <li class="list-group-item">Numero carozze: <span>{{ $train->numero_carrozze }}</span></li>
                            <li class="list-group-item">Costo: <span>{{ $train->costo }}€</span></li>
                            <li class="list-group-item">In orario: <span>{{ $train->in_orario ? 'si' : 'no' }}</span></li>
                            <li class="list-group-item">Cancellato: <span>{{ $train->cancellato ? 'si' : 'no' }}</span>
                            </li>
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
