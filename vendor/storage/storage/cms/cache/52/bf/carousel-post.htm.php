<?php 
use Rainlab\Blog\Models\Post;class Cms63a9bf69aae1c705849995_b6f5ebb0fb7817985e5a9e3d9710b6bfClass extends Cms\Classes\PartialCode
{
public function onStart()
{
  
    $this['posts'] = Post::isPublished()->orderBy('published_at', 'desc')->get();
}
}
