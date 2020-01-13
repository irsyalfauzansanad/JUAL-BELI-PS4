<?php
class Kategori extends Database 
{
	// menampilkan semua database
	public function index{
		$datakategori = mysqli_query(
			$this->koneksi,
			"SELECT * FROM Kategori"
		);

		return $datakategori;
	}

	// memuat data
	public function create($nama, $slug)
	{
		mysqli_query(
			$this->koneksi,
			"insert into kategori values(null, '$nama', '$slug')"
		);
		return $datakategori;
	}
	// Menampilkan data bedasarkan Id
	public function show($id)
	{
		$datakategori = mysqli_query(
			$this->koneksi,
			"select * from kategori where id='$id'"
		);
		return $datakategori;
	}
	public function edit($id)
	{
		$datakategori = mysqli_query(
			$this->koneksi,
			"select * from kategori where id='$id'"
		);
		return $datakategori;
	}
	public function update($id, $nama, $slug)
	{
		mysql_query(
			$this->koneksi,
			"uptade kategori set nama = '$nama', slug = '$slug', where id = '$slug'"
		);
	}

	public function delete($id)
	{
		mysqli_query($this->koneksi, "delete from kategori where id = '$id'");
	}

