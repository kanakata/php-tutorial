<?php
//the bool type has only two values: true and false. and both are case insencitive i.e true == TRUE and false == FALSE.

//syntax:
$var = true;
$var = false;

//most common use of bools is in control stractures together with operators.

//to explicitly convert a value to boolean use (bool) cast.

$var = (bool) "foo"; // or a variable like integer ;

//values considered false include: false, 0, floats(0.0 and -0.0), empty string(""), array with zero elements($array = []), unit type null including unset variables, Internal objects that overload their casting behaviour to bool..

//NOTE every other value is considered true including(resource and NAN) and a point to note is that -1 is considered true  like any other non-zero (whether negative or positive) number!

//casting to boolean