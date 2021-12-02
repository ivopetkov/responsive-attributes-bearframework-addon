<?php

/*
 * Responsive attributes addon for Bear Framework
 * https://github.com/ivopetkov/responsive-attributes-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

/**
 * @runTestsInSeparateProcesses
 */
class ResponsiveAttributesTest extends BearFramework\AddonTests\PHPUnitTestCase
{

    /**
     * 
     */
    public function testOutput()
    {
        $app = $this->getApp();

        $html = '<html><head><link rel="client-packages-embed" name="responsiveAttributes"></head></html>';
        $result = $app->clientPackages->process($html);

        $this->assertTrue(strpos($result, '<script>var responsiveAttributes=') !== false);
    }
}
