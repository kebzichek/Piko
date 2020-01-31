<template>
    <div class="web_content">
      
      <Hero class="bezpecnost" title="Bezpečnostné prvky"></Hero>
      <HeroMenu :menuItems="menuItems"></HeroMenu>
      
      <div>
        <main>

          <VideoText 
          title="Ochrana pracovísk, bezpečnostné prvky na mieru" 
          fillColor="#B62323"
          text='Funkcia a činnosť mnohých pracovísk je spojená so zvýšeným rizikom lúpeže, čo zvyšuje nároky na triedu bezpečnosti ich zabezpečenia. Výrobky série EK5000 sú určené na použitie práve v rizikovom priestore, pričom neslúžia len na ochranu predmetov, ale aj samotných zamestnancov. Ponúkame návrhy, výrobu, dodávku a montáž zabezpečovacích mechanických systémov v rôznych triedach bezpečnosti podľa DIN 52290. '>
          </VideoText>

          <div class="catalogtext__back">
          <CatalogText 
          id="bezpecnostne_mreze"
          srcInfo="bezp_mrize.png"
          title="Bezpečnostné mreže" 
          textInfo="Bezpečnostné mreže slúžia na doplnkové zabezpečenie objektov a ich súčastí, ako sú presklené výplne predajní a okenné a dverové výplne chránených objektov, vstupov do pasáží, supermarketov a iných priestorov. Sú vyrábané a certifikované (NBÚ) vo všetkých triedach bezpečnosti proti vlámaniu (podľa EN 1627).">
          </CatalogText>

          <CatalogText 
          id="bezpecnostne_dvere_a_steny"
          class="catalog__right"
          srcInfo="bezp_dvere.png"
          title="Bezpečnostné dvere a steny s balistickou odolnosťou" 
          textInfo="Bezpečnostné dvere so zvýšenou balistickou odolnosťou sú určené na mechanické zabezpečenie prístupu do chránených objektov, pokladní, vstupných dverí do špeciálnych miestností, archívov, finančných inštitúcií, správnych a daňových úradov, ale aj nemocníc, knižníc, predajní, kancelárií a skladov. Bezpečnostné dvere spĺňajú triedu bezpečnosti 4 s balistickou odolnosťou podľa vyhotovenia G0 alebo G2. Kombináciou vysokokvalitných výrobkov DK II  je možné zmeniť vybrané objekty, miestnosti a trezorové komory na bezpečnostné montované komory.">
          </CatalogText>

          <CatalogText 
          id="bezpecnostne_okienka"
          srcInfo="bezpecnostnie_okienka.png"
          title="Bezpečnostné okienka" 
          textInfo="Bezpečnostné okienko s pultom EK5300 je vybavené priehlbinou, alebo presúvacím mechanizmom, komunikačným zariadením a nepriestrelným sklom. Kombináciou bezpečnostného okienka a dotačnej bezpečnostnej skrine sú dotačné zariadenie EK5400, EK5500, EK5600, ktoré sa líšia veľkosťou. ">
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
      menuItems:[
        {link:"Bezpečnostné mreže",id:"bezpecnostne_mreze"},
        {link:"Bezpečnostné dvere a steny s balistickou odolnosťou",id:"bezpecnostne_dvere_a_steny"},
        {link:"Bezpečnostné okienka",id:"bezpecnostne_okienka"},
      ]
    }
  },

  head() {

    return {

      bodyAttrs: {

        class: 'color__red'

      },
       meta: [
        { hid: 'description', name: 'description', content: 'Návrhy, výroba a montáž zabezpečovacích systémov a bezpečnostných prvkov vo všetkých triedach bezpečnosti. Bezpečnostné mreže, steny, dvere, okienka, komory.' },
        {hid: 'og:title', property: 'og:title', content: 'Zabezpečenie pracovísk na mieru | PIKO s.r.o.'},
        {hid: 'og:description', property: 'og:description', content: 'Návrhy, výroba a montáž zabezpečovacích systémov a bezpečnostných prvkov vo všetkých triedach bezpečnosti. Bezpečnostné mreže, steny, dvere, okienka, komory.'},
      ],

    }

  }

}

</script>
