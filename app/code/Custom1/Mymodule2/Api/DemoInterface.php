<?php

namespace Custom1\Mymodule2\Api;
/**
 * for managing demo api
 * @api
 */

interface DemoInterface
{
    /**
     * Get name
     * 
     * @return string
     */

    public function getProfile();
    /**
     * create category
     * @param string[] $postdata
     * @return array
     */
    public function setCustomerGroup($postdata);
}