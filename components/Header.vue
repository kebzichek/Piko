<template>
    <header class="header__wrapper">

      <a href="/" class="header__logo">
        
        <div class="header__logo--item"></div>
        
      </a>

      <nav class="header__menu">

        <ul class="header__menu--items">

          <li class="header__menu--item"><a href="systemy">Archivné systémy</a></li>
          <li class="header__menu--item"><a href="bezpecnost">Bezpečnostné systémy</a></li>
          <li class="header__menu--item"><a href="trezory">Trezory</a></li>
          <li class="header__menu--item"><a href="#">Kontakty</a></li>

        </ul>

      </nav>

    </header>
</template>

<script>
export default {
    
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

      &.contentPage {

        background: none;
        position: absolute;
        width: 100%;

      }

    }

    &__logo {

      &--item {

        background-image: url(../assets/images/svg/piko.svg);
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

      }

      &--item {

        margin-right: 20px;

        a {

          color: #ffffff;

        }

      }

    }

  }

</style>