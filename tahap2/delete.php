<?php 
require 'functions.php';

$id = $_GET['id'];

if (delete($id) > 0) {
    echo "
     <script>
      alert('Deleted Succed');
      document.location.href = 'index.php';
     </script>";
  } else {
    echo "
      <script>
        alert('Deleted Failed');
        document.location.href = 'index.php';
      </script>";
  }

?>