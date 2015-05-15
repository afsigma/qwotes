<?php namespace qwotes;

use Illuminate\Database\Eloquent\Model;

class Qwote extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'qwotes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['qwote', 'author', 'type'];



	 public function User()
    {
        return $this->belongsTo('qwotes\User');
    }


}
