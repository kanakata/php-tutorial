<?php
//null: has only one value(null).
//undefined and inset() values will resolve to null.
//NOTE null is case insensitive i.e null is same as NULL

//syntax:
$var = null;
//or
$var = NULL;    

//NOTE type casting null has been deprecated as of php 7.2.0 and relying on it is discouraged i.e casting a variable to null only returns a null value but does not remove the variable or unset it's value.

//to check if a value is null use:
is_null($var);
//or
unset($var);