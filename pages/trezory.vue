<template>
    <div class="web_content">
      
      <Hero class="trezory" title="Trezory"></Hero>
      <HeroMenu :menuItems="menuItems"></HeroMenu>
      
      <div>
        <main>

          <VideoText 
          title="Bezpečnostné trezory a trezorové skrine"
          fillColor="#DF9E00"
          text="Zákazník si môže vybrať zo širokého sortimentu trezorov a trezorových skríň v rôznych triedach bezpečnosti. Trezory a trezorové skrine sú doplnené o nábytkové a stenové trezory (kovové bezpečnostné schránky) určené súkromným osobám pre použitie v rodinných domoch a bytoch. Výrobkovú radu uzatvárajú výrobky pre otvorené bankové pracoviská, špeciálne konštrukcie trezorov, montované a komorové trezory.">
          </VideoText>

          <div class="catalogtext__back">
          <CatalogText 
          id="bezpecnostne_trezorove_skrine"
          srcInfo="trezorove_skrine.png"
          title="Trezorové skrine" 
          textInfo="Bezpečnostné trezorové skrine EK 4100, ako jednoplášťové oceľové skrine, spoľahlivo ochránia uložené predmety pomocou istenia dverí aretačnými čapmi a trojsmerným rozvorovým mechanizmom. Trezorové skrine sú štandardne uzamykateľné mechanickým bezpečnostným zámkom s dvomi kľúčmi. Vnútorná výbava predstavuje variabilne prestaviteľné police. Skrine je možné ukotviť o podlahu pomocou kotviacich otvorov. Povrch je štandardne upravený práškovou farbou RAL 7035 – svetlosivá, avšak je možné aplikovať aj iné farby podľa vzorkovníka RAL."
          >
          
          </CatalogText>
          <CatalogText 
          id="bezpecnostne_trezory"
          class="catalog__right"
          srcInfo="bezp_trezory.png"
          title="Bezpečnostné trezory" 
          textInfo="Bezpečnostné trezory série EK 4700 vyrábané v triedach bezpečnosti 0 – 5. Sú certifikované podľa normy EN 1143-1 v súlade s bezpečnostnými štandardom NBÚ. Všetky trezory majú viacplášťovú konštrukciu. Dvere trezorov sú istené aretačnými čapmi a štvorstranným rozvorovým mechanizmom. Štandardné vybavenie predstavujú variabilne prestaviteľné police  a príprava pre montáž EZS. Voliteľne môže byť trezor doplnený o police, vnútorné uzamykateľné skrinky, výsuvné rámy a pod. Všetky trezory je možné ukotviť o podlahu pomocou kotviacich otvorov. Povrch je štandardne upravený práškovou farbou RAL 7035 – svetlosivá, avšak je možné aplikovať aj iné farby podľa vzorkovníka RAL. Na zaistenie maximálnej bezpečnosti uskladnených predmetov sa používajú kvalitné zámky renomovaných svetových výrobcov, ako sú Mauer, Wittkopp, Sargent & Greenleaf, alebo La Gard. Použité zámky môžu byť kľúčové, ružicové, tlačidlové, alebo ich kombinácia."
          >
          </CatalogText>
          <CatalogText 
          id="nabytkove_a_stenove_trezory"
          srcInfo="nabytkove_a_stenove.png"
          title="Nábytkové a stenové trezory " 
          textInfo="Trezory triedy EK 4500 N (nábytkové) a EK 4500 S (stenové) sú konštrukčne navrhnuté tak, aby umožňovali jednoduchú inštaláciu do nábytku, alebo do steny. Štandardne sú vybavené kvalitným trezorovým zámkom zvyšujúcim ochranu všetkých uskladnených dokumentov a predmetov. Uvedené trezory sú určené do domácností, kancelárií, prípadne hotelov."
          >
          </CatalogText>
          <div class="catalog__right">
           <div class="catalog__background"></div>
          </div>
          </div>

        </main>

      </div>

    </div>

</template>


<script>

import Hero from '~/components/Hero'
import HeroMenu from '~/components/HeroMenu'
import VideoText from '~/components/VideoText'
import Catalog from '~/components/Catalog'
import CatalogText from '~/components/CatalogText'

export default {

  layout: 'stranka2',
  components: {

    Hero,
    HeroMenu,
    VideoText,
    Catalog,
    CatalogText

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
        {link:"Trezorové skrine",id:"bezpecnostne_trezorove_skrine"},
        {link:"Bezpečnostné trezory",id:"bezpecnostne_trezory"},
         {link:"Nábytkové a stenové trezory",id:"nabytkove_a_stenove_trezory"},
      ]
    }
  },
  head() {

    return {

      bodyAttrs: {

        class: 'color__yellow'

      },
       meta: [
        { hid: 'description', name: 'description', content: 'Trezory vo všetkých triedach bezpečnosti pre domáce aj firemné použitie. Poradíme s výberom a dodáme trezor za super cenu na mieru presne pre vás.' },
        {hid: 'og:title', property: 'og:title', content: 'Bezpečnostné trezory na mieru. Všetky triedy. | PIKO s.r.o.'},
        {hid: 'og:description', property: 'og:description', content: 'Trezory vo všetkých triedach bezpečnosti pre domáce aj firemné použitie. Poradíme s výberom a dodáme trezor za super cenu na mieru presne pre vás.'},
      ],

    }

  }

}

</script>
