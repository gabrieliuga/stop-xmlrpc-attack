<?php

class StopXmlRpcAttackTest extends WP_UnitTestCase {

	function testClassIsInstanciated() {
		$this->assertTrue(is_object($GLOBALS['plugin_stop_xmlrpc_attack']));
	}

	function testRange2CIDR() {

		$this->assertEquals($GLOBALS['plugin_stop_xmlrpc_attack']->range2cidr('66.155.38.0', '66.155.38.255'), '66.155.38.0/24'); // test a /24 net.
		$this->assertEquals($GLOBALS['plugin_stop_xmlrpc_attack']->range2cidr('66.135.48.128', '66.135.48.255'), '66.135.48.128/25'); // test a /25 net.
		$this->assertEquals($GLOBALS['plugin_stop_xmlrpc_attack']->range2cidr('216.151.209.64', '216.151.209.127'), '216.151.209.64/26'); // test a /26 net.

	}

}

