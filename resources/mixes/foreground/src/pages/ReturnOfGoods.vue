<script>
    import EndTimer from '../components/Timer.vue';
    import img from '../assets/images/b1.png';

    export default{
        components: {
            EndTimer,
        },
        data() {
            return {
                goods: {
                    freight: 10,
                    price: 99,
                    ordernum: '25648946541656',
                    seller: 'xxx旗舰店',
                    msg: '女装 夏季自然腰宽松九分裤休闲长裤麻混纺',
                    taocan: '官方套餐一',
                },
                refund: {
                    reason: '物品有瑕疵',
                    price: 99,
                    number: '3265646123655',
                    illustrate: '桌子的木质不太好，且桌面有2cm裂缝，桌面不平整，颜色发错',
                },
                status: 2,
                message: '已超时',
                endTime: '2018-10-08 10:06:00',
                imgsrc: img,
                onOff: true,
                result: ['请选择退款原因', '七天无理由退换', '拍错了'],
                company: ['中通', '圆通', '顺丰'],
            };
        },
        methods: {
            dosomething(n) {
                this.onOff = n;
            },
        },
    };
</script>
<template>
    <div class="return">
        <div class="return-of-goods container">
            <div class="container top row">
                <div class="col-sm-3">
                    <div class="bar bar-right"
                         :class="{activeBar : status === 1 | status === 2 ||status ===3 || status ===4 || status ===5 || status === 6}">
                        1
                    </div>
                    <div class="progress order"
                         :class="{activeProgress : status === 1 || status === 2 ||status ===3 || status ===4 || status === 5 || status === 6}">
                        买家申请退货
                    </div>
                </div>

                <div v-if="status != 6" class="col-sm-3">
                    <div class="bar bar-main-left"
                         :class="{activeBar :  status ===2 || status === 3 || status === 4 || status === 5}">2
                    </div>
                    <div class="progress"
                         :class="{activeProgress :  status === 2 ||status ===3 || status === 4 || status === 5}">
                        商家处理退货申请
                    </div>
                </div>
                <div v-if="status != 6" class="col-sm-3">
                    <div class="bar bar-main-right" :class="{activeBar : status ===3 || status === 4 || status === 5  }">3
                    </div>
                    <div class="progress"
                         :class="{activeProgress : status ===3 || status === 4 || status === 5 }">买家退货给商家
                    </div>
                </div>
                <div v-if="status != 6" class="col-sm-3">
                    <div class="bar bar-left" :class="{activeBar :  status === 5  }">4</div>
                    <div class="progress" :class="{activeProgress : status === 5  }">确认收货，平台审核</div>
                </div>

                <div v-if="status === 6" class="col-sm-3">
                    <div class="bar bar-no" :class="{activeBar :  status === 6 }">2</div>
                    <div class="progress refuse" :class="{activeProgress : status === 6 }">商家拒绝</div>
                </div>
            </div>
            <div class="container bottom">
                <div class="applay-goods">
                    <div class="title">退款申请</div>
                    <div class="goods-box">
                        <div class="goods-main">

                            <div class="goods-img">
                                <img :src="imgsrc">
                            </div>
                            <div class="goods-msg">
                                <div>{{ goods.msg }}</div>
                                <div class="goods-type">{{ goods.taocan }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="refund-main">
                        <p>运费： {{ goods.freight }}</p>
                        <p>订单金额：<span class="price">￥{{goods.price }}</span></p>
                        <p>订单编号：{{ goods.ordernum}}</p>
                        <p>商家：{{ goods.seller}}</p>
                    </div>
                </div>
                <!--卖家退货申请-->
                <div v-if="status === 1" class="applay-buyer">
                    <div class="title">买家退款申请</div>
                    <div class="buyer-box">
                        <div class="buyer-main border-none">
                            <div class="group-input">
                                <div class="lable">退款原因</div>
                                <div class="input-main">
                                    <select class="form-control">
                                        <option>请选择退款原因</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="group-input">
                                <div class="lable">退款金额</div>
                                <div class="input-main"><input type="text">最多￥99.00 ( 含运费0.00 )</div>
                            </div>
                            <div class="group-input">
                                <div class="lable">退货数量</div>
                                <div class="input-main"><input type="text"></div>
                            </div>
                            <div class="group-input">
                                <div class="lable">退款说明</div>
                                <div class="input-main">
                                    <textarea rows="3"></textarea>
                                    <div class="tishixinxi">还可以输入200字</div>
                                </div>
                            </div>
                            <div class="group-input">
                                <div class="lable">上传凭证</div>
                                <div class="input-main">
                                    <div class="img">
                                    </div>
                                    <div class="tishixinxi">每张图片大小不超过5M，最多3张，支持GIF、JPG、PNG、BMP格式</div>
                                </div>
                            </div>
                            <div class="group-input">
                                <div class="lable"></div>
                                <div class="input-main">
                                    <div class="submit-btn">提交退款申请</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--商家处理退货信息-->
                <div v-else-if="status === 2" class="applay-buyer">
                    <div class="title">买家退款申请</div>
                    <div class="buyer-box">
                        <div class="buyer-main">
                            <p>
                                <span class="msg-title">退款原因</span>
                                <span class="msg-main">{{ refund.reason }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款金额</span>
                                <span class="msg-main price">￥{{ refund.price }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款编号</span>
                                <span class="msg-main">{{ refund.number }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款说明</span>
                                <span class="msg-main">{{ refund.illustrate }}</span>
                            </p>
                        </div>
                        <div class="trader-deal">
                            <p class="title-caveat">
                                <span class="caveat">!</span>
                                <span class="caveat-msg">等待商家处理退款申请</span>
                            </p>
                            <p class="msg-main">如果商家同意，金额会尽快返回您的账户</p>
                            <p class="msg-main">如果商家拒绝，那么您将不能再次申请退款，有疑问可以联系平台</p>
                            <p v-if="this.onOff" class="msg-main">如果
                                <span class="price">
                                <end-timer @mistake="dosomething" @time-end="dosomething"
                                           :endTime='endTime'></end-timer>
                            </span> 内商家未处理，退款申请将会自动达成并将金额返还至您的账户
                            </p>
                            <p v-if="!this.onOff" class="msg-main">时间已经过期</p>
                        </div>
                    </div>
                </div>
                <!--  买家退货给商家 填写物流单号-->
                <div v-else-if="status === 3" class="applay-buyer">
                    <div class="title">买家退款申请</div>
                    <div class="buyer-box">
                        <div class="buyer-main">
                            <p><span class="msg-title">退款原因</span><span class="msg-main">{{ refund.reason }}</span></p>
                            <p><span class="msg-title">退款金额</span><span class="msg-main price">￥{{ refund.price }}</span>
                            </p>
                            <p><span class="msg-title">退款编号</span><span class="msg-main">{{ refund.number }}</span></p>
                            <p><span class="msg-title">退款说明</span><span class="msg-main">{{ refund.illustrate }}</span></p>
                        </div>
                        <div class="trader-deal complate">
                            <p class="title-caveat">
                                <span class="caveat">!</span>
                                <span class="caveat-msg">商家已同意，请尽快填写退货信息</span>
                            </p>
                            <p class="msg-main">商家收货信息：王某某  139995554545 </p>
                            <p class="msg-address">陕西省西安市雁塔区科技四路中段国土资源大厦公寓楼2304</p>

                        </div>
                        <div class="buyer-main border-none ">
                            <div class="group-input">
                                <div class="lable">物流公司</div>
                                <div class="input-main">
                                    <select class="form-control">
                                        <option v-for="item in company">{{ item }}</option>

                                    </select>
                                </div>
                            </div>
                            <div class="group-input">
                                <div class="lable">物流单号</div>
                                <div class="input-main"><input type="text" class="longtext"></div>
                            </div>
                            <div class="group-input ">
                                <div class="lable"></div>
                                <div class="input-main">
                                    <div class="submit-btn">确认提交</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--物流单号-->
                <div v-else-if="status === 4" class="applay-buyer">
                    <div class="title">买家退款申请</div>
                    <div class="buyer-box">
                        <div class="buyer-main">
                            <p>
                                <span class="msg-title">退款原因</span>
                                <span class="msg-main">{{ refund.reason }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款金额</span>
                                <span class="msg-main price">￥{{ refund.price }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款编号</span>
                                <span class="msg-main">{{ refund.number }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款说明</span>
                                <span class="msg-main">{{ refund.illustrate }}</span>
                            </p>
                        </div>
                        <div class="trader-deal complate">
                            <p class="title-caveat">
                                <span class="caveat">!</span>
                                <span class="caveat-msg">等待商家确认收货</span>
                            </p>
                            <p v-if="this.onOff" class="msg-main">如果
                                <span class="price will-receive">
                                <end-timer @mistake="dosomething" @time-end="dosomething"
                                           :endTime='endTime'></end-timer>
                            </span> 内商家未处理，系统会自动确认收货，并经平台审核后将金额返还至您的账户
                            </p>

                        </div>
                        <div class="buyer-main border-none ">
                            <p>
                                <span class="msg-title">物流公司</span>
                                <span class="msg-main">顺丰速运</span>
                            </p>
                            <p>
                                <span class="msg-title">物流单号</span>
                                <span class="msg-main msg-num">23565465416326564</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!--第四步  退货处理完成-->
                <div v-else-if="status ===5 " class="applay-buyer">
                    <div class="title">买家退款申请</div>
                    <div class="buyer-box">
                        <div class="buyer-main">
                            <p>
                                <span class="msg-title">退款原因</span>
                                <span class="msg-main">{{ refund.reason }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款金额</span>
                                <span class="msg-main price">￥{{ refund.price }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款编号</span>
                                <span class="msg-main">{{ refund.number }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款说明</span>
                                <span class="msg-main">{{ refund.illustrate }}</span>
                            </p>
                        </div>
                        <div class="trader-deal complate">
                            <p class="title-caveat">
                                <span class="caveat">!</span>
                                <span class="caveat-msg">退货处理完成，请查收</span>
                            </p>
                            <p class="msg-main">退款已经返还至您的账户，请查收</p>

                        </div>
                        <div class="buyer-main border-none ">
                            <p>
                                <span class="msg-title">物流公司</span>
                                <span class="msg-main">顺丰速运</span>
                            </p>
                            <p>
                                <span class="msg-title">物流单号</span>
                                <span class="msg-main msg-num">23565465416326564</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!--商家不同意退货申请-->
                <div v-else-if="status ===6 " class="applay-buyer">
                    <div class="title">买家退款申请</div>
                    <div class="buyer-box">
                        <div class="buyer-main">
                            <p>
                                <span class="msg-title">退款原因</span>
                                <span class="msg-main">{{ refund.reason }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款金额</span>
                                <span class="msg-main price">￥{{ refund.price }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款编号</span>
                                <span class="msg-main">{{ refund.number }}</span>
                            </p>
                            <p>
                                <span class="msg-title">退款说明</span>
                                <span class="msg-main">{{ refund.illustrate }}</span>
                            </p>
                        </div>
                        <div class="trader-deal">
                            <p class="title-caveat">
                                <span class="caveat">!</span>
                                <span class="caveat-msg">商家不同意退货申请</span>
                            </p>
                            <p class="msg-main refuse-main">商家拒绝了您的退货申请，拒绝理由：
                                恶意退货。如您对此处理有意见，可以联系平台服务人员进行处理。祝您购物愉快。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>