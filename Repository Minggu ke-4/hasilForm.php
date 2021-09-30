<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Hasil Input</title>
</head>
<body style="font-family: courier;">
	<h1 align="center">Data Hasil Input</h1>
	<table cellspacing="0" align="center" cellpadding="5">
		<tr>
			<td>1.</td>
			<td>NISN</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fNISN"];?>
			</td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Asal Sekolah</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fAsalSekolah"];?>
			</td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Tahun Lulus</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fTahunLulus"];?>
			</td>
		</tr>
		<tr>
			<td>4.</td>
			<td>Lampiran Fotocopy Ijazah</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fLampiranIjazah"];?>
			</td>
		</tr>
		<tr>
			<td>5.</td>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fNama"];?>
			</td>
		</tr>
		<tr>
			<td>6.</td>
			<td>NIK</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fNIK"];?>
			</td>
		</tr>
		<tr>
			<td>7.</td>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fTempatLahir"];?>
			</td>
		</tr>
		<tr>
			<td>8.</td>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fTanggalLahir"];?>
			</td>
		</tr>
		<tr>
			<td>9.</td>
			<td>Umur</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fUmur"];?>
			</td>
		</tr>
		<tr>
			<td>10.</td>
			<td>Lampiran Fotocopy Akte Kelahiran</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fLampiranAkte"];?>
			</td>
		</tr>
		<tr>
			<td>11.</td>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fJenisKelamin"];?>
			</td>
		</tr>
		<tr>
			<td>12.</td>
			<td>Almat</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fAlamat"]?>, <?php echo $_POST["fDesa"]?>, <?php echo $_POST["fKecamatan"]?>, <?php echo $_POST["fKabupaten"]?>, <?php echo $_POST["fProvinsi"]?>
			</td>
		</tr>
		<tr>
			<td>13.</td>
			<td>Email</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fEmail"];?>
			</td>
		</tr>
		<tr>
			<td>14.</td>
			<td>Lampiran Fotocopy Kartu Keluarga</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fLampiranKK"];?>
			</td>
		</tr>
		<tr>
			<td>15.</td>
			<td>Nama Ayah Kandung</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fNamaAyah"];?>
			</td>
		</tr>
		<tr>
			<td>16.</td>
			<td>Agama Ayah</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fAgamaAyah"];?>
			</td>
		</tr>
		<tr>
			<td>17.</td>
			<td>Pekerjaan Ayah</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fPekerjaanAyah"];?>
			</td>
		</tr>
		<tr>
			<td>18.</td>
			<td>Nama Ibu Kandung</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fNamaIbu"];?>
			</td>
		</tr>
		<tr>
			<td>19.</td>
			<td>Agama Ibu</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fAgamaIbu"];?>
			</td>
		</tr>
		<tr>
			<td>20.</td>
			<td>Pekerjaan Ibu</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fPekerjaanIbu"];?>
			</td>
		</tr>
		<tr>
			<td>21.</td>
			<td>Alamat Orang Tua</td>
			<td>:</td>
			<td>
				<?php echo $_POST["fAlamatOrangTua"]?>, <?php echo $_POST["fDesaOrangTua"]?>, <?php echo $_POST["fKecamatanOrangTua"]?>, <?php echo $_POST["fKabupatenOrangTua"]?>, <?php echo $_POST["fProvinsiOrangTua"]?>
			</td>
		</tr>
	</table>
</body>
</html>