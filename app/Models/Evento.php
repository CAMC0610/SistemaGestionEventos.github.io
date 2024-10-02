<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 * 
 * @property int $id_evento
 * @property string $nombre_evento
 * @property Carbon $fecha_de_evento
 * @property time without time zone $hora_inicio_evento
 * @property time without time zone $hora_finalizacion_evento
 * @property string $ubicaion_evento
 * @property string $tipo_evento
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Participante[] $participantes
 * @property Collection|RequrimientosEvento[] $requrimientos_eventos
 * @property Collection|RegistrosAsistenciasEvento[] $registros_asistencias_eventos
 *
 * @package App\Models
 */
class Evento extends Model
{
	protected $table = 'eventos';
	protected $primaryKey = 'id_evento';

	protected $casts = [
		'fecha_de_evento' => 'datetime:dd-mm-yyyy'
	];

	protected $fillable = [
		'nombre_evento',
		'fecha_de_evento',
		'hora_inicio_evento',
		'hora_finalizacion_evento',
		'ubicaion_evento',
		'tipo_evento'
	];

	public function participantes()
	{
		return $this->hasMany(Participante::class, 'id_evento');
	}

	public function requrimientos_eventos()
	{
		return $this->hasMany(RequrimientosEvento::class, 'id_evento');
	}

	public function registros_asistencias_eventos()
	{
		return $this->hasMany(RegistrosAsistenciasEvento::class, 'id_evento');
	}
}
