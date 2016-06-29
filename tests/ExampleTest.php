<?php

use AspectMock\Test;
use LegacyTester\Runner;

class ExampleTest extends PHPUnit_Framework_TestCase
{
    protected function tearDown()
    {
        Test::clean();
    }

    /**
     * @test
     */
    public function it_should_run_the_legacy_file_and_get_expected_output()
    {
        // Arrange
        $expectedOutput = 'Test';

        // Act
        $actualOutput = Runner::execute(__DIR__ . '/fixture/legacy/index.php');

        // Assert
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}
