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

	/**
	 * Get the comment's author.
	 *
	 * @return User
	 */
	// public function author()
	// {
	// 	return $this->belongsTo('User', 'user_id');
	// }

	/**
	 * Get the comment's post's.
	 *
	 * @return Blog\Post
	 */
	// public function post()
	// {
	// 	return $this->belongsTo('Post');
	// }

}
