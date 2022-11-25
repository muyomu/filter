<?php

namespace muyomu\filter;

use muyomu\http\client\GetClient;

class FilterExecutor
{
    private array $filterObjects = array();

    public function doFilterChain():void{
        if (!empty($this->filterObjects)){
            $objects = array_reverse($this->filterObjects);
            $filter = array_pop($objects);
            if (!is_null($filter)){
                $filter->filter();
            }
        }
    }

    public function addFilter(GetClient $filter):void{
        $this->filterObjects[] = $filter;
    }

}