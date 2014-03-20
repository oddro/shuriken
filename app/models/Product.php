<?php

class Product extends Eloquent {

	/**
	 * Return the product category img image url.
	 *
	 * @return string
	 */
	public function img()
	{
		return HTML::image("http://lorempixel.com/130/90/business/", $this->name);
		// return HTML::image("oddro/images/product/".$this->src, $this->name);
	}

	public function category()
	{
		return $this->belongsTo('ProductCategory','product_category_id','id');
	}
	public function size()
	{
		return $this->belongsTo('ProductSize','product_size_id','id');
	}
	public function price()
	{
		return $this->hasMany('ProductPrice','product_id','id');
	}
}
