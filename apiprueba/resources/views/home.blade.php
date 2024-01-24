<div class="container">
    <h1 class="text-center">Listado de frases</h1>
    <div class="row">
        @foreach($nasa as $character)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $character['qoute'] }}</h5>                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>