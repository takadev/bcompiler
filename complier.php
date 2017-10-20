<?php
$fh = fopen("./sample","r");
bcompiler_read($fh);
fclose($fh);
print_r(get_defined_classes());
