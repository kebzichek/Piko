<template>
    <div class="catalog__wrapper">

        <div class="catalog__info--wrapper" :id="title">

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

                            <li v-for="(text,index) in textCatalog" :key="index"><div :class="view==index ? 'active' : ''" class="teoretical-link" @click="view=index">{{text.link}}</div></li>

                        </ul>

                    </div>

                    <div class="catalog__items--text">

                        <div class="text-wrapper">

                            <p class="text">{{ textCatalog[view].text }}</p>
                            <div class="links">
                                <popup :textPopup="textPopup[view]"></popup>
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
import Popup from '~/components/Popup'
export default {
    components: {

        Popup

    },
    data() {
            return {
                view: 0,
                textPopup: [
                    {title:"Alalalalla",text:"Pohyblivé regálové systémy sú mimoriadne efektívne všade tam, kde sa skladuje veľké množstvo materiálu, pričom skladovanie si vyžaduje za každých okolností jednoduchý a rýchly prístup k jednotlivým položkám. Ich efektivita spočíva v optimalizácii využitia priestoru, uľahčení prístupu k uskladneným materiálom a zvýšení dostupného priestoru až o 80%. Princíp spočíva vo vytvorení vždy iba jednej prístupovej uličky, ktorá sa nachádza tam, kde ju momentálne potrebujete. S regálmi je možné pohybovať buď jednotlivo, alebo po skupinách, čo významne skracuje čas potrebný na dosiahnutie požadovanej zložky."},
                    {title:"Alalalalla 2",text:"Pohyblivé Kebza regálové systémy Kebza sú mimoriadne efektívne všade tam, kde sa skladuje veľké množstvo materiálu, pričom skladovanie si vyžaduje za každých okolností jednoduchý a rýchly prístup k jednotlivým položkám. Ich efektivita spočíva v optimalizácii využitia priestoru, uľahčení prístupu k uskladneným materiálom a zvýšení dostupného priestoru až o 80%. Princíp spočíva vo vytvorení vždy iba jednej prístupovej uličky, ktorá sa nachádza tam, kde ju momentálne potrebujete. S regálmi je možné pohybovať buď jednotlivo, alebo po skupinách, čo významne skracuje čas potrebný na dosiahnutie požadovanej zložky."},
                    {title:"Alalalalla 3",text:"Pohyblivé Kebza Kebza regálové systémy sú mimoriadne efektívne všade tam, kde sa skladuje veľké množstvo materiálu, pričom skladovanie si vyžaduje za každých okolností jednoduchý a rýchly prístup k jednotlivým položkám. Ich efektivita spočíva v optimalizácii využitia priestoru, uľahčení prístupu k uskladneným materiálom a zvýšení dostupného priestoru až o 80%. Princíp spočíva vo vytvorení vždy iba jednej prístupovej uličky, ktorá sa nachádza tam, kde ju momentálne potrebujete. S regálmi je možné pohybovať buď jednotlivo, alebo po skupinách, čo významne skracuje čas potrebný na dosiahnutie požadovanej zložky."},
                ]
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
            type: Array,
            required: true
        },
        srcInfo: {
            type: String
        },
        srcCatalog: {
            type: String
        },

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

                    .teoretical-link {

                        cursor: pointer;
                        color: white;
                        font-size: 18px;
                        padding: 10px 50px;
                        opacity: 0.4;
                        transition: 0.3s;

                      @media (max-width: 570px) {

                          padding: 10px 20px;
                          font-size: 14px;

                      }

                      &:hover {

                          opacity: 1;

                      }

                    }  
                    
              

                        .teoretical-link  {
                            &.active{
                            opacity: 1;
                            }
                        }

                    

                }

            }   

        }

    }

}


</style>