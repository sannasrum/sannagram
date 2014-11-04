<?php

class Inventory extends Eloquent {

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'inventory';

	protected $softDelete = true;

	public function collection()
	{
		return $this->belongsTo('Collection');
	}
}
