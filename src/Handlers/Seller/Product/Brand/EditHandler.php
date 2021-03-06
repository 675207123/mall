<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 18:38
 */
namespace Notadd\Mall\Handlers\Seller\Product\Brand;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Foundation\Validation\Rule;
use Notadd\Mall\Models\ProductBrand;

/**
 * Class EditHandler.
 */
class EditHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $this->validate($this->request, [
            'category_id' => [
                Rule::exists('mall_product_categories'),
                Rule::numeric(),
                Rule::required(),
            ],
            'id'          => [
                Rule::exists('mall_product_brands'),
                Rule::numeric(),
                Rule::required(),
            ],
            'logo'        => Rule::required(),
            'name'        => Rule::required(),
            'order'       => Rule::numeric(),
            'recommend'   => Rule::numeric(),
            'show'        => [
                Rule::in([
                    'image',
                    'text',
                ]),
                Rule::required(),
            ],
            'store_id'    => [
                Rule::exists('mall_stores'),
                Rule::numeric(),
                Rule::required(),
            ],
        ], [
            'category_id.exists'   => '没有对应的商品分类信息',
            'category_id.numeric'  => '分类 ID 必须为数值',
            'category_id.required' => '分类 ID 必须填写',
            'id.exists'            => '没有对应的品牌信息',
            'id.numeric'           => '品牌 ID 必须为数值',
            'id.required'          => '品牌 ID 必须填写',
            'logo.required'        => '品牌 Logo 必须填写',
            'name.required'        => '品牌名称必须填写',
            'order.numeric'        => '排列顺序必须为数值',
            'recommend.numeric'    => '是否推荐为数值',
            'show.in'              => '显示方式值超越限制',
            'show.required'        => '显示方式必须填写',
            'store_id.exists'      => '没有对应的店铺信息',
            'store_id.numeric'     => '店铺 ID 必须为数值',
            'store_id.required'    => '店铺 ID 必须填写',
        ]);
        $this->beginTransaction();
        $brand = ProductBrand::query()->find($this->request->input('id'));
        $data = $this->request->only([
            'category_id',
            'logo',
            'name',
            'order',
            'recommend',
            'show',
            'store_id',
        ]);
        if ($brand instanceof ProductBrand && $brand->update($data)) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('更新品牌信息成功！');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('没有对应的品牌信息！');
        }
    }
}
