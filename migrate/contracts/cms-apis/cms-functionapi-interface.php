<?php
namespace PoP\PostMeta;

interface FunctionAPI
{
	public function getMetaKey($meta_key);
    public function getPostMeta($post_id, $key, $single = false);
    public function deletePostMeta($post_id, $meta_key, $meta_value = '');
    public function addPostMeta($post_id, $meta_key, $meta_value, $unique = false);
}
