<?php

class ProductCategory extends Eloquent {
	protected $table = 'product_category';

	/**
	 * Return the product category img image url.
	 *
	 * @return string
	 */
	public function img()
	{
		return HTML::image("oddro/images/product_category/".$this->img, $this->title);
	}

	public function product()
	{
		return $this->hasMany('Product');
	}
}
