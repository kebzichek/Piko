<template>
  <div>
    <Header class="contentPage"></Header>

      <!--<aside class="column is-2 section">
        <p class="menu-label is-hidden-touch">
          General
        </p>
        <ul class="menu-list">
          <li
            v-for="(item, key) of items"
            :key="key"
          >
            <nuxt-link
              :to="item.to"
              exact-active-class="is-active"
            >
              <b-icon :icon="item.icon" /> {{ item.title }}
            </nuxt-link>
          </li>
        </ul>
      </aside>-->

      <nuxt />

      <footer class="footer">

          <div class="container footer__wrapper">
            <div class="footer__contacts column is-5">

                <div class="footer__contacts--text">

                    <div class="footer__contacts--logo"></div>
                    <div class="contact"><strong>PIKO, s. r. o.</strong><br>
                        Ing. Štefan Konečný<br>
                        Drevorubecká 122,<br>
                        Považská Bystrica
                    </div>
                    <div class="phone-mail">
                        <a href="tel:+421 0627 282 937" class="phone"><span class="text">+421 0627 282 937</span></a>
                        <a href="mailto:piko.sro@gmail.com" class="mail"><span class="text">piko.sro@gmail.com</span></a>
                    </div>
                    <ul class="footer__menu">

                        <li><a href="#">Bezpečnostné systémy</a></li>
                        <li><a href="#">Trezory</a></li>

                    </ul>

                </div>

            </div>

            <div class="column is-1"></div>

            <div class="footer__form column is-5">

                <div class="footer__form--title">Máte zaujem o realizáciu? <br>Dajte nám vedieť.</div>
                <form class="form">

                    <b-field>
                        <b-input placeholder="Meno"></b-input>
                    </b-field>
                    <b-field>
                        <b-input type="email" placeholder="E-mail"></b-input>
                    </b-field>
                    <b-field>
                        <b-input type="tel" placeholder="Telefon"></b-input>
                    </b-field>
                    <b-field>
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>
                    <input class="btn" type="submit" value="Poslať správu">

                </form>

            </div>
          </div>

      </footer>
   
  </div>
</template>

<script>
import Header from '~/components/Header'
import Hero from '~/components/Hero'

export default {
  components: {

    Header,
    Hero

  }
}
</script>

<style lang="less">

    .color__blue {

        .footer {

            background-image: url(../assets/images/svg/footer_bck.svg);

        }

        .web_content {

            h2 {

                background: #2385B6;

            }

        }

    }

    .color__yellow {

        .footer {

            background-image: url(../assets/images/svg/footer_bck_yellow.svg);

        }

    }

    .color__red {

        .footer {

            background-image: url(../assets/images/svg/footer_bck_red.svg);

        }

    }

    .web_content {

        h2 {

            font-family: Exo2-Medium;
            font-size: 22px;
            color: #FFFFFF;
            display: inline-block;
            padding: 5px 15px;

        }

        .btn {

            font-family: Exo2-Medium;
            font-size: 18px;
            color: #FFFFFF;
            background: #2385B6;
            padding: 5px 25px;


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
      max-height: 700px;
      padding: 150px 0px 50px 0px;
      position: relative;
      z-index: -3;

      &__wrapper {

        display: flex;
        align-items: flex-start;

      }

      &__contacts {

          color: #ffffff;

          a {

              color: #ffffff;

              &:hover {

                  text-decoration: underline;

              }

          }

          &--logo {

              background: url(../assets/images/svg/piko.svg);
              background-repeat: no-repeat;
              background-size: 100%;
              width: 70px;
              height: 30px;
              margin-bottom: 50px;

          }

          &--text {

              .contact {

                  margin-bottom: 40px;

                  strong {

                      color: #ffffff;

                  }

              }

              .phone-mail {

                  display: flex;
                  flex-direction: column;
                  margin-bottom: 100px;

                  a {

                      font-weight: bold;
                    
                  }

                  .phone {

                      display: flex;
                      align-items: center;
                      margin-bottom: 10px;

                      &:before {

                          content: '';
                          background: url(../assets/images/svg/phone.svg);
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
                          background: url(../assets/images/svg/mail.svg);
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

              li {

                  margin-right: 20px;

                  &:last-child {

                      margin-right: 0px;

                  }

              } 

        }

        &__form {

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

            }

        }

  }

</style>

