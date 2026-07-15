<?php
move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['foto']['name']);

?>