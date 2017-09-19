<script>
    import Paginate from '../components/Paginate.vue';
    import shop from '../assets/images/shopBanner.png';
    import service from '../assets/images/service.png';
    import product from '../assets/images/thephone.png';
    import shopImg from '../assets/images/img_lofo.png';
    import NeedBrowse from '../components/NeedBrowse.vue';
    import RightSide from '../layouts/RightSide.vue';

    export default {
        components: {
            NeedBrowse,
            RightSide,
            Paginate,
        },
        data() {
            return {
                shop: {
                    afterSaleServices: [
                        {
                            name: '客服1',
                            img: service,
                        },
                        {
                            name: '客服2',
                            img: service,
                        },
                    ],
                    banner: [
                        {
                            img: shop,
                        },
                        {
                            img: shop,
                        },
                        {
                            img: shop,
                        },
                        {
                            img: shop,
                        },
                    ],
                    classificationList: [
                        {
                            title: '查看所有商品',
                            classifications: [
                                {
                                    id: 1,
                                    name: '按销量',
                                },
                                {
                                    id: 1,
                                    name: '按价格',
                                },
                                {
                                    id: 1,
                                    name: '按新品',
                                },
                                {
                                    id: 1,
                                    name: '特价折扣区',
                                },
                            ],
                            show: true,
                        },
                        {
                            title: '断码清仓区',
                            classifications: [
                                {
                                    id: 1,
                                    name: '按销量',
                                },
                                {
                                    id: 1,
                                    name: '按价格',
                                },
                            ],
                            show: false,
                        },
                        {
                            title: '潮牌',
                            classifications: [
                                {
                                    id: 1,
                                    name: '按新品',
                                },
                                {
                                    id: 1,
                                    name: '特价折扣区',
                                },
                            ],
                            show: false,
                        },
                        {
                            title: '男装',
                            classifications: [
                                {
                                    id: 1,
                                    name: '按销量',
                                },
                            ],
                            show: false,
                        },
                        {
                            title: '短袖衬衫',
                            classifications: [
                                {
                                    id: 1,
                                    name: '按销量',
                                },
                                {
                                    id: 1,
                                    name: '特价折扣区',
                                },
                            ],
                            show: false,
                        },
                        {
                            title: '裤子',
                            classifications: [
                                {
                                    id: 1,
                                    name: '按销量',
                                },
                                {
                                    id: 1,
                                    name: '特价折扣区',
                                },
                            ],
                            show: false,
                        },
                    ],
                    img: shopImg,
                    name: 'xxx旗舰店',
                    offHours: '23:00',
                    preSaleServices: [
                        {
                            name: '客服1',
                            img: service,
                        },
                        {
                            name: '客服2',
                            img: service,
                        },
                        {
                            name: '客服3',
                            img: service,
                        },
                        {
                            name: '客服4',
                            img: service,
                        },
                    ],
                    productList: [
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            old_price: 46.88,
                            price: 3299.00,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            saleNum: 3324,
                        },
                    ],
                    score: 9.2,
                    workingHours: '9:00',
                },
                current_page: 1,
                pages: 10,
            };
        },
        methods: {
            showSubcategories(item) {
                item.show = !item.show;
            },
            switchPage(page) {
                this.current_page = page;
            },
        },
    };
</script>
<template>
    <div class="shop-home">
        <div class="container home-shop clearfix">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" :data-slide-to="index-1" :class="{active:index=1}"
                        v-for="index in shop.banner.length"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item" :class="{active:index === 1}" v-for="(item,index) in shop.banner">
                        <img :src="item.img">
                    </div>
                </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="shop-wrap pull-left">
                <div class="shop-title">
                    <img :src="shop.img" alt="">
                    <p>{{ shop.name }}</p>
                    <p>店铺评分：<i>{{ shop.score }}</i></p>
                    <a class="btn">关注店铺</a>
                </div>
                <div class="workingTime">
                    <p>工作时间  <span>{{ shop.workingHours }}-{{ shop.offHours }}</span></p>
                    <h5>售前客服</h5>
                    <ul class="clearfix">
                        <li class="pull-left" v-for="service in shop.preSaleServices">
                            <router-link to="/">
                                {{ service.name }}
                                <img :src="service.img" alt="">
                            </router-link>
                        </li>
                    </ul>
                    <h5>售后客服</h5>
                    <ul class="clearfix">
                        <li class="pull-left"
                            v-for="service in shop.afterSaleServices">
                            <router-link to="/">
                                {{ service.name }}
                                <img :src="service.img" alt="">
                            </router-link>
                        </li>
                    </ul>
                </div>
                <div class="categories">
                    <h3>商品分类</h3>
                    <ul>
                        <li v-for="item in shop.classificationList">
                            <p @click="showSubcategories(item)">
                                <i class="text-center" v-if="item.show === false">+</i>
                                <i class="text-center" v-if="item.show === true">-</i>
                                {{ item.title }}</p>
                            <transition name="slide">
                                <ul class="clearfix" v-show="item.show">
                                    <li class="pull-left"
                                        v-for="classification in item.classifications">
                                        {{ classification.name }}
                                    </li>
                                </ul>
                            </transition>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-list pull-right clearfix">
                <div class="arrangement-method clearfix">
                    <ul class="clearfix pull-left">
                        <li class="active text-center pull-left">人气<i class="icon iconfont icon-paixu"> </i></li>
                        <li class="text-center pull-left">销量<i class="icon iconfont icon-paixu"> </i></li>
                        <li class="text-center pull-left">价格<i class="icon iconfont icon-paixu"> </i></li>
                        <li class="text-center pull-left">新品<i class="icon iconfont icon-paixu"> </i></li>
                    </ul>
                    <div class="price">
                        <input type="number" min="0" placeholder="￥">
                        -
                        <input type="number" min="0" placeholder="￥">
                    </div>
                    <div class="check-box select">
                        <span><input type="checkbox" class="input_check" id="check3"><label for="check3"> </label></span>
                        包邮
                    </div>
                    <div class="check-box select">
                        <span><input type="checkbox" class="input_check" id="check4"><label for="check4"> </label></span>
                        折扣
                    </div>
                    <span class="page pull-right">
                    1/10
                    <i class="icon iconfont icon-gengduo page-pre active"> </i>
                    <i class="icon iconfont icon-gengduo page-pre"> </i>
                </span>
                </div>
                <div class="product clearfix">
                    <router-link class="pull-left"
                                 :key="index"
                                 to="/mall/search/product-details" v-for="(product, index) in shop.productList">
                        <img :src="product.img"/>
                        <p>
                            <em>
                                <b>￥</b>
                                {{ product.price }}
                            </em>
                            <s>
                                <b>￥</b>
                                {{ product.old_price }}
                            </s>
                        </p>
                        <p class="product-intro">{{ product.intro }}</p>
                        <p class="sales">本月销量<span>{{ product.saleNum }}</span>件</p>
                    </router-link>
                </div>
            </div>
            <div class="text-center" v-show="pages > 1">
                <paginate
                    :pageCount="pages"
                    :pageRange="3"
                    :marginPages="2"
                    :clickHandler="switchPage"
                    prevText="上一页"
                    nextText="下一页"
                    containerClass="pagination no-margin"
                    pageClass="page-item">
                </paginate>
            </div>
        </div>
        <need-browse></need-browse>
        <right-side></right-side>
    </div>
</template>