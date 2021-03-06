<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8eb6e09ea49278a590a697114dc776ea
{
    public static $prefixLengthsPsr4 = [
        'M' =>
         [
            'MnkyDevTeam\\Admin\\' => 18,
         ],
    ];

    public static $prefixDirsPsr4 = [
        'MnkyDevTeam\\Admin\\' =>
         [
            0 => __DIR__ . '/../..' . '/',
         ],
    ];

    public static $classMap = [
        'MnkyDevTeam\\Admin\\Database\\Seeders\\AdminDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/AdminDatabaseSeeder.php',
        'MnkyDevTeam\\Admin\\Http\\Controllers\\AdminController' => __DIR__ . '/../..' . '/Http/Controllers/AdminController.php',
        'MnkyDevTeam\\Admin\\Http\\Controllers\\Auth\\LoginController' => __DIR__ . '/../..' . '/Http/Controllers/Auth/LoginController.php',
        'MnkyDevTeam\\Admin\\Http\\Controllers\\Auth\\LogoutController' => __DIR__ . '/../..' . '/Http/Controllers/Auth/LogoutController.php',
        'MnkyDevTeam\\Admin\\Http\\Controllers\\Employee\\EmployeeEnlistController' => __DIR__ . '/../..' . '/Http/Controllers/Employee/EmployeeEnlistController.php',
        'MnkyDevTeam\\Admin\\Http\\Controllers\\Employee\\EmployeePageController' => __DIR__ . '/../..' . '/Http/Controllers/Employee/EmployeePageController.php',
        'MnkyDevTeam\\Admin\\Http\\Controllers\\User\\ProfileController' => __DIR__ . '/../..' . '/Http/Controllers/User/ProfileController.php',
        'MnkyDevTeam\\Admin\\Http\\Requests\\AdminLoginRequest' => __DIR__ . '/../..' . '/Http/Requests/AdminLoginRequest.php',
        'MnkyDevTeam\\Admin\\Http\\Requests\\EnlistEmployeeRequest' => __DIR__ . '/../..' . '/Http/Requests/EnlistEmployeeRequest.php',
        'MnkyDevTeam\\Admin\\Http\\Resources\\Employee' => __DIR__ . '/../..' . '/Http/Resources/Employee/Employee.php',
        'MnkyDevTeam\\Admin\\Http\\Resources\\EmployeeCollection' => __DIR__ . '/../..' . '/Http/Resources/Employee/EmployeeCollection.php',
        'MnkyDevTeam\\Admin\\Providers\\AdminServiceProvider' => __DIR__ . '/../..' . '/Providers/AdminServiceProvider.php',
        'MnkyDevTeam\\Admin\\Tests\\Auth\\UserLoginTest' => __DIR__ . '/../..' . '/Tests/Auth/UserLoginTest.php',
        'MnkyDevTeam\\Admin\\Tests\\Auth\\UserLogoutTest' => __DIR__ . '/../..' . '/Tests/Auth/UserLogoutTest.php',
        'MnkyDevTeam\\Admin\\Tests\\Employee\\Api\\EmployeeListingTest' => __DIR__ . '/../..' . '/Tests/Employee/Api/EmployeeListingTest.php',
        'MnkyDevTeam\\Admin\\Tests\\Employee\\EmployeeEnlistmentTest' => __DIR__ . '/../..' . '/Tests/Employee/EmployeeEnlistmentTest.php',
        'MnkyDevTeam\\Admin\\Tests\\Employee\\EmployeePageTest' => __DIR__ . '/../..' . '/Tests/Employee/EmployeePageTest.php',
    ];

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8eb6e09ea49278a590a697114dc776ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8eb6e09ea49278a590a697114dc776ea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8eb6e09ea49278a590a697114dc776ea::$classMap;
        }, null, ClassLoader::class);
    }
}
