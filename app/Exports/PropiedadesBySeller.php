<?php

namespace App\Exports;

use App\Models\Propiedades;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;

class PropiedadesExportBySeller implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    protected $sellerid;


    function __construct($sellerid)
    {
        $this->s_i = $sellerid;

    }

    public function query()
    {
        $data = DB::table('propiedades')
            ->where('seller_id', $this->s_i)
            ->select(['id','created_at', 'updated_at', 'nombre', 'estatus_propiedad_id', 'locacion_id', 'tipo_propiedad_id','precio', 'tamano_propiedad', 'tamano_propiedad_construido', 'descripcion', 'fecha_construccion', 'recamaras', 'bano', 'aire_condicionado', 'balcon', 'internet', 'cable', 'alberca', 'lavaplatos', 'estacionamiento', 'refrigerador', 'video_propiedad', 'review_id', 'solicitud_vendedor_id', 'planos', 'nearbys'])
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
            'Tamaño De La Propiedad Construida',
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
            'Video',
            'Review',
            'Solicitud Del Vendedor',
            'Planos',
            'Cercanas',
        ];
    }
}
