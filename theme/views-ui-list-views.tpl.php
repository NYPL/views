<?php
// $Id*
/**
 * @file
 *
 */
?>
<?php if (!module_exists('advanced_help')): ?>
  <?php print t('If you install the advanced help module from !href, Views will provide more and better help.', array('!href' => l('http://drupal.org/project/advanced_help', 'http://drupal.org/project/advanced_help'))); ?>
<?php endif; ?>
<?php print $widgets; ?>
<?php foreach ($views as $view): ?>
  <table class="views-entry">
    <tbody>
      <tr>
        <td class="view-name">
          <?php print $help_type_icon; ?>
          <?php print t('<em>@type</em> view: <strong>@view</strong>', array('@type' => $view->type, '@view' => $view->name)); ?>
          <?php if (!empty($view->tag)): ?>
            &nbsp;(<?php print $view->tag; ?>)
          <?php endif; ?>
        </td>
        <td class="view-ops"><?php print $view->ops ?></td>
      </tr>
      <tr>
        <td>
          <?php if ($view->title): ?>
            <?php print t('Title: @title', array('@title' => $view->title)); ?> <br />
          <?php endif; ?>
          <?php if ($view->path): ?>
            <?php print t('Path: !path', array('!path' => $view->path)); ?> <br />
          <?php endif; ?>
          <?php if ($view->displays): ?>
            <em><?php print $view->displays; ?> </em><br />
          <?php endif; ?>
        </td>
        <td colspan="2" class="description">
          <?php print $view->description; ?>
        </td>
      </tr>
    </tbody>
  </table>
<?php endforeach; ?>
