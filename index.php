<?php

/*
 * Responsive attributes addon for Bear Framework
 * https://github.com/ivopetkov/responsive-attributes-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

use \BearFramework\App;

$app = App::get();
$context = $app->contexts->get(__DIR__);

$app->clientPackages
    ->add('responsiveAttributes', function (IvoPetkov\BearFrameworkAddons\ClientPackage $package) use ($context) {
        $package->addJSCode(require_once __DIR__ . '/assets/responsiveAttributes.min.js.php');
        $package->get = 'return responsiveAttributes;';
    });
