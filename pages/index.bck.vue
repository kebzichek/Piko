<!-- Toto je stará titulka která byla nakódováná podle designu -->
<template>
  
  <div class="mainmenu__wrapper">

    <nuxt-link to="/systemy" class="mainmenu__item system">

      <div class="mainmenu__item--image">

        <div class="mainmenu__text">

          <div class="title">Archivné systémy</div>
          <div class="arrow"></div>

        </div>

        <div class="opacity"></div>

      </div>

      <div class="mainmenu__box"></div>

    </nuxt-link>

    <nuxt-link to="/trezory" class="mainmenu__item safe">

      <div class="mainmenu__item--image">

        <div class="mainmenu__text">

          <div class="title">Trezory</div>
          <div class="arrow"></div>

        </div>

        <div class="opacity"></div>

      </div>

      <div class="mainmenu__box"></div>

    </nuxt-link>

    <nuxt-link to="/bezpecnost" class="mainmenu__item security">

      <div class="mainmenu__item--image">

        <div class="mainmenu__text">

          <div class="title">Bezpečnostné prvky</div>
          <div class="arrow"></div>

        </div>

        <div class="opacity"></div>

      </div>

      <div class="mainmenu__box"></div>

    </nuxt-link>

  </div>

</template>

<style lang="less">

 .mainmenu {

   &__wrapper {

    display: flex;

     @media (max-width: 769px) {

      flex-direction: column;
      margin-top: 80px;

    }

   }

   &__item {

    width: calc(100% / 3);
    height: calc(100vh - 8px);
    position: relative;

    @media (max-width: 769px) {

      height: calc(100vh / 3 - 27px);
      width: 100%;

    }

    &:hover .mainmenu__item--image{

      filter: saturate(1);

    }

    &:hover.system {

      .mainmenu__box {

        background: #0072AB;

      }

      .opacity {

        opacity: 0;

      }

    }

    &:hover.safe {

      .mainmenu__box {

        background: #DF9E00;

      }

      .opacity {

        opacity: 0;

      }

    }

    &:hover.security {

      .mainmenu__box {

        background: #B62323;

      }

      .opacity {

        opacity: 0;

      }

    }

    &--image {
      
      background-repeat: no-repeat;
      background-size: cover;
      height: 100%;
      position: relative;
      filter: saturate(0);

      .opacity {

        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: black;
        opacity: .23;

      }

    }

     &.system {

       .mainmenu__item--image {

          background-image: url(~assets/images/archivni_systemy.png);

       }

      }

      &.safe {

        .mainmenu__item--image {

          background-image: url(~assets/images/trezory.png);

        }

      }

      &.security {

        .mainmenu__item--image {

          background-image: url(~assets/images/bezpecnostne_prvky.png);

        }

      }

   }

  &__box {

    height: 10px;
    margin-top: -2px;

    @media (max-width: 769px) {

      display: none;

    }

  }

  &__text {

    align-items: flex-end;
    position: absolute;
    bottom: 20px;
    padding: 0px 30px;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    width: 100%;

    .title {

      width: 220px;
      color: #ffffff;
      margin: 0;
      padding: 0px;
      font-family: Exo2-SemiBold;

    }

    .arrow {

      background: url(~assets/images/svg/arrow-right.svg);
      background-repeat: no-repeat;
      background-size: 100%;
      width: 40px;
      height: 40px;

    }

  }

 }

</style>

<script>

export default {

  layout: 'stranka1'

}

</script>
