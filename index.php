<?php // STATIC PROPERTIES
      // declaring class properties or methods as static makes them accessible
      // without needing an instantiation of the class
      // a property declared as static cannot be accessed with an instantiated class object
      // (though a static method can)
      // because static methods are callable without an instance of the object created
      // the pseudo-variable '$this' is not available inside the method declared as static

class Weather
{
    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFarenheit($celsius)
    {
        return ($celsius * 9 / 5 + 32).'<br/>';
    }

    public static function determineTempConditions($farenheit)
    {
        if ($farenheit < 40) {
            return self::$tempConditions[0].'<br/>';
        }
        if ($farenheit < 70) {
            return self::$tempConditions[1].'<br/>';
        }

        return self::$tempConditions[2].'<br/>';
        // since an instance does not exist, you use 'self::property'
        // this will refer to the actual class itself and its property
        // self = Weather class
    }
}

print_r(Weather::$tempConditions);
// this is a static method
// without the need to create an instance to reference
// you can use static properties/methods like so
// this will have direct access to those properties or methods

echo Weather::celsiusToFarenheit(24);
echo Weather::determineTempConditions(80);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
</head>

<body>

</body>

</html>