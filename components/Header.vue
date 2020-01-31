<template>
    <header class="header__wrapper">

      <b-navbar class="header__menu">
        <template slot="brand">
            <b-navbar-item tag="router-link" :to="{ path: '/' }">
                <img
                  src="~/assets/images/svg/piko.svg"
                  alt="Piko"
                >
            </b-navbar-item>
        </template>
        <template slot="start">
            <b-navbar-item tag="router-link" to="/" class="header__menu--item">
                Archivné systémy
            </b-navbar-item>
            <b-navbar-item tag="router-link" to="/bezpecnost" class="header__menu--item">
                Bezpečnostné systémy
            </b-navbar-item>
            <b-navbar-item tag="router-link" to="/trezory" class="header__menu--item">
                Trezory
            </b-navbar-item>
            <b-navbar-item tag="router-link" to="#form" class="header__menu--item">
                Kontakty
            </b-navbar-item>
        </template>
    </b-navbar>

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

      background: none;
      width: 100%;
      display: flex;
      justify-content: space-between;

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

      .navbar-brand {

        @media (max-width: 1024px) {

          display: flex;
          justify-content: space-between;
          width: 100%;

        }

      }

      .navbar-burger {

        color: white;

        &.is-active {

          position: fixed;
          z-index: 999;
          right: 30px;
          color: black;

        }

        &:hover {

          background-color: rgba(0, 0, 0, 0) !important;

        }

      }

      .navbar-menu {

        flex-grow: 0;
        transition: 0.3s;

        @media (max-width: 1024px) {

          position: fixed;
          left: 0px;
          top: 0px;
          width: 100vw;
          height: 100vh;
          color: black;
          visibility: hidden;
          opacity: 0;

        }

        &.is-active {

          visibility: visible;
          opacity: 1;

        }

        .navbar-start {

          @media (max-width: 1024px) {

          height: 100%;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;

          }

        }


      }

      &--item {

        margin-right: 20px;
        color: #ffffff;  
        transition: 0.3s;
        font-family: Exo2-Regular;
        display: flex;
        align-items: center;

        &:hover {
         background: none !important;
         color: #ffffff !important;
         filter: brightness(80%);
        }

        @media (max-width: 1024px) {

          color: black;
          margin-right: 0px;
          margin-bottom: 20px;

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