<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;


use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;

class PropiedadesByPrice implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    protected $from_precio;
    protected $to_precio;


    function __construct($from_precio, $to_precio)
    {
        $this->from_precio = $from_precio;
        $this->to_precio = $to_precio;

    }

    public function query()
    {
        $data = DB::table('propiedades')
        ->whereBetween('precio', [$this->from_precio, $this->to_precio])
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
