<?php
$type = "";
//they include: null, ol, int, float, string, array, object, callable, resource


//due to php dynamic typed nature you do not need to specify the type of variable simply because they are determined during runtime. types are strict on the operation that can be done on them, but just like javascript they can be type juggled by the interprator to avoid any unnecessary error which according to me is a bit of a factor you need to consider when writing clean code which meets industry standards.

//to get the value off a type or check type check you can use:
var_dump($type);
get_debug_type($type);