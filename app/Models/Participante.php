<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Participante
 * 
 * @property int $id_participante
 * @property string $nombre_participante
 * @property string|null $apellido_paterno_participante
 * @property string|null $apellido_materno_participante
 * @property int $edad_participante
 * @property string $rol_participante
 * @property int $id_evento
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Evento $evento
 * @property Collection|RegistrosAsistenciasEvento[] $registros_asistencias_eventos
 *
 * @package App\Models
 */
class Participante extends Model
{
	protected $table = 'participantes';
	protected $primaryKey = 'id_participante';

	protected $casts = [
		'edad_participante' => 'int',
		'id_evento' => 'int'
	];

	protected $fillable = [
		'nombre_participante',
		'apellido_paterno_participante',
		'apellido_materno_participante',
		'edad_participante',
		'rol_participante',
		'id_evento'
	];

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'id_evento');
	}

	public function registros_asistencias_eventos()
	{
		return $this->hasMany(RegistrosAsistenciasEvento::class, 'id_participante');
	}
}
