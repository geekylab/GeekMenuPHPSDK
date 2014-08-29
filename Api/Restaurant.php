<?php
/**
 * Created by PhpStorm.
 * User: johna
 * Date: 14/08/23
 * Time: 17:33
 */

namespace GeekMenu\Api;


class Restaurant extends AbstractApi
{
    public function show()
    {
        $data = $this->get('/restaurants');
        if ($data) {
            return $data->_embedded;
        }
        return false;
    }
} 