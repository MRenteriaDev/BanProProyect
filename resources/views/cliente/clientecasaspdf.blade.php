<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Estatus</th>
            <th scope="col">Nombre</th>
            <th scope="col">Colonia</th>
            <th scope="col">Precio</th>
            <th scope="col">Vínculo a la propiedad</th>
        </tr>
    </thead>
    @foreach ($casas as $casa)
        <tbody>
            <tr>
                <th>{{ $casa->EstatusPropiedad->nombre }}</th>
                <th>{{ $casa->nombre ?? '' }}</th>
                @if (isset($casa->locacion_id))
                    <th>{{ $casa->Locacion->nombre }}</th>
                @else
                    <th>N/A</th>
                @endif

                <th>{{ "$" . number_format($casa->precio ?? '', 2) }}</th>
                <th>{{ 'https://banpro.com.mx/properties/grid/' . $casa->id }}</th>
            </tr>
        </tbody>
    @endforeach
</table>
