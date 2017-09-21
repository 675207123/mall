<script>
    import product from '../assets/images/thephone.png';
    import NeedBrowse from '../components/NeedBrowse.vue';
    import image1 from '../assets/images/head.png';

    export default {
        components: {
            NeedBrowse,
        },
        data() {
            return {
                data: {
                    brands: ['佳尔乐', 'HUGGIES/好奇', 'Pampers/帮宝适', 'HUGGIES/好奇', 'Pampers/帮宝适', 'HUGGIES/好奇', 'Pampers/帮宝适'],
                    classifications: ['纸尿裤', '拉拉裤', '尿片', '个人洗护'],
                    commendList: [
                        {
                            amount: 188,
                            img: image1,
                            name: '西部母婴推荐哆啦A梦可爱儿童玩具',
                            price: 48.88,
                        },
                        {
                            amount: 188,
                            img: image1,
                            name: '西部母婴推荐哆啦A梦可爱儿童玩具',
                            price: 48.88,
                        },
                        {
                            amount: 188,
                            img: image1,
                            name: '西部母婴推荐哆啦A梦可爱儿童玩具',
                            price: 48.88,
                        },
                        {
                            amount: 188,
                            img: image1,
                            name: '西部母婴推荐哆啦A梦可爱儿童玩具',
                            price: 48.88,
                        },
                        {
                            amount: 188,
                            img: image1,
                            name: '西部母婴推荐哆啦A梦可爱儿童玩具',
                            price: 48.88,
                        },
                    ],
                    made_address: ['中国', '日本', '美国', '英国'],
                    productList: [
                        {
                            id: '',
                            img: product,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            hot: true,
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            hot: false,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            hot: false,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            hot: false,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            hot: false,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            hot: false,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            hot: false,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            hot: false,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                        {
                            id: '',
                            img: product,
                            hot: false,
                            intro: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                            old_price: 46.88,
                            price: 3299.00,
                            pre_price: 1.21,
                            saleNum: 3324,
                        },
                    ],
                    sizes: ['M', 'L', 'XL', 'XXL'],
                },
            };
        },
    };
</script>
<template>
    <div class="search container padding-attribute">
        <p class="search-result">全部结果
            <i class="icon iconfont "> ></i>
            "尿不湿"&nbsp;&nbsp;&nbsp;&nbsp;商品共
            <span class="result-num">522</span>个
        </p>
        <div class="filter-box">
            <div class="row">
                <div class="filter-item pull-left">品牌:</div>
                <ul class="filter-content clearfix pull-left">
                    <li v-for="brand in data.brands"><a href="javascript:void (0)">{{ brand }}</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="filter-item pull-left">详细分类:</div>
                <ul class="filter-content pull-left">
                    <li v-for="classification in data.classifications"><a href="javascript:void (0)">纸尿裤</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="filter-item pull-left">尺寸规格:</div>
                <ul class="filter-content pull-left">
                    <li v-for="size in data.sizes"><a href="javascript:void (0)">{{ size }}</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="filter-item pull-left">产地:</div>
                <ul class="filter-content pull-left">
                    <li v-for="address in data.made_address"><a href="javascript:void (0)">{{ address }}</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
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
        </div>
        <div class="search-list container">
            <div class="product" v-for="product in data.productList">
                <router-link to="/mall/search/product-details">
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
                        <span>{{ product.pre_price }}元/片</span>
                    </p>
                    <p class="product-intro">{{ product.intro }}</p>
                    <p class="sales">本月销量<span> {{ product.saleNum }} </span>件</p>
                </router-link>
            </div>
        </div>
        <need-browse :commendList="commendList"></need-browse>
    </div>
</template>