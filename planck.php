<?php
$ version = apache_get_version();
echo "$ version/n";?>

<?php
$ info = apache_lookup_uri('planck.php? var=value');
print_r ($info);

if(file_exists ($ info>filename)){
    echo'file exists!';
}
?>
define("pi", 3.1415926536);
$circunf = 2*pi*$raio