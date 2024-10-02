<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RequrimientosEvento
 * 
 * @property int $id_peticion
 * @property int $id_evento
 * @property int $id_recurso
 * @property int $cantidad_recurso
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Evento $evento
 * @property Recurso $recurso
 *
 * @package App\Models
 */
class RequrimientosEvento extends Model
{
	protected $table = 'requrimientos_eventos';
	protected $primaryKey = 'id_peticion';

	protected $casts = [
		'id_evento' => 'int',
		'id_recurso' => 'int',
		'cantidad_recurso' => 'int'
	];

	protected $fillable = [
		'id_evento',
		'id_recurso',
		'cantidad_recurso'
	];

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'id_evento');
	}

	public function recurso()
	{
		return $this->belongsTo(Recurso::class, 'id_recurso');
	}
}
