<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	//--------------------------------------------------------------------

	public function show()
	{
		$data['nama'] = 'Eggy';
		$data['jurusan'] = 'Ilkomp';
		$data['npm'] = '1817051013';
		echo view('mahasiswa/header', $data);
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer', $data);
	}

}s