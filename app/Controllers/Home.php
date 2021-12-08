<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$cache = \Config\Services::cache();

		if (! $data['greeting'] = $cache->get('greeting')) {

			$data['greeting'] = '“You can, you should, and if you’re brave enough to start, you will” – Stephen King';
			$cache->save('greeting', $data['greeting'], 300);
		}
		else {
			$data['greeting'] = $cache->get('greeting');
		}
		
		$this->cachePage(180);

		return view('toko/homepage', $data);
	}

	public function cart()
	{
		$cache = \Config\Services::cache();

		if (! $data['greeting'] = $cache->get('greeting')) {

			$data['greeting'] = '“You can, you should, and if you’re brave enough to start, you will” – Stephen King';
			$cache->save('greeting', $data['greeting'], 300);
		}
		else {
			$data['greeting'] = $cache->get('greeting');
		}

		return view('toko/cart', $data);
	}

	public function wishlist()
	{
		if (! $data['greeting'] = $cache->get('greeting')) {

			$data['greeting'] = '“You can, you should, and if you’re brave enough to start, you will” – Stephen King';
			$cache->save('greeting', $data['greeting'], 300);
		}
		else {
			$data['greeting'] = $cache->get('greeting');
		}

		return view('toko/wishlist', $data);
	}
	
	public function checkout()
	{
		$cache = \Config\Services::cache();

		if (! $data['greeting'] = $cache->get('greeting')) {

			$data['greeting'] = '“You can, you should, and if you’re brave enough to start, you will” – Stephen King';
			$cache->save('greeting', $data['greeting'], 300);
		}
		else {
			$data['greeting'] = $cache->get('greeting');
		}

		return view('toko/checkout', $data);
	}

	public function quotes()
	{
		$cache = \Config\Services::cache();

		if (! $data['greeting'] = $cache->get('greeting')) {

			$data['greeting'] = '“You can, you should, and if you’re brave enough to start, you will” – Stephen King';
			$cache->save('greeting', $data['greeting'], 300);
		}
		else {
			$data['greeting'] = $cache->get('greeting');
		}

		$this->cachePage(180);

		return view('toko/quotes', $data);
	}

	public function video()
	{
		$cache = \Config\Services::cache();

		if (! $data['greeting'] = $cache->get('greeting')) {

			$data['greeting'] = '“You can, you should, and if you’re brave enough to start, you will” – Stephen King';
			$cache->save('greeting', $data['greeting'], 300);
		}
		else {
			$data['greeting'] = $cache->get('greeting');
		}

		$this->cachePage(180);

		return view('toko/video', $data);
	}

	public function sound()
	{
		$cache = \Config\Services::cache();

		if (! $data['greeting'] = $cache->get('greeting')) {

			$data['greeting'] = '“You can, you should, and if you’re brave enough to start, you will” – Stephen King';
			$cache->save('greeting', $data['greeting'], 300);
		}
		else {
			$data['greeting'] = $cache->get('greeting');
		}

		$this->cachePage(180);

		return view('toko/sound', $data);
	}
}
