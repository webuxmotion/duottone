<?php
  $title = $title ?? 'Default title';
  $href = $href ?? null;
  $target = $target ?? null;
  $type = $type ?? null;
  $classes = '';

  $tag = $href ? 'a' : 'button';
  $hrefAttr = $href ? "href='$href'" : null;
  $targetAttr = $target ? "target='$target'" : null;

  if ($type) {
    $classes .= "button--type--$type";
  }
?>

<<?=$tag?>
  <?=$hrefAttr?>
  <?=$targetAttr?>
  class="button <?=$classes?>"
>
  <?=$title?>
</<?=$tag?>>