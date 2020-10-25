<?php
    $nrp=$_GET ['id'];
    $koneksi->query ("delete from tb_anggota where nrp = '$nrp'");
?>

<script type ="text/javascript">
    window.location.href="?page=anggota";
</script>