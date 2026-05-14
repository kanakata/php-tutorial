<?php

echo "<form enctype='multipart/form-data' method='post' action=''>";
echo "<input type='file' name='user-file'>";
echo "<input type='submit' name='submit'>";
echo "</form>";

if(isset($_POST['submit'])){
    print_r($_FILES['user-file']);
    
}


