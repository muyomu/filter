<?php

namespace muyomu\http\config;

use muyomu\config\annotation\Configuration;
use muyomu\config\base\GenericConfig;

#[Configuration("config_resource")]
class DefaultFileConfig extends GenericConfig
{
    protected array $configData = [
        "response_headers"=>[
            "Content-type"=>"application/octet-stream",
            "Accept-Ranges"=> "bytes",
            "Cache-Control"=>"no-store",
        ],
        "location"=>"../resource/file/"
    ];
}