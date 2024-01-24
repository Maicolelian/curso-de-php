

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-boy">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <td colspan="3" style="background-color: #3569DF; color: #ffffff"><strong>
                                    VALOR DEL DOLAR EN CHILE</strong></td>
                            </tr>
                            <tr>
                                <th>FECHA</th>
                                <th>DOLAR</th>
                                <th>EURO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $dolar['fecha'] }}</td>
                                <td>{{ $dolar['dolar']['valor'] }}</td>
                                <td>{{ $dolar['euro']['valor'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <h1 class="text-center">Listado de post</h1>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">escrito por: {{ $post['id'] }}</h6>
                    <p class="card-text">{{ $post['body'] }}</p>
                    <a href="#" class="btn btn-primary">Leer post</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
