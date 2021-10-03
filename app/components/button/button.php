<?php
  $title = $title ?? 'Default title';
  $href = $href ?? null;
  $target = $target ?? null;
  $type = $type ?? null;
  $active = $active ?? null;
  $classes = '';

  $tag = $href ? 'a' : 'button';
  $hrefAttr = $href ? "href='$href'" : null;
  $targetAttr = $target ? "target='$target'" : null;

  if ($type) {
    $classes .= "button--type--$type";
  }

  if ($active) {
    $classes .= " is-active";
  }
?>

<<?=$tag?>
  <?=$hrefAttr?>
  <?=$targetAttr?>
  class="button <?=$classes?>"
>
  <?=$title?>
</<?=$tag?>>