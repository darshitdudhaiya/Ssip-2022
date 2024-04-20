<?php
    session_start();
    session_destroy();
?>
<script>
    localStorage.removeItem("username");
</script>
<?php    
    header('Location: ../../index.php');
?>
