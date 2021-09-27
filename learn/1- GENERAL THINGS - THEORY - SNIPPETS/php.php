//-----> Starting a snippet or class
// About this doc: https://www.php.net/manual/es/function.curl-setopt.php
If you are trying to update something on your server and you need to handle this update operation by PUT;

<?php
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_PUT, 1);
?>

are "useless" without;

<?php
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-HTTP-Method-Override: PUT'));
?>
//-----> End Of Snippet or Class

//-----> Starting a snippet or class
// To get all defined class that are user defined:

<?php
$userDefinedClasses = array_filter(
    get_declared_classes(),
    function($className) {
        return !call_user_func(
            array(new ReflectionClass($className), 'isInternal')
        );
    }
);
?>

Resource:https://stackoverflow.com/questions/9108714/use-get-declared-class-to-only-ouput-that-classes-i-declared-not-the-ones-php
Docs
// PHP Docs: https://www.php.net/manual/en/reflectionclass.isinternal.php
//-----> End Of Snippet or Class

//-----> Starting a snippet or class
// How to cut a text with a specific length...
<?php

    $string = 'This string is too long and will be cut short.';
    // Ej:
    $string = substr($string,0,30);

?>
// PHP Docs: https://www.hashbangcode.com/article/cut-string-specified-length-php
//-----> End Of Snippet or Class