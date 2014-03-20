<?php
class ProductSize extends Eloquent {
	public function product()
	{
		return $this->hasMany('Product');
	}
}