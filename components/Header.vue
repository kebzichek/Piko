<template>
    <header class="header__wrapper">

      <nuxt-link to="/" class="header__logo">
        
        <div class="header__logo--item"></div>
        
      </nuxt-link>

      <nav class="header__menu">

        <ul class="header__menu--items">

          <li class="header__menu--item"><nuxt-link to="systemy">Archivné systémy</nuxt-link></li>
          <li class="header__menu--item"><nuxt-link to="bezpecnost">Bezpečnostné systémy</nuxt-link></li>
          <li class="header__menu--item"><nuxt-link to="trezory">Trezory</nuxt-link></li>
          <li class="header__menu--item"><nuxt-link to="#form">Kontakty</nuxt-link></li>

        </ul>

        <div class="header__menu-mobile" @click="active"></div>

      </nav>

    </header>
</template>

<script>
export default {

  methods: {

    active:function() {

      alert("Nevím co sem mám napsat :( ");

    }

  }
    
}
</script>

<style lang="less">

.header {

    &__wrapper {

      align-items: center;
      background: #131313;
      display: flex;
      justify-content: space-between;
      padding: 30px;
      z-index: 2;

      &.contentPage {

        background: none;
        position: absolute;
        width: 100%;

      }

    }

    &__logo {

      &--item {

        background-image: url(~assets/images/svg/piko.svg);
        background-repeat: no-repeat;
        background-size: 100%;
        width: 70px;
        height: 20px;

      }

    }

    &__menu {

      &--items {

        display: flex;
        align-items: center;

        @media (max-width: 769px) {

          position: fixed;
          top: 0px;
          left: 0px;
          background: #ffffff;
          width: 100vw;
          height: 100vh;
          z-index: 999;
          flex-direction: column;
          justify-content: center;
          opacity: 0;
          visibility: hidden;

        }

      }

      &--item {

        margin-right: 20px;

        @media (max-width: 769px) {

            margin-bottom: 30px;

          }

        a {

          color: #ffffff;
          transition: 0.3s;
          font-family: Exo2-Regular;

          &:hover {

            filter: brightness(80%);

          }

          @media (max-width: 769px) {

            color: black;

          }

        }

      }

    }

    &__menu-mobile {

      display: none;
      background-image: url(~assets/images/svg/menu.svg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      width: 20px;
      height: 20px;

      @media (max-width: 769px){

        display: flex;
        

      }

    }

  }

</style>