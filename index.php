<?php
$nama_kelompok = "Kelompok 6";

$anggota = [
    ['nama' => 'Coulava Illona Rahmawati', 'no_absen' => '10', 'kelas' => 'XI RPL 6', 'foto' => 'foto-ody.jpeg'],
    ['nama' => 'Latisa Marta Sabela', 'no_absen' => '16', 'kelas' => 'XI RPL 6', 'foto' => 'foto-sasa.jpeg'],
    ['nama' => 'Leni Sintiasari', 'no_absen' => '17', 'kelas' => 'XI RPL 6', 'foto' => 'foto-leni.jpeg'],
    ['nama' => 'Almira Dwi Rosyadi', 'no_absen' => '04', 'kelas' => 'XI RPL 6', 'foto' => 'foto-almira.jpeg'],
    ['nama' => 'Tomi Firdaus', 'no_absen' => '32', 'kelas' => 'XI RPL 6', 'foto' => 'foto-tomi.jpeg'],
    ['nama' => 'Maratussyifa Ussakinah', 'no_absen' => '18', 'kelas' => 'XI RPL 6', 'foto' => 'foto-ina.jpeg']
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title><?= $nama_kelompok ?></title>

<style>
body{
    font-family: Arial;
    background:#f2f5f9;
    margin:0;
    padding:30px;
}

h1{
    text-align:center;
    margin-bottom:40px;
}

.grid{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:20px;
}

.card{
    width:220px;
    background:white;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.card img{
    width:100%;
    height:180px;
    object-fit:cover;
}

.info{
    padding:15px;
    text-align:center;
}

.badge{
    background:#3498db;
    color:white;
    padding:4px 8px;
    border-radius:10px;
    font-size:12px;
}
</style>
</head>

<body>

<h1><?= $nama_kelompok ?></h1>

<div class="grid">

<?php foreach ($anggota as $i => $a): ?>

<div class="card">

<img src="<?= $a['foto'] ?>" alt="<?= $a['nama'] ?>">

<div class="info">
    <h3><?= $a['nama'] ?></h3>
    <p>Absen: <?= $a['no_absen'] ?></p>
    <p>Kelas: <?= $a['kelas'] ?></p>
    <span class="badge">Anggota #<?= $i+1 ?></span>
</div>

</div>

<?php endforeach; ?>

</div>

</body>
</html>