<?php
//any content after ob_start will not be displayed . it will be captured and displayed after.
ob_start();

$html = ob_get_clean();