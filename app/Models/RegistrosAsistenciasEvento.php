<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegistrosAsistenciasEvento
 * 
 * @property int $id_registro_asistencia_evento
 * @property int $id_evento
 * @property int $id_participante
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Evento $evento
 * @property Participante $participante
 *
 * @package App\Models
 */
class RegistrosAsistenciasEvento extends Model
{
	protected $table = 'registros_asistencias_eventos';
	protected $primaryKey = 'id_registro_asistencia_evento';

	protected $casts = [
		'id_evento' => 'int',
		'id_participante' => 'int'
	];

	protected $fillable = [
		'id_evento',
		'id_participante'
	];

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'id_evento');
	}

	public function participante()
	{
		return $this->belongsTo(Participante::class, 'id_participante');
	}
}
