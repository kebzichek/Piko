<template>
 <section>
    <button @click="isComponentModalActive = true" class="btn">Viac info</button>
    <b-modal :active.sync="isComponentModalActive" v-for="(text,index) in textPopup" :key="index">
        <div class="pop-up__wrapper">

            <div class="pop-up__title">

            <h1>{{ textPopup.title }}</h1>

                </div>

                    <div class="pop-up__content">

                        <div class="pop-up__content--left">

                         <div class="main-img"><img :src="textPopup.mainimg" alt="Regaly"></div>
                            <!--<div class="gallery">

                                <div class="item"><img src="images/pop-up-1.png" alt="1"></div>
                                <div class="item"><img src="images/pop-up-2.png" alt="1"></div>
                                <div class="item"><img src="images/pop-up-3.png" alt="1"></div>
                                <div class="item"><img src="images/pop-up-4.png" alt="1"></div>
                                <div class="item"><img src="images/pop-up-5.png" alt="1"></div>
                                <div class="item"><img src="images/pop-up-6.png" alt="1"></div>

                            </div>-->

                         </div>

                        <div class="pop-up__content--right">

                            <div class="info">{{textPopup.text}}</div>
                            <div class="info-img"><img :src="textPopup.infoimg" alt="Info img"></div>

                        </div>

                    </div>

                <div class="table"></div>

            </div>

        </b-modal>
 </section>



</template>
<script>
export default {
    data() {
            return {
                isComponentModalActive: false,
            }
    },
    props: {

        textPopup: {

            type: Object,
            required: true,

        }

    }
}
</script>
<style lang="less">
.pop-up {

    &__wrapper {

        background: #ffffff;

    }

    &__title {

        padding: 10px 30px;
        font-family: Exo2-Medium;
        font-size: 28px;

    }

    &__content {

        padding: 50px 30px;
        display: flex;

        @media (max-width: 400px) {

            flex-direction: column;

        }

        &--left {

            width: 40%;
            margin-right: 30px;

            @media (max-width: 400px) {

                width: 100%;
                margin-bottom: 30px;

            }

            .gallery {

                display: flex;
                flex-wrap: wrap;
                margin-top: 40px;

                @media (max-width: 400px) {

                    justify-content: center;

                }

                .item {

                    width: 110px;
                    height: 110px;
                    margin-right: 4%;
                    margin-bottom: 4%;

                    @media (max-width: 400px) {
                        
                        width: 100px;
                        height: 100px;
                        margin-right: 1%;
                        margin-bottom: 1%;

                    }

                    &:nth-child(3n) {

                        @media (min-width: 955px) {

                            margin-right: 0px;

                        }

                    }



                    img {

                        width: 100%;

                    }

                }

            }

        }

        &--right {

            width: 56%;
            font-family: Exo2-Regular;
            font-size: 14px;
            color: #1F1F1F;
            line-height: 25px;

            @media (max-width: 400px) {

                width: 100%;

            }

            .info {

                margin-bottom: 30px;

            }

        }

    }

}
</style>