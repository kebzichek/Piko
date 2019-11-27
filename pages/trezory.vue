<template>
    <div class="web_content">
      <div>
      
      <Hero class="trezory" title="Trezory"></Hero>
      <HeroMenu></HeroMenu>
      
      </div>
      <div>
        <main>

          <VideoText 
          title="Kvalitne rešenie pre vaš archív" 
          text="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris elementum mauris vitae tortor. In rutrum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.">
          </VideoText>

          <Catalog 
          srcInfo="catalog_info_regaly.png"
          srcCatalog="catalog_img"
          textCatalog="Pohyblivé regálové systémy sú mimoriadne efektívne všade tam, kde sa skladuje veľké množstvo materiálu, pričom skladovanie si vyžaduje za každých okolností jednoduchý a rýchly prístup k jednotlivým položkám. Ich efektivita spočíva v optimalizácii využitia priestoru, uľahčení prístupu k uskladneným materiálom a zvýšení dostupného priestoru až o 80%. Princíp spočíva vo vytvorení vždy iba jednej prístupovej uličky, ktorá sa nachádza tam, kde ju momentálne potrebujete. S regálmi je možné pohybovať buď jednotlivo, alebo po skupinách, čo významne skracuje čas potrebný na dosiahnutie požadovanej zložky." 
          title="Pohyblivé a pevné regálové systémy" 
          textInfo="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris elementum mauris vitae tortor. In rutrum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.">
          </Catalog>

          <Catalog 
          class="catalog__right"
          srcInfo="catalog_img_right.png"
          srcCatalog="katalog"
          textCatalog="Pohyblivé regálové systémy sú mimoriadne efektívne všade tam, kde sa skladuje veľké množstvo materiálu, pričom skladovanie si vyžaduje za každých okolností jednoduchý a rýchly prístup k jednotlivým položkám. Ich efektivita spočíva v optimalizácii využitia priestoru, uľahčení prístupu k uskladneným materiálom a zvýšení dostupného priestoru až o 80%. Princíp spočíva vo vytvorení vždy iba jednej prístupovej uličky, ktorá sa nachádza tam, kde ju momentálne potrebujete. S regálmi je možné pohybovať buď jednotlivo, alebo po skupinách, čo významne skracuje čas potrebný na dosiahnutie požadovanej zložky." 
          title="Knižničné regály" 
          textInfo="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris elementum mauris vitae tortor. In rutrum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.">
          </Catalog>

        </main>

      </div>

    </div>

</template>


<script>

import Hero from '~/components/Hero'
import HeroMenu from '~/components/HeroMenu'
import VideoText from '~/components/VideoText'
import Catalog from '~/components/Catalog'

export default {

  layout: 'stranka2',
  components: {

    Hero,
    HeroMenu,
    VideoText,
    Catalog

  },
  head() {

    return {

      bodyAttrs: {

        class: 'color__yellow'

      }

    }

  }

}

</script>
