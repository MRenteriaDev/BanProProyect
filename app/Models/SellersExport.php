<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;

class SellersExport implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    protected $from_date;
    protected $to_date;


    function __construct($from_date, $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function query()
    {
        $data = DB::table('sellers')
            ->whereBetween('created_at', [$this->from_date, $this->to_date])
            ->select(['id', 'name', 'email', 'stauts','created_at'])
            ->orderBy("id");

        return $data;
    }

    public function headings(): array
    {
        return [
            'id',
            'Nombre',
            'Email',
            'Status',
            'Fecha De Creacion',
        ];
    }
}
