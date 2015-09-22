<?php

final class GPConfig
{
	/**
	 * Array to store config variables
	 */
	private $config;

	/**
	 * Call this method to get singleton
	 *
	 * @return GPConfig
	 */
	public static function getInstance() {

		static $inst = null;
		if ( $inst === null ) {
			$inst = new GPConfig();
		}
		return $inst;
	}

	public function set_cfg( $key, $val ) {
		$this->config[ $key ] = $val;
	}

	public function get_cfg( $key, $default = false ) {
		if ( isset( $this->config[ $key ] ) ) {
			return $this->config[ $key ];
		} else {
			return $default;
		}
	}

	/**
	 * Private constructor (nobody else can instance it)
	 */
	private function __construct() {

		$this->config = gp_load_yaml( '/etc/config.yaml' );
	}
}

?>
