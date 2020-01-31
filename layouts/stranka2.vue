<template>
  <div>
    <Header class="contentPage"></Header>

      <nuxt />

      <footer class="footer" id="form">

          <div class="container footer__wrapper">
            <div class="footer__contacts column is-5">

                <div class="footer__contacts--text">
                    <div class="footer__contacts--left">
                        <div class="footer__contacts--logo"></div>
                        <div class="contact"><strong>PIKO, s. r. o.</strong><br>
                            Ing. Štefan Konečný<br>
                            Centrum 26/31,<br>
                            Považská Bystrica
                        </div>
                    </div>
                    <div class="phone-mail">
                        <a href="tel:+421 905 716 306" class="phone"><span class="text">+421 905 716 306</span></a>
                        <a href="mailto:piko.sro@gmail.com" class="mail"><span class="text">piko.sro@gmail.com</span></a>
                    </div>
                    <ul class="footer__menu">

                        <li><nuxt-link to="/bezpecnost">Bezpečnostné systémy</nuxt-link></li>
                        <li><nuxt-link to="/trezory">Trezory</nuxt-link></li>

                    </ul>

                </div>

            </div>

            <div class="column is-1"></div>

            <div class="footer__form column is-5">

                <div class="footer__form--title">Máte zaujem o realizáciu? <br>Dajte nám vedieť.</div>

                    <b-field>
                        <b-input v-model="name" placeholder="Meno"></b-input>
                    </b-field>
                    <b-field>
                        <b-input  v-model="mail" type="email" placeholder="E-mail"></b-input>
                    </b-field>
                    <b-field>
                        <b-input v-model="tel" type="tel" placeholder="Telefon"></b-input>
                    </b-field>
                    <b-field>
                        <b-input v-model="message" name="message" type="textarea"></b-input>
                    </b-field>
                    <input class="btn" @click="suc()" type="button" value="Poslať správu">


            </div>
          </div>

      </footer>
   
  </div>
</template>

<script>
import axios from 'axios'
import Header from '~/components/Header'
import Hero from '~/components/Hero'

export default {
  components: {

    Header,
    Hero

  },
  data() {
            return {
                name: "",
                mail: null,
                message: "",
                tel: "",
                confirmPassword: null,
                gender: null,
                question: null,
                flagTerms: false
            }
        },
        methods: {
            validateBeforeSubmit() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        this.$buefy.toast.open({
                            message: 'Form is valid!',
                            type: 'is-success',
                            position: 'is-bottom'
                        })
                        return;
                    }
                    this.$buefy.toast.open({
                        message: 'Form is not valid! Please check the fields.',
                        type: 'is-danger',
                        position: 'is-bottom'
                    })
                });
            },
            suc(){
      this.$buefy.toast.open({
                        message: 'Formulár zatiaľ nefunguje. Použite prosím e-mail piko.sro@gmail.com',
                        type: 'is-danger',
                        position: 'is-bottom'
                    })
            },
               sendMail(){
      if (this.name == "" || this.email == "" || this.message == ""){
        return false;
      }
      axios({
        method: 'post',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        url: this.$store.state.ajaxfile,
        data: {
          "mail": "Contact",
          "name": this.name,
          "email": this.mail,
          "tel": this.tel,
          "message":this.message
        }
    })
    .then(res => {
      if (res.data == "ok"){
        this.email = "";
        this.name = "";
        this.message = "";
        this.$buefy.toast.open({
                    message: 'Die Email wurde erfolgreich versendet',
                    type: 'is-success'
                })
          
            
      } else {
        console.error(res.data);
      }
      });
    }
  }
        
}
</script>

<style lang="less">

html {

    scroll-behavior: smooth;
    font-family: Exo2-Regular;

}

@colorBlue: #2385B6;
@colorYellow: #DF9E00;
@colorRed: #B62323;

    .color__blue {

        .footer {

            background-image: url(~assets/images/svg/footer_bck.svg);

            &__form {

                @media (max-width: 769px){

                    background: @colorBlue;

                }

            }

        }

        .web_content {

            h2 {

                background: @colorBlue;


            }

            .video_h2 {

                @media (max-width: 400px) {

                    background: none;
                    color: @colorBlue;
                    font-weight: bold;
                    font-size: 20px;

                }

            }

        }

        .catalog__items--menu {

            ul {

                .teoretical-link {

                    background: @colorBlue;

                }

            }

        }

        .btn {

            background: @colorBlue;
            cursor: not-allowed;

        }

        .pop-up {

            &__title {

                background: @colorBlue;

            }

        }

    }

    .color__yellow {

        .footer {

            background-image: url(~assets/images/svg/footer_bck_yellow.svg);

            &__form {

                @media (max-width: 769px){

                    background: @colorYellow;

                }

            }

        }

        .web_content {
            

            h2 {

                background: @colorYellow;

            }

            .video_h2 {

                @media (max-width: 400px) {

                    background: none;
                    color: @colorYellow;
                    font-weight: bold;
                    font-size: 20px;

                }

            }

        }

        .catalog__items--menu {

            ul {

                .teoretical-link {

                    background: @colorYellow;

                }

            }

        }

        .btn {

            background: @colorYellow;

        }

        .pop-up {

            &__title {

                background: @colorYellow;

            }

        }


    }

    .color__red {

        .footer {

            background-image: url(~assets/images/svg/footer_bck_red.svg);

            &__form {

                @media (max-width: 769px){

                    background: @colorRed;

                }

            }

        }

        .web_content {

            h2 {

                background: @colorRed;

            }

            .video_h2 {

                @media (max-width: 400px) {

                    background: none;
                    color: @colorRed;
                    font-weight: bold;
                    font-size: 20px;

                }

            }

        }

        .catalog__items--menu {

            ul {

                .teoretical-link {

                    background: @colorRed;

                }

            }

        }

        .btn {

            background: @colorRed;

        }

        .pop-up {

            &__title {

                background: @colorRed;

            }

        }

    }

    .web_content {

        position: relative;
        z-index: 1;

        h2 {

            font-family: Exo2-Medium;
            font-size: 22px;
            color: #FFFFFF;
            display: inline-block;
            padding: 5px 15px;

            @media (max-width: 570px) {

                font-size: 18px;
                padding: 5px 5px;
                width: 100%;
                text-align: center;

            }

        }

        .btn {

            font-family: Exo2-Medium;
            font-size: 18px;
            color: #FFFFFF;
            border: none;
            padding: 5px 25px;
            cursor: pointer;
            transition: 0.3s;

            &:hover {

                filter: brightness(80%);

            }

            @media (max-width: 400px) {

                font-size: 14px;
                width: 100%;
                padding: 8.5px 25px;

            }


        }   

    }

    .container {

        width: 90%;
        flex-grow: 0;

    }
    @media screen and (min-width: 1280px){
    .container{
        width: 1190px;
        max-width: 1190px;
        &.large{
            max-width: 1250px;
            width: 1250px;
        }
    }
    }

  .footer {

      padding: 0px;
      background: none;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      max-height: 700px;
      padding: 150px 0px 50px 0px;
      position: relative;

      @media (max-width: 769px) {

          padding: 0px;
          background-image: none !important;

      }

      .container {

        @media (max-width: 769px) {

          padding: 0px;
          margin: 0px;
          width: 100%;

        }

      }

      &__wrapper {

        display: flex;
        align-items: flex-start;

        @media (max-width: 769px) {

            flex-direction: column;

        }

      }

      &__contacts {

          color: #ffffff;

            @media (max-width: 769px) {

                order: 2;
                width: 100%;
                background-color: #131313;
                padding: 50px 37px;

            }

          a {

              color: #ffffff;

              &:hover {

                  text-decoration: underline;

              }

          }

          &--logo {

              background: url(~assets/images/svg/piko.svg);
              background-repeat: no-repeat;
              background-size: 100%;
              width: 70px;
              height: 30px;
              margin-bottom: 50px;

          }

          &--text {

              @media (max-width: 769px) {

                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: wrap;

            } 

              .contact {

                  margin-bottom: 40px;
                  font-family: Exo2-Regular;

                    @media (min-width: 400px) and (max-width: 769px) {

                        margin-bottom: 0px;

                    } 

                  strong {

                      color: #ffffff;

                  }

              }

              .phone-mail {

                  display: flex;
                  flex-direction: column;
                  margin-bottom: 100px;
                  font-family: Exo2-SemiBold;

                    @media (max-width: 769px) {

                        margin-bottom: 0px;

                    } 

                  a {

                      font-weight: bold;
                    
                  }

                  .phone {

                      display: flex;
                      align-items: center;
                      margin-bottom: 10px;

                      &:before {

                          content: '';
                          background: url(~assets/images/svg/phone.svg);
                          background-repeat: no-repeat;
                          background-size: cover;
                          width: 17px;
                          height: 17px;
                          position: absolute;


                      }

                      .text {

                          margin-left: 30px;

                      }

                  }

                  .mail {

                      display: flex;
                      align-items: center;

                      &:before {

                          content: '';
                          background: url(~assets/images/svg/mail.svg);
                          background-repeat: no-repeat;
                          background-size: cover;
                          width: 17px;
                          height: 17px;
                          position: absolute;


                      }

                      .text {

                          margin-left: 30px;

                      }

                  }

              }

          }

      }

        &__menu {

          display: flex;
          font-family: Exo2-Regular;

          @media (max-width: 769px) {

              display: none;

          } 

              li {

                  margin-right: 20px;

                  &:last-child {

                      margin-right: 0px;

                  }

              } 

        }

        &__form {

            @media (max-width: 769px) {

                width: 100%;
                padding: 150px 37px 50px 37px;

            }

            &--title {

                font-family: Exo2-Medium;
                font-size: 22px;
                color: #FFFFFF;
                line-height: 25px;
                margin-bottom: 30px;

            }

            .btn {

                background: rgba(255,255,255,0.32);
                border-radius: 3px;
                border: none;
                color: #ffffff;
                width: 100%;
                padding: 10px 0px;
                font-size: 18px;
                cursor: pointer;
                margin-top: -20px;
                transition: 0.3s;

                &:hover {

                    color: #1F1F1F;

                }

            }

            .form {

                input {

                    font-family: Exo2-Medium;

                }

            }

        }

  }

</style>

