Monitor By URL
==============
This Zend Server route plugin allows to specify monitoring settings by URL. It disables for example the "High Memory Usage" for a specific request. 
The configuration is a simple PHP array defined in config.php . Modifications can be done by editing this file directly on the server, ut the recommended way is to make the changes locally, zip the whole directory structure and deploy again.
See http://files.zend.com/help/Zend-Server/content/deploying_a_plugin.htm

Please note, that after deploying the plugin Zend Server has to be restarted.
