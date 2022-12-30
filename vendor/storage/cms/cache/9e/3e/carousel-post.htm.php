<?php 
use Rainlab\Blog\Models\Post;class Cms63aaec2c86d34495589334_d83fe6f723ff87869db11151bf2fed1dClass extends Cms\Classes\PartialCode
{
public function onStart()
{
  
    $this['posts'] = Post::isPublished()->orderBy('published_at', 'desc')->get();
}
}
