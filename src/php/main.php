<?php

function get_random_int(){
    return random_int(0,1024);
}

function request($url) {
    $response = file_get_contents($url."?q=".get_random_int());
    echo "$response\n";
}

function main(){
    $iterations = intval(getenv('ITERATIONS'));
    $url = getenv('HTTP_REQUEST');
    echo "PHP START {$iterations} -> {$url}\n";
    for($i=0;$i<$iterations;$i++){
        $i1 = get_random_int();
        $i2 = get_random_int();
        $f1 = get_random_int()/(get_random_int() || 1);
        $f2 = get_random_int()/(get_random_int() || 1);
        $ints = $i1+$i2;
        $floats = $f1*$f2;
        $s = str_repeat('A',1024);
        unset($s);
        request($url);
    }
    echo "PHP END\n";
}

main();