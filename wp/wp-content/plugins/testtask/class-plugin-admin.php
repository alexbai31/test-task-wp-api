<?php

class PluginAdmin {

	private $pluginName;

	private $version;

	public function __construct( $pluginName, $version ) 
	{
		$this->pluginName = $pluginName;
		$this->version = $version;
	}

	public function fetchApi()
	{
		if(isset($_POST['fetchApi'])) {
			wp_send_json(
				json_decode(
					file_get_contents($_POST['url'])
				)
			);
		}
	}

	public function addPluginAdminMenu() 
	{
		add_options_page( 
			'Calc', 'Test task', 'manage_options', $this->pluginName, array($this, 'displayPluginSetupPage')
		);
	}

	public function displayPluginSetupPage() 
	{
		include_once( 'template-admin.php' );
	}
}