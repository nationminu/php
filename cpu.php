<?php
// bad example
function expexiveOperation() {
    sleep(1);
    return "Hello";
}
for ($i=0; $i<10; $i++) {
    $value = expexiveOperation();
    echo $value;
}

?>
