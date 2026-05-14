<?php
$path = "patrick";
echo $page = match ($path) {
    "patrick" => "kiprop",
};

echo "name is {$path}";