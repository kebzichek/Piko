<template>
    <div class="hero__contentmenu">

            <div class="container">

                    <div class="hero__contentmenu--wrapper">

                    <ul class="hero__contentmenu--items">

                        <li class="hero__contentmenu--item" v-for="(text,index) in menuItems" :key="index"><nuxt-link :class="view==index ? 'active' : ''" class="teoretical-link" @click="view=index" :to="'#'+text.id">{{text.link}}</nuxt-link></li>

                    </ul>

                    <div class="hero__contentmenu--realizace">

                        <nuxt-link to="#form">Mám zaujem o realizáciu</nuxt-link>

                    </div>

                    </div>

            </div>

        </div>
</template>

<script>
export default {

    props: {

        menuItems: {

            type: Array,

        }

    }
    
}
</script>

<style lang="less">

.hero {

    &__contentmenu {

        background: #1F1F1F;
        margin-top: -7px;
        position: -webkit-sticky; 
        position: sticky !important;
        top: 0px;

        &--wrapper {

            display: flex;
            justify-content: space-between;

        }

        &--items {

            display: flex;

            @media (max-width: 640px){

                display: none;

            }

        }

        &--item {

            a {

                color: #ffffff;
                padding: 12px;
                display: flex;
                transition: 0.3s;
                font-family: Exo2-Medium;

                &:hover {

                    background: #131313;

                }

            }

        }

        &--realizace {

            a {

                display: flex;
                color: #ffffff;
                padding: 12px;
                align-items: center;
                transition: 0.3s;
                font-family: Exo2-Medium;

                 &:hover {

                    background: #131313;

                }

                &:before {

                    content: '';
                    background-image: url('~assets/images/svg/realizace.svg');
                    width: 18px;
                    height: 18px;
                    margin-right: 10px;
                        
                }

            }

        }

    }

}

</style>