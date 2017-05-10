<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, iBenchu.org
 * @datetime 2017-05-09 15:14
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class OrderExpress.
 */
class OrderExpress extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'address_id',
        'courier_number',
        'express_company',
        'order_id',
        'user_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_order_expresses';
}
