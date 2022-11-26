<?php

namespace ProcessWire;

$all = $pages->find("id>0, include=all, limit=5, sort=id");
foreach ($all as $p) {
  echo "<div>{$p->path}</div>";
}
echo $all->renderPager();
