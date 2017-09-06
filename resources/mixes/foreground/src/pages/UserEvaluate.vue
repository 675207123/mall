<script>
    import product from '../assets/images/phone.png';

    export default {
        data() {
            return {
                evaluations: [
                    {
                        createdAt: '2017-02-09',
                        orderNumber: '11052646854585',
                        img: product,
                        storeName: 'xxx母婴用品店',
                        productName: 'Ｐurrfect diary 咕噜日记1-7岁儿童可爱短袜5双装可爱短袜5双装',
                        size: 'L',
                        price: 39.9,
                        star: 2,
                        evaluation: `优秀的商品蛮好的黎明眼镜正品PRADA普拉达调养眼镜，不错不错很漂亮黎
                                    明眼镜正品PRADA普拉达调养眼镜，不错不错很漂亮优秀的商品蛮好的黎明
                                    眼镜正品PRADA普拉达调养眼镜，不错不错很漂亮。`,
                        evaluationImg: [product, product],
                    },
                ],
            };
        },
    };
</script>
<template>
    <div class="user-evaluation">
        <div class="address-title">
            <h4>交易评价</h4>
        </div>
        <ul>
            <li v-for="evaluation in evaluations">
                <div>
                    <span>{{ evaluation.createAt }}</span>
                    <span>订单号： {{ evaluation.orderNumber }}</span>
                    <span>{{ evaluation.storeName }}</span>
                </div>
                <div class="clearfix">
                    <div class="pull-left clearfix">
                        <img :src="evaluation.img" alt="" class="pull-left">
                        <div>
                            <p>{{ evaluation.productName }}
                                <span>尺码{{ evaluation.size }}</span>
                            </p>
                            <p>{{ evaluation.price }}</p>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div>
                            <span>商品评分</span>
                            <p>
                                <i class="icon iconfont icon-xing" v-for="item in 5"></i>
                            </p>
                        </div>
                        <div>
                            <span>评价晒单</span>
                            <div>
                                <p>{{ evaluation.evaluation }}</p>
                                <div>
                                    <img :src="item" alt=""
                                         v-for="(item,index) in evaluation.evaluationImg" :key="index">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>