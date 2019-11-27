<template>
    <div class="hero__contentmenu">

            <div class="container">

                    <div class="hero__contentmenu--wrapper">

                    <ul class="hero__contentmenu--items">

                        <li class="hero__contentmenu--item"><a href="#">Pohyblivé a pevné regály</a></li>
                        <li class="hero__contentmenu--item"><a href="#">Knižničné regály</a></li>

                    </ul>

                    <div class="hero__contentmenu--realizace">

                        <a href="#">Mám zaujem o realizáciu</a>

                    </div>

                    </div>

            </div>

        </div>
</template>

<style lang="less">

.hero {

    &__contentmenu {

        background: #1F1F1F;
        margin-top: -7px;

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