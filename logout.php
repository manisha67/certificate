<?php
session_start();
session_unset();
echo "
<script>
window.location.assign('signup.php');
</script>
"
?>