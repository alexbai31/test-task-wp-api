<?php

class Plugin 
{

	private $pluginName;

	private $version;

	public function __construct()
	{
		$this->pluginName = 'testtask';
		$this->version = '1.0.0';

		$this->loadDependencies();
	}

	private function loadDependencies()
	{
		require_once plugin_dir_path( __FILE__ ) . 'class-plugin-admin.php';
	}

	public function init()
	{
		$this->setAdminHooks();
	}

	private function setAdminHooks()
	{
		$pluginAdmin = new PluginAdmin( $this->pluginName, $this->version );
		
		add_action( 'admin_init', array( $pluginAdmin, 'fetchApi' ));
		add_action( 'admin_menu', array( $pluginAdmin, 'addPluginAdminMenu' ));
	}
}