<template>
    <div class="web_content">
      <div>
      
      <Hero class="trezory" title="Trezory"></Hero>
      <HeroMenu></HeroMenu>
      
      </div>
      <div>
        <main>

          <VideoText 
          title="Moderné trezory a trezorové skrine" 
          text="Zákazník si môže vybrať zo širokého sortimentu trezorov a trezorových skríň v rôznych triedach bezpečnosti. Trezory a trezorové skrine sú doplnené o nábytkové a stenové trezory (kovové bezpečnostné schránky) určené súkromným osobám pre použitie v rodinných domoch a bytoch. Výrobkovú radu uzatvárajú výrobky pre otvorené bankové pracoviská, špeciálne konštrukcie trezorov, montované a komorové trezory.">
          </VideoText>

          <Catalog 
          srcInfo="catalog_info_regaly.png"
          srcCatalog="catalog_img"
          :textCatalog="catalogText1"
          title="Bezpečnostné trezorové skrine" 
          textInfo="Bezpečnostné trezorové skrine triedy EK 4100 - 4300 disponujú jednokrídlovou alebo dvojkrídlovou konštrukciou dverí (v závislosti od veľkosti skrine), zaistením dverí aretačnými čapmi a trojsmerným rozvorovým mechanizmom. Trezorové skrine sú štandardne uzamykateľné mechanickým bezpečnostným zámkom s dvomi kľúčmi (na želanie je možné zostaviť kombináciu zámkov podľa výberu zákazníka).">
          </Catalog>

          <Catalog 
          class="catalog__right"
          srcInfo="catalog_img_right.png"
          srcCatalog="katalog"
          :textCatalog="catalogText2" 
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
   data(){
    return{
      catalogText1:[
        {link:"EK 4100",text:"Bezpečnostná trezorová skriňa jednoplášťovej konštrukcie zodpovedajúca zabezpečeniu triedy A podľa VDMA 24992."},
        {link:"EK 4200",text:"Ľahká bezpečnostná oceľová skriňa dvojplášťovej konštrukcie zodpovedajúca zabezpečeniu triedy B podľa VDMA 24992."},
        {link:"EK 4300",text:"Ľahká bezpečnostná oceľová skriňa špeciálnej panelovej konštrukcie. Je vyplnená špeciálnou ohňovzdornou výplňou."},
      ],
      catalogText2:[
        {link:"EK 4700.0 LV",text:"Bezpečnostné trezory so stupňom zabezpečenia triedy 0 podľa normy EN 1143-1 (30/30 RU)."},
        {link:"EK 4700.1 LV",text:"Bezpečnostné trezory so stupňom zabezpečenia triedy 1 podľa normy EN 1143-1 (30/50 RU)."},
        {link:"EK 4700.2 LV",text:"Bezpečnostné trezory so stupňom zabezpečenia triedy 2 podľa normy EN 1143-1 (50/80 RU)."},
        {link:"EK 4700.3",text:"Bezpečnostné trezory so stupňom zabezpečenia triedy 3 podľa normy EN 1143-1 (80/120 RU)."},
      ]
    }
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
