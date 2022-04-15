<?php
    $phone  = $_POST['phone']; 
    $pesan     = $_POST['pesan'];

    echo "<script>window.location = 'https://api.whatsapp.com/send?phone=$phone&text=$pesan'</script>";
?>