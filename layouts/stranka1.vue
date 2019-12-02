<template>
  <div>
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
            <nuxt-link to="/trezory#form" class="header__menu--item">
                Kontakty
            </nuxt-link>
        </template>
    </b-navbar>

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
      padding: 15px 30px;
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
