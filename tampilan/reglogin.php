<b><h3>Untuk transaksi online harus menjadi member dulu ?</h3></b>
<div>Setiap kami memproses transaksi anda, maka kami akan menginformasikan detailnya ke email anda, dan pengiriman barang akan ditujukan ke alamat anda,sehingga kami mengharuskan setiap customer yang ingin berbelanja online untuk mendaftar sebagai member terlebih dahulu trims</div> <br>
<center><hr /> <b><h3>Pendaftaran Member</h3></b><hr /></center>
<form action="tampilan/registrasi.php" method="post">
					<pre>

Nama Lengkap    	:	<input name="nama" type="text" size="20" maxlength="30" />

Email   		:	<input name="email" type="text" size="20"  />

Kata Sandi          	:	<input name="pass" type="password" size="20" maxlength="30" />

Ulangi Kata Sandi  	:	<input name="cpass" type="password" size="20" maxlength="30" />

Kota	        	:	<select name="id_kota" value=" ">
						<option value="1">Jakarta</option>
                        <option value="2">Bekasi</option>
                        <option value="3">Bandung</option>
                        <option value="4">Bogor</option>
                        <option value="5">Surabaya</option></select><br>
Alamat	        	:	
			        <textarea name="alamat" cols="21" rows="5"></textarea>

Telp/Hp	        	:	<input name="telp" type="text" size="20"  />

<?php echo"<img src='captcha.php' />";?>
				   
<input name="security_code" type="text" size="8" maxlength="6"  />

<input name="terms" type="checkbox" value="Terms"<h2>saya Setuju</h2>&nbsp;<input name="kirim" type="submit" value="Kirim" class="tombol"/> <input name="batal" type="reset" value="Batal" class="tombol"/>

				</pre>
</form>			

