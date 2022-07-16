<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru | Universitas Gajah Mada</title>
</head>

<body>
    <header>
        <div class="fullscreen-bg">
            <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
                <source src="ugm.mp4" type="video/mp4">
            </video>
        </div>
        </div>
        <center>
        <h1>Formulir Pendaftaran Mahasiswa Baru</h1>
        </center>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <center>

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>
        </center>

    </form>

    </body>
</html>