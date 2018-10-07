<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'MnkyDevTeam\\Admin\\Database\\Seeders\\AdminDatabaseSeeder' => $baseDir . '/Database/Seeders/AdminDatabaseSeeder.php',
    'MnkyDevTeam\\Admin\\Http\\Controllers\\AdminController' => $baseDir . '/Http/Controllers/AdminController.php',
    'MnkyDevTeam\\Admin\\Http\\Controllers\\Auth\\LoginController' => $baseDir . '/Http/Controllers/Auth/LoginController.php',
    'MnkyDevTeam\\Admin\\Http\\Controllers\\Auth\\LogoutController' => $baseDir . '/Http/Controllers/Auth/LogoutController.php',
    'MnkyDevTeam\\Admin\\Http\\Controllers\\Employee\\EmployeeEnlistController' => $baseDir . '/Http/Controllers/Employee/EmployeeEnlistController.php',
    'MnkyDevTeam\\Admin\\Http\\Controllers\\Employee\\EmployeePageController' => $baseDir . '/Http/Controllers/Employee/EmployeePageController.php',
    'MnkyDevTeam\\Admin\\Http\\Controllers\\User\\ProfileController' => $baseDir . '/Http/Controllers/User/ProfileController.php',
    'MnkyDevTeam\\Admin\\Http\\Requests\\AdminLoginRequest' => $baseDir . '/Http/Requests/AdminLoginRequest.php',
    'MnkyDevTeam\\Admin\\Http\\Requests\\EnlistEmployeeRequest' => $baseDir . '/Http/Requests/EnlistEmployeeRequest.php',
    'MnkyDevTeam\\Admin\\Http\\Resources\\Employee' => $baseDir . '/Http/Resources/Employee/Employee.php',
    'MnkyDevTeam\\Admin\\Http\\Resources\\EmployeeCollection' => $baseDir . '/Http/Resources/Employee/EmployeeCollection.php',
    'MnkyDevTeam\\Admin\\Providers\\AdminServiceProvider' => $baseDir . '/Providers/AdminServiceProvider.php',
    'MnkyDevTeam\\Admin\\Tests\\Auth\\UserLoginTest' => $baseDir . '/Tests/Auth/UserLoginTest.php',
    'MnkyDevTeam\\Admin\\Tests\\Auth\\UserLogoutTest' => $baseDir . '/Tests/Auth/UserLogoutTest.php',
    'MnkyDevTeam\\Admin\\Tests\\Employee\\Api\\EmployeeListingTest' => $baseDir . '/Tests/Employee/Api/EmployeeListingTest.php',
    'MnkyDevTeam\\Admin\\Tests\\Employee\\EmployeeEnlistmentTest' => $baseDir . '/Tests/Employee/EmployeeEnlistmentTest.php',
    'MnkyDevTeam\\Admin\\Tests\\Employee\\EmployeePageTest' => $baseDir . '/Tests/Employee/EmployeePageTest.php',
);
