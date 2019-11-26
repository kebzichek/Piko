<template>
    <div class="web_content">
      <div>
      
      <Hero class="bezpecnost" title="Bezpečnostné prvky"></Hero>
       <HeroMenu></HeroMenu>
      
      </div>
      <div>
        <main>



        </main>

      </div>

    </div>

</template>


<script>

import Hero from '~/components/Hero';
import HeroMenu from '~/components/HeroMenu';

export default {

  layout: 'stranka2',
  components: {

    Hero,
    HeroMenu

  },

  head() {

    return {

      bodyAttrs: {

        class: 'color__red'

      }

    }

  }

}

</script>
