<?php namespace qwotes;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'setting';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['type', 'user_id','subscribe_to_public_qwotes', 'subscribe_to_my_qwotes'];



	 public function User()
    {
        return $this->belongsTo('qwotes\User');
    }

}
