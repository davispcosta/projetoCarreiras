<?php

namespace App;

use App\Notifications\AlunoResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Aluno extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'endereco', 'password', 'telefone', 'cpf', 'identidade', 'semestre', 'matricula'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function zeroIfBlank($field){
        return trim($field) !== '' ? $field : 0;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AlunoResetPassword($token));
    }

    public function setSemestreAttribute($semestre)
    {
        $this->attributes['semestre'] = $this->zeroIfBlank($semestre);
    }

    public function setMatriculaAttribute($matricula)
    {
        $this->attributes['matricula'] = $this->zeroIfBlank($matricula);
    }
}
