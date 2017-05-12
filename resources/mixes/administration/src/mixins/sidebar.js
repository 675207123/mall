export default function (injection) {
    injection.useSidebar('mall', [
        {
            children: [
                {
                    path: '/mall/goods',
                    title: '商品管理',
                },
                {
                    path: '/mall/goods/library',
                    title: '商品库管理',
                },
                {
                    path: '/mall/goods/category',
                    title: '分类管理',
                },
                {
                    path: '/mall/goods/brand',
                    title: '品牌管理',
                },
                {
                    path: '/mall/goods/type',
                    title: '类型管理',
                },
                {
                    path: '/mall/goods/standard',
                    title: '规格管理',
                },
                {
                    path: '/mall/goods/picture',
                    title: '图片空间',
                },
            ],
            icon: 'plus',
            title: '商品',
        },
        {
            children: [
                {
                    path: '/mall/store',
                    title: '店铺管理',
                },
                {
                    path: '/mall/store/level',
                    title: '店铺等级',
                },
                {
                    path: '/mall/store/category',
                    title: '店铺分类',
                },
                {
                    path: '/mall/store/dynamics',
                    title: '店铺动态',
                },
                {
                    path: '/mall/store/postal',
                    title: '包邮',
                },
            ],
            icon: 'plus',
            title: '店铺',
        },
        {
            children: [
                {
                    path: '/mall/order',
                    title: '商品订单',
                },
                {
                    path: '/mall/order/refund',
                    title: '退款管理',
                },
                {
                    path: '/mall/order/rejected',
                    title: '退货管理',
                },
                {
                    path: '/mall/order/evaluation',
                    title: '评价管理',
                },
                {
                    path: '/mall/order/complain',
                    title: '投诉管理',
                },
            ],
            icon: 'plus',
            title: '订单',
        },
        {
            children: [
                {
                    path: '/mall/operation',
                    title: '结算管理',
                },
                {
                    path: '/mall/operation/delivery',
                    title: '自提点',
                },
            ],
            icon: 'plus',
            title: '运营',
        },
        {
            children: [
                {
                    path: '/mall/statistics',
                    title: '概述及设置',
                },
                {
                    path: '/mall/statistics/analysis',
                    title: '行业分析',
                },
                {
                    path: '/mall/statistics/member',
                    title: '会员统计',
                },
                {
                    path: '/mall/statistics/store',
                    title: '店铺统计',
                },
                {
                    path: '/mall/statistics/sales',
                    title: '销量分析',
                },
                {
                    path: '/mall/statistics/goods',
                    title: '商品分析',
                },
                {
                    path: '/mall/statistics/aftersales',
                    title: '售后分析',
                },
            ],
            icon: 'plus',
            title: '统计',
        },
        {
            children: [
                {
                    path: '/mall/sales/spike',
                    title: '秒杀活动',
                },
                {
                    path: '/mall/sales/fulldown',
                    title: '满减（暂空）',
                },
            ],
            icon: 'plus',
            title: '促销',
        },
        {
            children: [
                {
                    path: '/mall/configuration',
                    title: '商城设置',
                },
                {
                    path: '/mall/configuration/search',
                    title: '搜索设置',
                },
                {
                    path: '/mall/configuration/advertisement',
                    title: '广告设置',
                },
                {
                    path: '/mall/configuration/image',
                    title: '图片设置',
                },
                {
                    path: '/mall/configuration/message',
                    title: '消息通知',
                },
                {
                    path: '/mall/configuration/pay',
                    title: '支付方式',
                },
            ],
            icon: 'plus',
            title: '设置',
        },
    ]);
}