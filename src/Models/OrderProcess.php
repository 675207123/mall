<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, iBenchu.org
 * @datetime 2017-05-09 15:44
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class OrderProcess.
 */
class OrderProcess extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'order_id',
        'status',
        'user_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_order_processes';
}
