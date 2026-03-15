<?php

namespace ScotNewbury\WordPressMultisiteTweaks;

if (!defined('ABSPATH')) {
  exit;
}

function sort_my_multisite_blog_listing($blogs)
{
  uasort($blogs, function ($a, $b) {
    return strcasecmp($a->blogname, $b->blogname);
  });
  return $blogs;
}

add_filter('get_blogs_of_user', __NAMESPACE__ . '\sort_my_multisite_blog_listing');