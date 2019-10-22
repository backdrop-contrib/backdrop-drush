<?php
/**
 * @file
 * Initial test suite for Backdrop Drush Extension.
 */

use PHPUnit\Framework\TestCase;

class DrushTests extends TestCase {
  /**
   * Test drush ctl command.
   */
  public function testDrushCtl() {
    $output = shell_exec('drush ctl');
    $this->assertStringContainsString('Type', $output);
    $this->assertStringContainsString('page', $output);
  }

  /**
   * Test drush st command.
   */
  public function testDrushSt() {
    $output = shell_exec('drush st');
    $this->assertStringContainsString('Backdrop version', $output);
    $this->assertStringContainsString('Backdrop bootstrap', $output);
    $this->assertStringContainsString('Successful', $output);
    $this->assertStringContainsString('PHP OS', $output);
    $this->assertStringContainsString('Backdrop Settings File', $output);
  }
}
