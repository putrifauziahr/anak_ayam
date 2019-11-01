<!DOCTYPE html>
<html>
<head>
	<!-- Title berfungsi untuk memberikan judul halaman website yang ingin kita buat -->
	<title>anak_ayam</title>
	<!-- merupakan tag css yang berfungsi sebagai tempat untuk menyimpan atribut css,  -->
	<style type="text/css">

	/*membuat isi atau teks pada tag p atau paragraf berwarna oranye*/
		p{
			color: orange;
		}
	/*membuat isi atau teks pada tag h5 berwarna biru*/
		h5{
			color: blue;
		}
	</style>
</head>
<body>
 
<!-- memasuki tag php -->
 <?php
// mendeklarasikan variabel anak_ayam dengan isi atau nilai berupa int
$anak_ayam=8;

// menampilkan tek kotek kotek anak ayam turun 8
 echo "tek kotek kotek kotek, Anak Ayam turun 8";

//pengulangan untuk menampilkan program yang diinginkan, for berfungsi untuk mmembuat anak_ayam menjadi turun berurutan dari 8-0. pengulangan yang digunakan yaitu For, dimana merupakan pengulangan decrement, dari 7-1. dimana nilai awal anak_ayam adalah 7, ketentuannya nilai anak_ayam lebih besar dari 0 dan decrement atau --
 for ($anak_ayam=7; $anak_ayam>0; $anak_ayam--){
 	// memasuki kondisi pertama, kondisi pertama yaitu apabila variabel anak ayam modulus 2 samadengan 1 atau menghasilkan kondisi ganjil, maka akan ditampilkan melalui echo yaitu mati satu tinggal sekian(hasil perulangan), kalimat tersebut berada dalam tag p dan akan menghasilkan teks berwarna oranye sebab sebelumnya sudah dideklarasikan dalam tag style
 	if ($anak_ayam%2==1) {
 		echo '<p>' . 'Mati satu tinggal ' . $anak_ayam .'</p>';
 	}
 	// kondisi kedua yaitu apabila variabel anak_ayam dimodulus 2 menghasilkan 0 atau genap, maka akan ditampilkan teks melalui echo yaitu mati satu tinggal sekian(hasil perulangan) dan teks tersebut akan berwarna biru, sesuai dengan letak teks tersebut yang berada dalam h5 dan sudah dideklarasikan warnanya pada tag css style.
 	else{
 		echo '<h5>' . 'Mati satu tinggal ' . $anak_ayam .'</h5>';
 	}
 	
 }
// menampilkan ayamnya mati semua, atau kondisi dimana anak_ayam samadengan 0 atau habis.
 echo "ayamnya habis semua hiks T_T";
 
// tag penutup php
 ?>

</body>
</html>