<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

	protected $table = 'blogs';

	public function getActiveRecords()
	{
		return $this->published()->latest()->paginate(3);
	}

	public function getRecordBySlug($slug)
	{
		return $this->where(['slug' => $slug])->firstOrFail();
	}

	public function scopePublished($query)
	{
		$query->where(['active' => 1]);
	}

}
