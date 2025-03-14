<?php

function get_ip_address()
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER)) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, array('flags' => 'FILTER_FLAG_IPV4|FILTER_FLAG_IPV6|FILTER_FLAG_NO_PRIV_RANGE|FILTER_FLAG_NO_RES_RANGE')) !== false) {
                    return $ip;
                }
            }
        }
    }
}
