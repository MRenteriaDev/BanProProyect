<?php

namespace App\Exports;

use App\Models\Propiedades;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;

class PropiedadesBySeller implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    protected $seller;


    function __construct($seller)
    {
        $this->s_i = $seller;

    }

    public function query()
    {
        $data = DB::table('propiedades')
            ->where($this->s_i)
            ->select(['id','created_at', 'updated_at', 'nombre', 'estatus_propiedad_id', 'locacion_id', 'tipo_propiedad_id','precio', 'tamano_propiedad', 'tamano_propiedad_construido', 'descripcion', 'recamaras', 'bano', 'aire_condicionado', 'balcon', 'internet', 'cable', 'alberca', 'lavaplatos', 'estacionamiento', 'refrigerador', 'review_id', 'solicitud_vendedor_id', 'nearbys', 'seller_id', 'ubicacion'])
            ->orderBy("precio");

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
