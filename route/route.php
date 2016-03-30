<?php
namespace MonitorByUrl;

function customMonitorEventReporting() {
    $configFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'config.php';
    if (!file_exists($configFile)) return;

    $config = include $configFile;

    $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

    if (array_key_exists($url, $config)) {
        zend_monitor_event_reporting($config[$url]);
    }
}

register_shutdown_function('MonitorByUrl\customMonitorEventReporting');
