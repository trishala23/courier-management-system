<?php

session_start();

session_destroy();

echo "<script>alert('you are logout ! plz login'); window.location='../index.php'</script>";


?>