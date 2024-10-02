<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recurso
 * 
 * @property int $id_recurso
 * @property string $nombre_recurso
 * @property string $tipo_recurso
 * @property float $costo_recurso
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|RequrimientosEvento[] $requrimientos_eventos
 *
 * @package App\Models
 */
class Recurso extends Model
{
	protected $table = 'recursos';
	protected $primaryKey = 'id_recurso';

	protected $casts = [
		'costo_recurso' => 'float'
	];

	protected $fillable = [
		'nombre_recurso',
		'tipo_recurso',
		'costo_recurso'
	];

	public function requrimientos_eventos()
	{
		return $this->hasMany(RequrimientosEvento::class, 'id_recurso');
	}
}
