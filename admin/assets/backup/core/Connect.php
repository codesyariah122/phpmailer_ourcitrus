<?php

class Connect {
	private $conn;
	private $data=[];

	public function getConnect($host, $user, $password, $database)
	{
		$this->data['host'] = $host;
		$this->data['user'] = $user;
		$this->data['password'] = $password;
		$this->data['database'] = $database;

		$this->conn = mysqli_connect($this->data['host'], $this->data['user'], $this->data['password'], $this->data['database']);
		$koneksi = (!$this->conn) ? "Koneksi Gagal" : "Koneksi Berhasil";
	}


}