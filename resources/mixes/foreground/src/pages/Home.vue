<script>
    import { swiper, swiperSlide } from 'vue-awesome-swiper';
    import store from '../store';
    import image1 from '../assets/images/img_04.png';
    import image3 from '../assets/images/img_06-1.png';
    import image4 from '../assets/images/kitty.png';
    import slideImg from '../assets/images/slide-img.png';
    import picture1 from '../assets/images/img_02-1.png';
    import picture2 from '../assets/images/img_02-2.png';
    import picture3 from '../assets/images/offer_img_01.png';
    import RightSide from '../layouts/RightSide.vue';
    import NeedBrowse from '../components/NeedBrowse.vue';

    export default {
        components: {
            NeedBrowse,
            RightSide,
            swiper,
            swiperSlide,
        },
        computed: {
            hours() {
                const time = this.deviationTime / 1000;
                const hour = this.formate(parseInt((time / 3600), 10));
                return hour;
            },
            minutes() {
                const time = this.deviationTime / 1000;
                const minutes = this.formate(parseInt((time / 60) % 60, 10));
                return minutes;
            },
            seconds() {
                const time = this.deviationTime / 1000;
                const second = this.formate(parseInt(time % 60, 10));
                return second;
            },
        },
        data() {
            return {
                activeTab: 0,
                deviationTime: null,
                newProduct: [
                    {
                        img: image3,
                        name: '舒适耐用儿童睡椅',
                        price: 98.00,
                        title: '新品上架',
                    },
                    {
                        img: image3,
                        name: '舒适耐用儿童睡椅',
                        price: 98.00,
                        title: '新品上架',
                    },
                    {
                        img: image3,
                        name: '舒适耐用儿童睡椅',
                        price: 98.00,
                        title: '新品上架',
                    },
                    {
                        img: image3,
                        name: '舒适耐用儿童睡椅',
                        price: 98.00,
                        title: '新品上架',
                    },
                ],
                recommendList: [
                    {
                        icon: 'icon-dianzan',
                        title: '品质推荐',
                        recommend: [
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                        ],
                    },
                    {
                        icon: 'icon-dianzan',
                        title: '特价优惠',
                        recommend: [
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                        ],
                    },
                    {
                        icon: 'icon-dianzan',
                        title: '精选分类',
                        recommend: [
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                            {
                                img: image1,
                                intro: '满300减50优惠折扣',
                                title: '年末特惠',
                            },
                        ],
                    },
                ],
                slideList: [
                    {
                        discount: '2折',
                        img: slideImg,
                        intro: '大牌低至大牌低至',
                        title: '品质生活',
                    },
                    {
                        discount: '2折',
                        img: slideImg,
                        intro: '大牌低至大牌低至',
                        title: '品质生活',
                    },
                    {
                        discount: '2折',
                        img: slideImg,
                        intro: '大牌低至大牌低至',
                        title: '品质生活',
                    },
                    {
                        discount: '2折',
                        img: slideImg,
                        intro: '大牌低至大牌低至',
                        title: '品质生活',
                    },
                ],
                spikeInfo: {
                    endTime: '2017-07-15 10:06:00',
                    spikeList: [
                        {
                            img: image4,
                            name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                            price1: 34.00,
                            price2: 98.00,
                        },
                        {
                            img: image4,
                            name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                            price1: 34.00,
                            price2: 98.00,
                        },
                        {
                            img: image4,
                            name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                            price1: 34.00,
                            price2: 98.00,
                        },
                        {
                            img: image4,
                            name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                            price1: 34.00,
                            price2: 98.00,
                        },
                        {
                            img: image4,
                            name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                            price1: 34.00,
                            price2: 98.00,
                        },
                        {
                            img: image4,
                            name: '舒适耐用儿童睡椅舒适耐用儿童睡椅',
                            price1: 34.00,
                            price2: 98.00,
                        },
                    ],
                },
                scrollPos: 0,
                show: false,
                swiperOption: {
                    autoplay: 3000,
                    loop: true,
                    notNextTick: true,
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    paginationBulletRender(s, index, className) {
                        return `<span class="${className}">${(index + 1)}</span>`;
                    },
                },
                typeList: {
                    typeList1: {
                        module: '女装外套',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                        ],
                    },
                    typeList2: {
                        module: '母婴专区',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                        ],
                    },
                    typeList3: {
                        module: '棉品寝卧',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                        ],
                    },
                    typeList4: {
                        module: '护理美妆',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                        ],
                    },
                    typeList5: {
                        module: '内衣服饰',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                        ],
                    },
                    typeList6: {
                        module: '婴儿食品',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                        ],
                    },
                    typeList7: {
                        module: '婴儿纸品',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                    },
                    typeList8: {
                        module: '幼儿玩具',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                        ],
                    },
                    typeList9: {
                        module: '育婴心得',
                        module_img: picture1,
                        module_item: ['大衣', '卫衣', '针织', '打底', '大衣1'],
                        newProduct: [
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                            {
                                img: picture2,
                                intro: '舒适耐实用儿童睡椅',
                                title: '新品上架',
                            },
                        ],
                        offerList: [
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                            {
                                img: picture3,
                                intro: '舒适耐实用儿童睡椅',
                                title: '满减优惠',
                            },
                        ],
                    },
                },
            };
        },
        methods: {
            switchTab(index) {
                this.activeTab = index;
            },
            toTop() {
                const timeOut = setInterval(() => {
                    if (document.body.scrollTop !== 0 || document.documentElement.scrollTop !== 0) {
                        window.scrollBy(0, -20);
                    } else {
                        clearInterval(timeOut);
                    }
                }, 5);
            },
            formate(time) {
                if (time >= 10) {
                    return time;
                }
                return `0${time}`;
            },
            cutDown() {
                const endTime = new Date(this.spikeInfo.endTime).getTime();
                const nowTime = new Date().getTime();
                const deviationTime = (endTime - nowTime);
                this.deviationTime = deviationTime;
            },
        },
        mounted() {
            store.commit('request', true);
            this.cutDown();
            const countdown = setInterval(() => {
                if (this.deviationTime > 0) {
                    this.deviationTime = this.deviationTime - 1000;
                } else {
                    clearInterval(countdown);
                }
            }, 1000);
            window.onscroll = () => {
                let scrollTop;
                if ((navigator.userAgent.indexOf('MSIE') >= 0) && (navigator.userAgent.indexOf('Opera') < 0)) {
                    scrollTop = document.documentElement.scrollTop;
                } else {
                    scrollTop = document.body.scrollTop;
                }
                if (scrollTop > 1300) {
                    this.show = true;
                } else {
                    this.show = false;
                }
            };
        },
    };
</script>
<template>
    <div class="home padding-attribute">
        <!---->
        <div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <swiper :options="swiperOption" ref="mySwiperA">
                    <swiper-slide v-for="(item, index) in slideList" :key="item.Id">
                        <router-link to="/">
                            <img :src="item.img">
                        </router-link>
                    </swiper-slide>
                    <div class="swiper-pagination" slot="pagination"></div>
                </swiper>
            </div>
            <!--新品上架-->
            <div class="new-product">
                <div class="container">
                    <div>
                        <router-link :to="{ name: 'product-details' }" class="col-sm-3 col-xs-3 row-content row-margin"
                                     v-for="(item, index) in newProduct" :key="index">
                            <div class="img-box">
                                <img :src="item.img" alt="">
                            </div>
                            <div class="product">
                                <p class="name">{{ item.title }}</p>
                                <p class="intro"><span>{{ item.name }}</span> <span class="money">&yen; <i>{{ item.price }}</i></span></p>
                            </div>
                        </router-link>
                    </div>
                </div>
            </div>
            <!--限时秒杀-->
            <div class="time-spike">
                <div class="container">
                    <div class="title clearfix">
                        <h3>
                            <i class="icon iconfont icon-miaosha"></i>
                            <a @click="switchTab(0)" :class="{active:activeTab === 0}">限时秒杀</a>
                            <a @click="switchTab(1)" :class="{active:activeTab === 1}">新品预售</a>
                            <a @click="switchTab(2)" :class="{active:activeTab === 2}">满减活动</a>
                        </h3>
                        <p class="cutDown">还有&nbsp;<span>{{ hours }}</span><i>:</i><span>{{ minutes }}</span><i>:</i><span>{{ seconds }}</span>&nbsp;结束</p>
                    </div>
                    <div class="spike-content row">
                        <router-link :to="{ name: 'product-details' }" v-for="(item, index) in spikeInfo.spikeList" :key="index">
                            <dl class="col col-line">
                                <dt><img :src="item.img"></dt>
                                <dd>
                                    <p class="name">{{ item.name }}</p>
                                    <p class="new-price">￥{{ item.price1 }}<s class="pre-price">￥{{ item.price2 }}</s></p>
                                </dd>
                            </dl>
                        </router-link>
                    </div>
                </div>
            </div>
            <!--品质推荐-->
            <div class="product-recommend">
                <div class="container">
                    <div class="product-recommend-model product-recommen" v-for="recommend in recommendList">
                        <div class="recommend-name">
                            <i class="icon iconfont" :class="recommend.icon"></i>
                            {{ recommend.title }}
                        </div>
                        <div class="recommend-content clearfix">
                            <router-link class="recommend-content-model" v-for="(item, index) in recommend.recommend" :key="index"
                                         :to="{ name: 'product-details' }">
                                <div class="content-model text-center">
                                    <p class="name">{{ item.title }}</p>
                                    <p class="intro">{{ item.intro }}</p>
                                </div>
                                <div class="intro-img">
                                    <img :src="item.img" alt="">
                                </div>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
            <div  v-scroll-spy="scrollPos">
                <!--女装外套1-->
                <div id="wowen-clothing" class="wowen-clothing">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList1.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList1.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList1.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="(item, index) in typeList.typeList1.newProduct" :key="index">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList1.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2-->
                <div id="baby-place" class="wowen-clothing baby-place">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList2.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList2.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList2.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="item in typeList.typeList2.newProduct">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList2.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3-->
                <div id="cotton-material" class="wowen-clothing cotton-material">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList3.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList3.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList3.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="item in typeList.typeList3.newProduct">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList3.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--4-->
                <div id="care-makeups" class="wowen-clothing care-makeups">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList4.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList4.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList4.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="item in typeList.typeList4.newProduct">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList4.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--5-->
                <div id="underwear-clothing" class="wowen-clothing underwear-clothing">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList5.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList5.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList5.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="item in typeList.typeList5.newProduct">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList5.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--6-->
                <div id="baby-food" class="wowen-clothing baby-food">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList6.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList6.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList6.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="item in typeList.typeList6.newProduct">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList6.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--7-->
                <div id="baby-paper" class="wowen-clothing baby-paper">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList7.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList7.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList7.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="item in typeList.typeList7.newProduct">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList7.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--8-->
                <div id="baby-toys" class="wowen-clothing baby-toys">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList8.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList8.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList8.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="item in typeList.typeList8.newProduct">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList8.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--9-->
                <div id="baby-experience" class="wowen-clothing baby-experience">
                    <div class="container">
                        <div class="wowen-clothing-model">
                            <div class="recommend-name">
                                <div class="model-name"><i class="icon iconfont icon-nvzhuang"></i>{{ typeList.typeList9.module
                                    }}
                                </div>
                                <div class="model-content">
                                    <ul class="product-kinds">
                                        <li v-for="(item, index) in typeList.typeList9.module_item">
                                            <a href="">{{ item }}<span>|</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clothing-content">
                                <router-link class="content-left-img" to="/home">
                                    <img :src="typeList.typeList9.module_img" alt="">
                                </router-link>
                                <div class="content-right-model">
                                    <div class="content">
                                        <ul class="model-content">
                                            <li class="content-item item-line" v-for="item in typeList.typeList9.newProduct">
                                                <router-link :to="{name: 'product-details'}">
                                                    <div class="img-box">
                                                        <img :src="item.img" alt="">
                                                    </div>
                                                    <div class="product">
                                                        <p class="name">{{ item.title }}</p>
                                                        <p class="intro"><span>{{ item.intro }}</span> <span
                                                            class="money"></span></p>
                                                    </div>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-offer">
                                        <div class="content-item item-line" v-for="item in typeList.typeList9.offerList">
                                            <router-link class="product" :to="{name: 'product-details'}">
                                                <p class="name">{{ item.title }}</p>
                                                <p class="intro"><span>{{ item.intro }}</span> <span class="money"></span></p>
                                            </router-link>
                                            <router-link class="img-box" :to="{name: 'product-details'}">
                                                <img :src="item.img" alt="">
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--需要 浏览推荐-->
                <need-browse></need-browse>
                <!--楼层导航-->
            </div>
            <nav class="bs-js-navbar-scrollspy" v-if="show">
                <ul class="floor nav">
                    <li :class="{active:scrollPos == 0}"><a @click="$scrollTo(0)">女装外套</a></li>
                    <li :class="{active:scrollPos == 1}"><a @click="$scrollTo(1)">母婴专区</a></li>
                    <li :class="{active:scrollPos == 2}"><a @click="$scrollTo(2)">棉品寝卧</a></li>
                    <li :class="{active:scrollPos == 3}"><a @click="$scrollTo(3)">护理美妆</a></li>
                    <li :class="{active:scrollPos == 4}"><a @click="$scrollTo(4)">内衣服饰</a></li>
                    <li :class="{active:scrollPos == 5}"><a @click="$scrollTo(5)">婴儿食品</a></li>
                    <li :class="{active:scrollPos == 6}"><a @click="$scrollTo(6)">婴儿纸品</a></li>
                    <li :class="{active:scrollPos == 7}"><a @click="$scrollTo(7)">幼儿玩具</a></li>
                    <li :class="{active:scrollPos == 8}"><a @click="$scrollTo(8)">育婴心得</a></li>
                    <li :class="{active:scrollPos == 9}"><a @click="$scrollTo(9)">其他分类</a></li>
                    <li @click="toTop">
                        <a>
                            <p>TOP</p>
                            <i class="icon iconfont icon-top"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <right-side></right-side>
        </div>
    </div>
</template>
