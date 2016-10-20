<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
	//fungsi __construct automatis jalan
	public function __construct()
	{
		parent::__construct();
	}

	//menampilkan semua blog
	public function index()
	{
		$this->load->view('blog/index');
	}

	//halaman single blog
	public function show($slug)
	{

	}

	//bikin blog baru
	public function create()
	{

	}

	//edit blog
	public function update($id)
	{

	}

	//hapus blog
	public function delete($id)
	{

	}
}
