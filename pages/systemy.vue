<template>
    <div class="web_content">
      
      <Hero class="archivne-systemy" title="Archivné systémy"></Hero>
      <HeroMenu :menuItems="menuItems"></HeroMenu>
      
      <div>
        <main>

          <VideoText 
          title="Kvalitne rešenie pre vaš archív" 
          text="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris elementum mauris vitae tortor. In rutrum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.">
          </VideoText>

          <Catalog 
          id="bezpecnostne_trezorove_skrine"
          srcInfo="catalog_info_regaly.png"
          srcCatalog="catalog_img"
          :textCatalog="catalogText1"
          :textPopup="textPopup1"
          title="Pohyblivé a pevné regálové systémy" 
          textInfo="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris elementum mauris vitae tortor. In rutrum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.">
          </Catalog>

          <Catalog 
          id="bezpecnostne_trezory"
          class="catalog__right"
          srcInfo="catalog_img_right.png"
          srcCatalog="katalog"
          :textCatalog="catalogText2"
          :textPopup="textPopup2" 
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
      ],
      textPopup1:[
        {title:"EK 4100",text:"EK 4100 je ľahká bezpečnostná trezorová skriňa. Jej jednoplášťová oceľová konštrukcia vyhovuje stupňu zabezpečenia triedy A podľa VDMA 24992. Samotný plášť skrine je vyrobený z plechu hrúbky 2,5 mm.",mainimg:"/images/ek_4100.jpg",infoimg:"/images/ek_4100_infoimg.png"},
        {title:"EK 4200",text:"EK 4200 predstavuje dvojplášťovú oceľovú skriňu. Konštrukcia trezorovej skrine zodpovedá stupňu zabezpečenia triedy B podľa VDMA 24992. Vonkajší plášť je vyrobený z plechu hrúbky 2,5 mm, hrúbka plechu vnútorného plášťa je 2 mm.",mainimg:"/images/ek_4200.jpg",infoimg:"/images/ek_4100_infoimg.png"},
        {title:"EK 4300",text:"EK 4300 je dvojplášťová oceľová skriňa špeciálnej panelovej konštrukcie. Panelová konštrukcia obsahuje ohňovzdornú výplň, ktorá zabezpečuje zvýšenú odolnosť voči teplu a chráni tak uložené predmety a dokumenty pred poškodením v prípade požiaru miestnosti, v ktorej je skriňa umiestnená.",mainimg:"/images/ek_4300.jpg",infoimg:"/images/ek_4100_infoimg.png"},
      ],
      textPopup2:[
        {title:"EK 4700.0 LV",text:"Bezpečnostné trezory série EK 4700.0 LV vyhovujú stupňu zabezpečenia triedy 0 podľa normy EN 1143-1(30/30 RU) a sú vyhotovené v súlade s bezpečnostným štandardom NBÚ: vyhl. 88/2002 Z.z.",mainimg:"/images/ek_47000_lv.jpg",infoimg:"/images/ek_4100_infoimg.png"},
        {title:"EK 4700.1 LV",text:"Bezpečnostné trezory série EK 4700.1 LV vyhovujú stupňu zabezpečenia triedy 1 podľa normy EN 1143-1(30/50 RU) a sú vyhotovené v súlade s bezpečnostným štandardom NBÚ: vyhl. 88/2002 Z.z. ",mainimg:"/images/ek_47001_lv.jpg",infoimg:"/images/ek_4100_infoimg.png"},
        {title:"EK 4700.2 LV",text:"Bezpečnostné trezory série EK 4700.2 LV vyhovujú stupňu zabezpečenia triedy 2 podľa normy EN 1143-1(50/80 RU) a sú vyhotovené v súlade s bezpečnostným štandardom NBÚ: vyhl. 88/2002 Z.z. ",mainimg:"/images/ek_47002_lv.jpg",infoimg:"/images/ek_4100_infoimg.png"},
        {title:"EK 4700.3",text:"Bezpečnostné trezory série EK 4700.3 vyhovujú stupňu zabezpečenia triedy 3 podľa EN 1143-1 (80/120 RU).",mainimg:"/images/ek_47003.jpg",infoimg:"/images/ek_4100_infoimg.png"},
      ],
      menuItems:[
        {link:"Bezpečnostné trezorové skrine",id:"bezpecnostne_trezorove_skrine"},
        {link:"Bezpečnostné trezory",id:"bezpecnostne_trezory"},
      ]
    }
  },
  head() {

    return {

      bodyAttrs: {

        class: 'color__blue'

      }

    }

  }

}

</script>
