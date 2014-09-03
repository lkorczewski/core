<?php

namespace Core;

interface Service_Container_Interface {
	function set($key, $definition);
	function get($key);
}