<?php

namespace App\Exports;

use App\Models\Propiedades;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;

class PropiedadesExportByTipo implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    protected $tipoPropiedad;


    function __construct($tipoPropiedad)
    {
        $this->t_p = $tipoPropiedad;

    }

    public function query()
    {
        $data = DB::table('propiedades')
            ->where('tipo_propiedad_id', $this->t_p)
            ->select(['id','created_at', 'updated_at', 'nombre', 'estatus_propiedad_id', 'locacion_id', 'tipo_propiedad_id','precio', 'tamano_propiedad', 'tamano_propiedad_construido', 'descripcion', 'recamaras', 'bano', 'aire_condicionado', 'balcon', 'internet', 'cable', 'alberca', 'lavaplatos', 'estacionamiento', 'refrigerador', 'review_id', 'solicitud_vendedor_id', 'nearbys', 'seller_id', 'ubicacion'])
            ->orderBy("id");

        return $data;
    }

    public function headings(): array
    {
        return [
            'id',
            'Fecha De Creacion',
            'Fecha De Actualizacion',
            'Nombre',
            'Estado De La Propiedad',
            'Locacion',
            'Tipo De Propiedad',
            'Precio',
            'Tamaño De La Propiedad',
            'Descripcion',
            'Fecha Construcción',
            'Recamaras',
            'Baño',
            'Aire Acondicionado',
            'Balcon',
            'Internet',
            'Cable',
            'Alberca',
            'Lavaplatos',
            'Estacionamiento',
            'Refrigerador',
            'Review',
            'Solicitud Del Vendedor',
            'Cercanas',
            'Vendedor',
            'Ubicacion'
        ];
    }
}
