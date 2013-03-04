<?php
/**
 * @file
 * Rate Drop-down widget template.
 */

if ($jump) {
  print $jump;
}

if ($info) {
  print '<div class="rate-info">' . $info . '</div>';
}

if ($display_options['description']) {
  print '<div class="rate-description">' . $display_options['description'] . '</div>';
}

if ($admin_results) {
  print $admin_results;
}
