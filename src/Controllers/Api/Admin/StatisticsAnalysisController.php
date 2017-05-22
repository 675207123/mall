<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-22 16:42
 */
namespace Notadd\Mall\Controllers\Api\Admin;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Admin\Statistics\Analysis\DashBoardHandler;

/**
 * Class StatisticsAnalysisController.
 */
class StatisticsAnalysisController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Admin\Statistics\Analysis\DashBoardHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function dashboard(DashBoardHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    public function industry()
    {
        
    }
}
