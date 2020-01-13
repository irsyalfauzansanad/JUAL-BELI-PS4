<?php
class Kategori extends Database 
{
	// menampilkan semua database
	public function index()
	{
		$datakategori = mysqli_query(
			$this->koneksi,
			"SELECT * FROM kategori"
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
		mysqli_query(
			$this->koneksi,
			"update kategori set nama = '$nama', slug = '$slug' where id = '$id'"
		);
	}

	public function delete($id)
	{
		mysqli_query($this->koneksi, "delete from kategori where id = '$id'");
	}
}
?>

