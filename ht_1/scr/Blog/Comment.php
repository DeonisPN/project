<?php

namespace Denis\Pro\Blog;
use Denis\Pro\Blog\User;

class Comment
{
 public function __construct(
private int $id,
private int $user_id,
private int $post_id,
private string $text,


    
 )
 {
    
 }

/**
 * Get the value of user_id
 */ 
public function getUser_id()
{
return $this->user_id;
}

/**
 * Set the value of user_id
 *
 * @return  self
 */ 
public function setUser_id($user_id)
{
$this->user_id = $user_id;

return $this;
}

/**
 * Get the value of post_id
 */ 
public function getPost_id()
{
return $this->post_id;
}

/**
 * Set the value of post_id
 *
 * @return  self
 */ 
public function setPost_id($post_id)
{
$this->post_id = $post_id;

return $this;
}

/**
 * Get the value of text
 */ 
public function getText()
{
return $this->text;
}

/**
 * Set the value of text
 *
 * @return  self
 */ 
public function setText($text)
{
$this->text = $text;

return $this;
}
}