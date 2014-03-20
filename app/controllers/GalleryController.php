<?php

class GalleryController extends BaseController {

	public function getIndex()
	{
		// Get all the product
		$product = Product::paginate(5);
		// foreach ($product as $key => $value) {
		// 	echo 'product name = '.$value->name;
		// 	foreach ($value->price as $price) {
		// 		print_r($price);
		// 	}
		// }
		// die();

		// Show the gallery page
		return View::make('frontend/gallery', compact('product'));
	}

}
