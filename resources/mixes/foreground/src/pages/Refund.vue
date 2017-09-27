<script>
    import EndTimer from '../components/Timer.vue';
    import SplinLine from '../components/SplinLine.vue';
    import img from '../assets/images/b1.png';

    export default{
        components: {
            EndTimer,
            SplinLine,
        },
        data() {
            return {
                endTime: '2018-10-08 10:06:00',
                imgsrc: img,
                goods: {
                    freight: 10,
                    price: 99.00,
                    ordernum: '25648946541656',
                    seller: 'xxx旗舰店',
                    msg: '女装 夏季自然腰宽松九分裤休闲长裤麻混纺',
                    taocan: '官方套餐一',
                },
                message: '已超时',
                refund: {
                    reason: '物品有瑕疵',
                    price: 99.00,
                    number: '3265646123655',
                    illustrate: '桌子的木质不太好，且桌面有2cm裂缝，桌面不平整，颜色发错',
                },
                refundForm: {
                    reason: '1',
                    money: '',
                    description: '',
                    image: '',
                    price: 99.00,
                    freight: 0.00,
                },
                reasonList: [
                    {
                        label: '请选择退款原因',
                        value: '1',
                    },
                    {
                        label: '质量不好',
                        value: '2',
                    },
                    {
                        label: '尺码不对',
                        value: '3',
                    },
                    {
                        label: '卖家发错货了',
                        value: '4',
                    },
                ],
                status: 1,
                onOff: true,
            };
        },
        methods: {
            dosomething(n) {
                this.onOff = n;
            },
            submit() {
                this.status = 2;
            },
        },
    };
</script>
<template>
    <div class="refund">
        <div class="refund-page container">
            <div class="container top row">
                <div class="col-sm-4">
                    <div class="bar bar-right" :class="{activeBar : status === 1 | status === 2 ||status ===3 }">1</div>
                    <div class="progress"
                         :class="{activeProgress : status === 1 || status === 2 ||status ===3 }">买家申请退款
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="bar bar-main" :class="{activeBar :  status ===2 || status === 3 }">2</div>
                    <div class="progress deal" :class="{activeProgress :  status === 2 ||status ===3 }">
                        商家处理退款申请
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="bar bar-left" :class="{activeBar : status ===3 }">3</div>
                    <div class="progress over" :class="{activeProgress : status ===3 }">平台审核，退款完成</div>
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
                <i-form ref="refundForm" :model="refundForm" :rules="refundRules" :label-width="100">
                    <div v-if="status === 1" class="applay-buyer">
                        <div class="title">买家退款申请</div>
                        <div class="buyer-box">
                            <div class="buyer-main border-none">
                                <form-item label="退款原因" prop="reason">
                                    <i-select style="width: 180px" v-model="refundForm.reason">
                                        <i-option v-for="(item, index) in reasonList"
                                                  :value="item.value"
                                                  :disabled="item.value === '1'"
                                                  :key="index">
                                            {{ item.label }}
                                        </i-option>
                                    </i-select>
                                </form-item>
                                <form-item label="退款金额">
                                    <i-input v-model="refundForm.money"></i-input>
                                    <span>最多￥{{ refundForm.price }}元 ( 含运费{{ refundForm.freight }} )</span>
                                </form-item>
                                <div class="group-input">
                                    <div class="lable">退款说明</div>
                                    <div class="input-main">
                                        <textarea rows="3"></textarea>
                                        <div class="prompt-msg">还可以输入200字</div>
                                    </div>
                                </div>
                                <div class="group-input">
                                    <div class="lable">上传凭证</div>
                                    <div class="input-main">
                                        <div class="img"><i class="icon iconfont icon-tupian picture-icon"></i></div>
                                        <div class="prompt-msg">每张图片大小不超过5M，最多3张，支持GIF、JPG、PNG、BMP格式</div>
                                    </div>
                                </div>
                                <div class="group-input">
                                    <div class="lable"></div>
                                    <div class="input-main">
                                        <button class="submit-btn" @click="submit">提交退款申请</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else-if="status === 2" class="applay-buyer">
                        <div class="title title-buy">买家退款申请</div>
                        <div class="buyer-box">
                            <div class="buyer-main">
                                <p><span class="msg-title">退款原因</span><span class="msg-main">{{ refund.reason }}</span></p>
                                <p><span class="msg-title">退款金额</span><span class="msg-main price">￥{{ refund.price }}</span>
                                </p>
                                <p><span class="msg-title">退款编号</span><span class="msg-main">{{ refund.number }}</span></p>
                                <p><span class="msg-title">退款说明</span><span class="msg-main">{{ refund.illustrate }}</span></p>
                            </div>
                            <div class="trader-deal">
                                <p class="title-caveat">
                                    <span class="caveat">!</span>
                                    <span class="caveat-msg">等待商家处理退款申请</span>
                                </p>
                                <p class="msg-main">如果商家同意，金额会尽快返回您的账户</p>
                                <p class="msg-main">如果商家拒绝，那么您将不能再次申请退款，有疑问可以联系平台</p>
                                <p v-if="this.onOff" class="msg-main">
                                    如果
                                    <span class="price">
                                        <end-timer @mistake="dosomething" @time-end="dosomething" :endTime='endTime'>
                                        </end-timer>
                                    </span>
                                    内商家未处理，退款申请将会自动达成并将金额返还至您的账户
                                </p>
                                <p v-if="!this.onOff" class="msg-main">时间已经过期</p>
                            </div>
                        </div>
                    </div>
                    <div v-else="status === 3" class="applay-buyer">
                    <div class="title title-buy">买家退款申请</div>
                    <div class="buyer-box">
                        <div class="buyer-main">
                            <p><span class="msg-title">退款原因</span><span class="msg-main">{{ refund.reason }}</span></p>
                            <p><span class="msg-title">退款金额</span><span class="msg-main price">￥{{ refund.price }}</span>
                            </p>
                            <p><span class="msg-title">退款编号</span><span class="msg-main">{{ refund.number }}</span></p>
                            <p><span class="msg-title">退款说明</span><span class="msg-main">{{ refund.illustrate }}</span></p>
                        </div>
                        <div class="trader-deal">
                            <p class="title-caveat">
                                <span class="caveat">!</span>
                                <span class="caveat-msg">商家同意，退款完成</span>
                            </p>
                            <p class="msg-main">商家同意，金额会晶块返回您的账户，有疑问可以联系平台</p>
                        </div>
                    </div>
                </div>
                </i-form>
            </div>
        </div>
    </div>

</template>