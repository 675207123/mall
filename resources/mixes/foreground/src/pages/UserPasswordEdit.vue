<script>
    export default {
        data() {
            return {

            };
        },
    };
</script>
<template>
    <div class="account-content">
        <p class="modify-title">修改登录密码</p>
        <div class="modify-password">
            <div class="modify-heading">
                <div class="modify-status">
                    <ul class="clearfix">
                        <li class="clearfix" :class="{ already: temp >= 1 }">
                            <div class="step">
                                <i class="step-list">1</i>
                                <p class="modify-margin">验证身份</p>
                            </div>
                        </li>
                        <li class="clearfix" :class="{ already: temp >= 2 }">
                            <ul class="clearfix cricle-box">
                                <li class="cricle" v-for="item in 17"></li>
                            </ul>
                            <div class="step">
                                <i class="step-list">2</i>
                                <p class="p-modify">修改登录密码</p>
                            </div>
                        </li>
                        <li class="clearfix" :class="{ already: temp >= 3 }">
                            <ul class="clearfix cricle-box">
                                <li class="cricle" v-for="item in 17"></li>
                            </ul>
                            <div class="step">
                                <i class="step-list">3</i>
                                <p class="modify-margin">完成</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modify-content1" v-if="temp===1">
                <i-form class="signup-form" ref="identityForm" :model="identityData" :rules="identityRule">
                    <form-item class="clearfix" prop="phone" label="手机号">
                        <span class="default-telphone">{{ phoneNumber }}</span>
                        <span> <a>通过已验证邮箱验证</a> <a>通过支付密码验证</a></span>
                    </form-item>
                    <form-item class="clearfix" prop="phoneCode" label="请填写手机验证码">
                        <i-input class="signup-form-control signup-form-code pull-left"
                                 type="text"
                                 v-model="identityData.phoneCode">
                        </i-input>
                        <div class="signup-form-control signup-form-obtain-code signup-form-code pull-left" @click="getCode">
                            <i v-if="countdownStart">{{ countdown }}秒</i>
                            <i v-if="!countdownStart">获取验证码</i>
                        </div>
                    </form-item>
                    <form-item  class="clearfix" prop="code" label="验证码">
                        <i-input class="signup-form-control pull-left signup-form-code"
                                 type="text"
                                 v-model="identityData.code">
                        </i-input>
                        <div class="signup-form-control verification-code pull-left">
                            <img :src="codeImg" alt="">
                        </div>
                        <a class="pull-left">看不清?换一张</a>
                    </form-item>
                    <form-item>
                        <i-button :loading="loading" class="order-btn" @click.prevent="submitResultIdentity">
                            <span v-if="!loading">提交</span>
                            <span v-else>正在提交…</span>
                        </i-button>
                    </form-item>
                </i-form>
            </div>
            <div class="modify-content2" v-if="temp===2">
                <i-form class="signup-form" ref="resetPassword" :model="resetData" :rules="resetRule">
                    <form-item class="clearfix" prop="newPassword" label="新的登录密码">
                        <i-input class="signup-form-control"
                                 type="text"
                                 v-model="resetData.newPassword">
                        </i-input>
                        <p class="tip">由字母加数字符号至少两种以上数字组成的密码，6-20位半角字符，区分大小写</p>
                    </form-item>
                    <form-item class="clearfix" prop="passwordAgain" label="再次输入密码">
                        <i-input class="signup-form-control"
                                 type="text"
                                 v-model="resetData.passwordAgain">
                        </i-input>
                    </form-item>
                    <form-item class="clearfix" prop="code" label="验证码">
                        <i-input class="signup-form-control pull-left signup-form-code"
                                 type="text"
                                 v-model="resetData.code">
                        </i-input>
                        <div class="signup-form-control verification-code pull-left">
                            <img :src="resetCodeImg" alt="">
                        </div>
                        <a class="pull-left">看不清?换一张</a>
                    </form-item>
                    <form-item>
                        <i-button :loading="loading" class="order-btn" @click.prevent="submitResetData">
                            <span v-if="!loading">提交</span>
                            <span v-else>正在提交…</span>
                        </i-button>
                    </form-item>
                </i-form>
            </div>
            <div class="modify-content3" v-if="temp===3">
                <div class="modify-success text-center">密码修改成功!</div>
            </div>
        </div>
    </div>
</template>