<?php


namespace App\Persistence\Modulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Modulo extends Model
{
    use SoftDeletes;

    /**
     * Nomenclatura para o log de atividade
     *
     * @var string
     */
    protected $label = 'nome';
    protected $fillable = [
        'titulo',
        'descricao',
        'status',

    ];
    public $filterable = [

    ];

    public $appends_filterable = [];

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return $this->filterable;
    }

    protected $appends = [];

}