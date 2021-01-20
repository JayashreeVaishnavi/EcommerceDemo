<div class="card-deck">
    {{ logger($carModels) }}
    @foreach($carModels as $model)
        <div class="card cursor-pointer" onclick="window.location.href='{{ url('cars').'/'. $model->id }}'">
            <img class="card-img-top" src="{{ asset('assets/media/dummy-car.jpeg') }}" alt="Card image cap"
                 style="height: 200px">
            <div class="card-body">
                <h5 class="card-title">{{ $model->name }}</h5>
                <p class="card-text">{!! $model->features !!}</p>
                <p class="card-text"><small class="text-muted">Manufactured in {{ $model->year->years }}
                        by {{ $model->company->name }}</small></p>
            </div>
        </div>
        @if((3 - count($carModels)) > 0)
            @for($index = (3 - count($carModels)); $index <= 3; $index++)
                <div class="card" style="border: none"></div>
            @endfor
        @endif
    @endforeach
</div>
