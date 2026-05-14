<?php

function randomTokenGenerator() {
    return base64_encode(random_int(100000, 1000000) . random_int(100000, 1000000));
}
