<?php
function idf_cache_object($transient = '', $object = null, $exp = 3600) {
	do_action('idf_cache_object', $transient, $object, $exp);
}

function idf_get_object($transient) {
	$cache = new IDF_Cache;
	return $cache->idf_get_object($transient);
}

function idf_flush_object($transient) {
	$cache = new IDF_Cache;
	return $cache->idf_flush_object($transient);
}
?>