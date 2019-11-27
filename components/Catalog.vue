<template>
    <div class="catalog__wrapper">

        <div class="catalog__info--wrapper">

            <div class="catalog__info--img">

                <img :src="`/images/${srcInfo}`" alt="Regaly">

            </div>

            <div class="catalog__info--box">

                <h2>{{ title }}</h2>
                <div class="text-wrapper">

                    <p class="text">{{ textInfo }}</p>

                </div>

            </div>

        </div>

        <div class="catalog__items">

            <div class="container">

                <div class="catalog__items--wrapper">

                    <div class="catalog__items--menu">

                        <ul>

                            <li><nuxt-link to="#">EK 7500</nuxt-link></li>
                            <li><nuxt-link to="#">EK 7500</nuxt-link></li>

                        </ul>

                    </div>

                    <div class="catalog__items--text">

                        <div class="text-wrapper">

                            <p class="text">{{ textCatalog }}</p>
                            <div class="links">
                                <section>
                                <button @click="isComponentModalActive = true" class="btn">Viac info</button>
                                <b-modal :active.sync="isComponentModalActive">
                                    <div class="pop-up__wrapper">

                                        <div class="pop-up__title">

                                            <h1>Regálový systém EK 7500</h1>

                                        </div>

                                        <div class="pop-up__content">

                                            <div class="pop-up__content--left">

                                                <div class="main-img"><img src="images/pop-up-main.png" alt="Regaly"></div>
                                                <div class="gallery">

                                                    <div class="item"><img src="images/pop-up-1.png" alt="1"></div>
                                                    <div class="item"><img src="images/pop-up-2.png" alt="1"></div>
                                                    <div class="item"><img src="images/pop-up-3.png" alt="1"></div>
                                                    <div class="item"><img src="images/pop-up-4.png" alt="1"></div>
                                                    <div class="item"><img src="images/pop-up-5.png" alt="1"></div>
                                                    <div class="item"><img src="images/pop-up-6.png" alt="1"></div>

                                                </div>

                                            </div>

                                            <div class="pop-up__content--right">

                                                <div class="info">Pohyblivé regálové systémy sú mimoriadne efektívne všade tam, kde sa skladuje veľké množstvo materiálu, pričom skladovanie si vyžaduje za každých okolností jednoduchý a rýchly prístup k jednotlivým položkám. Ich efektivita spočíva v optimalizácii využitia priestoru, uľahčení prístupu k uskladneným materiálom a zvýšení dostupného priestoru až o 80%. Princíp spočíva vo vytvorení vždy iba jednej prístupovej uličky, ktorá sa nachádza tam, kde ju momentálne potrebujete. S regálmi je možné pohybovať buď jednotlivo, alebo po skupinách, čo významne skracuje čas potrebný na dosiahnutie požadovanej zložky. S použitím pohyblivých regálov je možné archivačnú kapacitu až zdvojnásobiť a ušetrený priestor následne využiť na ďalší regálový systém, alebo na vytvorenie nového pracoviska. Vďaka modulárnej konštrukcii umožňujú bezpečné skladovanie a archivovanie rôznych dokumentov a predmetov. Celý systém môže byť kedykoľvek doplnený o vybrané príslušenstvo, a tak dokonale uspokojiť požiadavky zákazníkov. </div>
                                                <div class="info-img"><img src="images/pop-up-info-img.png" alt="Info img"></div>

                                            </div>

                                        </div>

                                        <div class="table"></div>

                                    </div>

                                </b-modal>
                                </section>
                                <nuxt-link to="#" class="download">Stiahnúť katalóg</nuxt-link>
                            </div>

                        </div>

                        <div class="img__wrapper" :style="{backgroundImage: 'url(\'/images/'+ srcCatalog +'.png\')'}">

                        </div>

                    </div>

                </div>

            </div>


        </div>

        <div class="catalog__background"></div>

    </div>
</template>

<script>
export default {
    data() {
            return {
                isComponentModalActive: false,
            }
    },
    props: {

        title: {
            type: String,
            required: true
        },
        textInfo: {
            type: String,
            required: true
        },
        textCatalog: {
            type: String,
            required: true
        },
        srcInfo: {
            type: String
        },
        srcCatalog: {
            type: String
        }

    }
}
</script>

<style lang="less">

.catalog {

    &__wrapper {

        position: relative;
        padding-bottom: 285px;
        margin-bottom: 90px;

        @media (max-width: 769px) {

            padding-bottom: 50px;

        }

        &.catalog__right {

            padding-bottom: 150px;
            margin-bottom: 0px;

            @media (max-width: 769px) {

                padding-bottom: 30px;

            }

        }

    }

   &__background {

       background-image: url(~assets/images/svg/catalog_bck.svg);
       background-size: cover;
       background-repeat: no-repeat;
       background-position: center;
       width: 100%;
       height: 100%;
       left: 0px;
       top: 100px;
       bottom: 0px;
       position: absolute;
       display: block;
       z-index: -2;

   } 

   &__right {

       .catalog__background {

           transform: rotateY(180deg);

       }

       .catalog__info--img {

           right: 0px;

           img {

            @media (max-width: 570px) {

                transform: rotateY(180deg);

            }
            
           }

       }

       .catalog__info--box {

           text-align: left;
            margin: 0 0 0 auto;
            margin-right: 450px;
            margin-top: 80px;

            @media (max-width: 570px) {

                margin-top: 60%;
                text-align: right;

            }

            @media (min-width: 570px) and (max-width: 769px) {

                width: 490px;
                margin-top: 48%;
                margin-left: 40px;

            }

            @media (min-width: 769px) and (max-width: 1215px) {

                margin-left: 40px;
                margin-top: 300px;

            }

           h2 {

               margin-left: -20px;

           }

           .text-wrapper {

               justify-content: flex-start;
               padding: 70px 30px 55px 50px;

                @media (max-width: 570px) {

                    padding: 50px 20px;

                }

               @media (min-width: 570px) and (max-width: 1215px) {

                padding-top: 120px;

            }

           }

       }

   }

    &__info {

        &--wrapper {

            display: flex;
            align-items: center;
            padding-bottom: 200px;

            @media (max-width: 1215px) {
                
                padding-bottom: 60px;

            }

        }

        &--img {

            width: 795px;
            position: absolute;
            top: -80px;

            @media (max-width: 769px) {

                width: 100%;
                top: 0px;

            }

            img {

                width: 100%;

            }

        }

        &--box {

            width: 710px;
            text-align: center;
            margin-left: 460px;
            margin-top: 80px;

            @media (max-width: 570px) {

                width: 100%;
                margin-left: 0px;
                margin-top: 60%;

            }

            @media (min-width: 570px) and (max-width: 769px) {

                width: 490px;
                margin: 48% 30px 0 auto;


            }

            @media (min-width: 769px) and (max-width: 1215px) {
                
                width: 490px;
                margin: 300px 30px 0 auto;

            }

            h2 {

                position: relative;

            }

            .text-wrapper {

                background: #131313;
                color: #ffffff;
                display: flex;
                justify-content: flex-end;
                padding: 70px 30px 55px 0px;
                margin-top: -21.5px;

                @media (max-width: 570px) {

                     padding: 50px 20px;
                     justify-content: center;

                }

                @media (min-width: 570px) and (max-width: 1215px) {
                
                    padding-top: 130px;

                }
                

                .text {

                    font-family: Exo2-Regular;
                    font-size: 14px;
                    width: 350px;
                    text-align: left;
                    line-height: 25px;

                }

            }

        }

    }

    &__items{

        margin-bottom: 20px;

        &--wrapper {

            display: flex;
            flex-direction: column;


        }

        &--text {

            display: flex;
            align-items: center;
            background: #131313;
            color: #ffffff;
            padding: 50px 40px;
            position: relative;

            @media (max-width: 400px) {

                padding: 50px 20px 100px 20px;

            }

            @media (min-width: 400px) and (max-width: 570px) {

                padding: 50px 20px;

            }

            .text-wrapper {

                width: 613px;

                @media (max-width: 400px) {

                   padding-right: 40%;
                   position: relative;

                }

                @media (min-width: 400px) and (max-width: 570px) {

                   margin-right: 50%;

                }

                @media (min-width: 570px) and (max-width: 769px) {

                    width: 330px;
                    margin-right: 280px;

                }

                @media (min-width: 769px) and (max-width: 1215px) {

                    width: 400px;

                }

                .text {

                    margin-bottom: 40px;

                    @media (max-width: 400px) {

                        max-height: 200px;
                        overflow: scroll;

                    }
                    
                    @media (min-width: 400px) and (max-width: 570px) {

                        max-height: 250px;
                        overflow: scroll;

                    }
                   

                }

                .links {

                    display: flex;

                    @media (max-width: 400px) {

                        position: absolute;
                        flex-direction: column;
                        z-index: 2;
                        width: 100%;
                        text-align: center;
                        font-size: 14px;

                    }

                    @media (min-width: 400px) and (max-width: 769px) {

                        display: block;

                    }

                }

                .download {

                    color: #ffffff;
                    display: flex;
                    align-items: center;
                    margin-left: 50px;

                    @media (max-width: 400px) {

                        background: #ffffff;
                        color: black;
                        margin-left: 0px;
                        padding: 6.5px 0px;
                        justify-content: center;

                    }
                
                    @media (min-width: 400px) and (max-width: 769px) {

                        margin-left: 0px;
                        margin-top: 20px;

                    }

                    &:before {

                        content: '';
                        background-image: url(~assets/images/svg/download.svg);
                        background-repeat: no-repeat;
                        background-size: cover;
                        width: 20px;
                        height: 20px;
                        display: flex;
                        margin-right: 10px;

                        @media (max-width: 400px) {

                            background-image: url(~assets/images/svg/download_dark.svg);
                            width: 15px;
                            height: 15px;

                        }

                    }

                }



            }

            .img__wrapper {

                position: absolute;
                height: 110%;
                right: 0px;
                width: 450px;
                background-position: left;
                background-repeat: no-repeat;
                background-size: cover; 

                @media (max-width: 400px) {

                    background-position: center;  
                    height: 100%;
                    width: 110px; 
                    top: 0px;

                }

                @media (min-width: 400px) and (max-width: 570px) {

                    height: 100%;
                    width: 180px;
                    background-position: center;  
                   

                }

                @media (min-width: 570px) and (max-width: 769px) {

                    width: 330px;
                    height: 100%;

                }

                @media (min-width: 769px) and (max-width: 1023px){

                   width: 270px;

                }

                img {

                    height: 110%;

                }

            }

        }
        &--menu {

            ul {

                display: flex;
                align-items: center;

                

                li {

                    display: flex;

                    a {

                        
                        color: white;
                        font-size: 18px;
                        padding: 10px 80px;
                        opacity: 0.4;

                      @media (max-width: 570px) {

                          padding: 10px 20px;
                          font-size: 14px;

                      }

                    }  
                    
                    &:first-child {

                        a {

                            opacity: 1;

                        }

                    }

                }

            }   

        }

    }

}

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