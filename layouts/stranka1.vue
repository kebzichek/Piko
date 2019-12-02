<template>
  <div>
    <header class="header__wrapper">

      <nuxt-link to="/" class="header__logo">
        
        <div class="header__logo--item"></div>
        
      </nuxt-link>

      <nav class="header__menu">

        <ul class="header__menu--items">

          <li class="header__menu--item"><nuxt-link to="trezory#form">Kontakty</nuxt-link></li>

        </ul>

      </nav>

    </header>

    
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

      <main>
        <nuxt />
      </main>
   
  </div>
</template>

<style lang="less" scoped>

  .header {

    &__wrapper {

      align-items: center;
      background: #131313;
      display: flex;
      justify-content: space-between;
      padding: 30px;
      position: absolute;
      width: 100%;
      top: 0px;

    }

    &__logo {

      &--item {

        background-image: url('~assets/images/svg/piko.svg');
        background-repeat: no-repeat;
        background-size: 100%;
        width: 70px;
        height: 20px;

      }

    }

    &__menu {

      &--item {

        a {

          color: #ffffff;

        }

      }

    }

  }

</style>
