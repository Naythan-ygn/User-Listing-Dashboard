<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-15 01:56:00
 * @ Description:
 */
$GLOBALS['project_name'] = 'mysql_crud_sample5';

function getBaseUrl()
{
    // Check if the script is running on a server and if the request URI is available
    if (isset($_SERVER['SERVER_NAME']) && isset($_SERVER['REQUEST_URI'])) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['SERVER_NAME'] . ':81';
        $uri_parts = explode('/', $_SERVER['REQUEST_URI']);
        $project_root_index = array_search($GLOBALS['project_name'], $uri_parts);

        if ($project_root_index !== false) {
            // die($host);
            return $protocol . '://' . $host . implode('/', array_slice($uri_parts, 0, $project_root_index + 1));
        } else {
            // Fallback if the project folder name isn't in the URI (less reliable)
            return $protocol . '://' . $host . dirname($_SERVER['PHP_SELF']) . '/';
        }
    }
    return '';
}
?>