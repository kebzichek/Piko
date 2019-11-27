<template>
    <div class="video-text__wrapper">

        <div class="container">

            <div class="video-text__content">

                <div class="video-text__text">

                    <h2>{{ title }}</h2>

                    <p class="text">{{ text }}</p>

                    <span class="arrow-down"></span>

                </div>

                <div class="video-text__video">

                    <span class="info">Viac o našich archívných systémoch</span>

                    <iframe width="490" height="280" src="https://www.youtube.com/embed/QTQNYo4fc40" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>

               

            </div>

        </div>

        <div class="video-text__background"></div>

    </div>
</template>

<script>
export default {
    props: {

        title: {
            type: String,
            required: true
        },
        text: {
            type: String,
            required: true
        },
        video: {
            type: String,
        }

    }
}
</script>

<style lang="less" scoped>

.video-text {

    &__wrapper {

        position: relative;
        height: 500px;

        @media (max-width: 769px) {

            margin-bottom: 200px;

        }

        .container {

            height: 100%;

        }

    }

    &__background {

        background-image: url(~assets/images/svg/video_text_bck.svg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 490px;
        position: absolute;
        top: 0px;
        left: 0px;
        z-index: -1;

        @media (max-width: 570px) {

            height: 150%;

        }


    }

    &__content {

        display: flex;
        color: #ffffff;
        justify-content: space-between;
        height: 100%;
     
        @media (max-width: 769px) {

            flex-direction: column;

        }

    }

    &__text {

        width: 490px;
        font-family: Exo2-Regular;
        font-size: 14px;
        margin-top: 100px;
        margin-right: 30px;

        @media (max-width: 570px) {

            width: 100%;
            margin-right: 0px;
            margin-top: 40px;

        }

        .text {

            margin: 30px 0px 60px 0px;
        
        }

        .arrow-down {

            width: 20px;
            height: 25px;
            background-image: url(~assets/images/svg/arrow-down.svg);
            background-size: cover;
            background-repeat: no-repeat;
            display: block;

            @media (max-width: 570px) {

                display: none;

            }

        }

    }

    &__video {

        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        margin-bottom: 40px;

        @media (max-width: 570px) {

            margin-top: 0px;

        }

        @media (min-width: 570px) and (max-width: 769px) {

            width: 490px;
            margin: 0 0 0 auto;
            margin-top: -70px;

        }

        iframe {

            height: 280px;
            margin-top: 20px;

        }

        .info {

            font-family: Exo2-Regular;
            font-size: 16px;
            color: rgba(255,255,255,0.76);


        }

    }

    

}

</style>