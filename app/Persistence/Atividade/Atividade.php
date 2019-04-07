<?php


namespace App\Persistence\Atividade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atividade extends Model
{
    use SoftDeletes;

    /**
     * Nomenclatura para o log de atividade
     *
     * @var string
     */
    protected $label = 'nome';
    protected $fillable = [
        'id_modulo',
        'titulo',
        'descricao'
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