<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Helpers\Userinfo;

class InfoTransformers extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform()
    {      
        return [
            'browser'   => $getbrowser = Userinfo::get_browsers(),
            'merk'      => $getdevice = Userinfo::get_device(),
            'os'        => $getos = Userinfo::get_os(),
        ];
    }
}
