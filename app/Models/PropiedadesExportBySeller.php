<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    protected $seller_id;


    function __construct($seller_id)
    {
        $this->seller_id = $seller_id;
    }

    public function query()
    {
        $data = DB::table('propiedades')
            ->where('seller_id', $this->seller_id)
            ->select(['id','created_at', 'updated_at', 'nombre', 'precio', 'tamano_propiedad', 'tamano_propiedad_construido', 'descripcion', 'fecha_construccion', 'recamaras', 'bano', 'aire_condicionado', 'balcon', 'internet', 'cable', 'alberca', 'lavaplatos', 'estacionamiento', 'refrigerador', 'nearbys'])
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
            'Cercanas',
        ];
    }
}
