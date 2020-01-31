<template>
    <div class="web_content">
      
      <Hero class="archivne-systemy" title="Archivné systémy"></Hero>
      <HeroMenu :menuItems="menuItems"></HeroMenu>
      
      <div>
        <main>

          <VideoText 
          fillColor="#2385B6"
          title="Kvalitne rešenie pre vaš archív" 
          text="Pohyblivé regálové systémy (EK7500) a pevné regálové systémy (EK7600) sú skonštruované tak, aby vyhoveli všetkým požiadavkám zákazníkov na efektívnosť, optimalizáciu priestoru, bezpečnosť a bezporuchovosť. Pohyblivé a pevné regálové systémy sú ideálne pre všetky pracoviská, kde sa skladuje veľké množstvo materiálu a dokumentov. Regálový systém je navrhovaný s ohľadom na maximálne využitie kapacity archívu. Pri návrhu zohľadníme vaše požiadavky na skladovaný materiál a dizajn archívneho systému.">
          </VideoText>

          <Catalog 
          id="pohyblive_a_pevne_regaly"
          srcInfo="catalog_info_regaly.png"
          srcCatalog="catalog_img"
          :textCatalog="catalogText1"
          :textPopup="textPopup1"
          title="Pohyblivé a pevné regálové systémy" 
          textInfo="Pevné regály sú vhodné všade tam, kde je potrebný neustály prístup k skladovanému materiálu viacerých osôb súčasne. Pohyblivé regály efektívne šetria dostupnú plochu tak, že uličku medzi regálmi vytvoria len na mieste, kde je potrebná. Kapacita regálov sa tak zvýši až o 80%. Regály sa pohybujú po koľajniciach, ktoré môžu byť zaliate priamo do podlahy, alebo sú na povrchu ako samonosné, bez mechanického upevnenia o podlahu. Priestor medzi koľajami je vyplnený drevotrieskovým pódiom, na ktorom je položená nášľapná vrstva z PVC.Pohon regálov môže byť mechanický, pomocou otočných kľúk, alebo elektronický. Elektronický pohon umožní ovládanie regálov samostatne, alebo pomocou PC.">
          </Catalog>

          <Catalog 
          id="kniznicne_regaly"
          class="catalog__right"
          srcInfo="catalog_img_right.png"
          srcCatalog="katalog"
          :textCatalog="catalogText2"
          :textPopup="textPopup2" 
          title="Knižničné regály" 
          textInfo="Knižničné regály série EK7600 L sú konštrukčne odvodené od pevných regálov EK7500. Sú určené na zariadenie verejných aj neverejných knižníc. Vo všeobecnosti je to kombinácia konštrukcie regála z ocele a bočníc, ktoré sú vyrobené z dreva, podľa výberu zákazníka.">
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
        {link:"EK 7500",text:"Pohyblivé regálové systémy sú mimoriadne efektívne všade tam, kde sa skladuje veľké množstvo materiálu, pričom skladovanie si vyžaduje za každých okolností jednoduchý a rýchly prístup k jednotlivým položkám. Ich efektivita spočíva v optimalizácii využitia priestoru, uľahčení prístupu k uskladneným materiálom a zvýšení dostupného priestoru až o 80%. Princíp spočíva vo vytvorení vždy iba jednej prístupovej uličky, ktorá sa nachádza tam, kde ju momentálne potrebujete. S regálmi je možné pohybovať buď jednotlivo, alebo po skupinách, čo významne skracuje čas potrebný na dosiahnutie požadovanej zložky."},
        {link:"EK 7600",text:"Pevné regálové systémy EK 7600 sú vhodné všade tam, kde sa vyžaduje neustály prístup ku skladovanému materiálu, ale aj tam, kde sa vyžaduje prístup viacerých ľudí súčasne. Systém charakterizuje vysoká pevnosť a stabilita. Môže byť doplnený o široký rad príslušenstva tak, aby vyhovoval požiadavkám zákazníka. Kedykoľvek je možné doplnenie ďalších regálov priamo na mieste a tak zvyšovať kapacitu zároveň s rastom objemu skladovaného materiálu."},
      ],
      catalogText2:[
        {link:"EK 7600 L",text:"Knižničné regály série EK 7600 L sú určené na zariadenie verejných a neverejných priestorov knižníc. Konštrukčne vychádzajú z osvedčených prvkov posuvných (EK 7500) a pevných (EK 7600) regálových systémov. Systém EK 7600 L predstavuje univerzálnu stavebnicu prvkov a dielov, s pomocou ktorej je možné navrhnúť a realizovať vybavenie rôznych priestorov knižnice s prihliadnutím na ich špeciálne určenie (čitáreň, depozit, infocentrum atď.)."},
      ],
      textPopup1:[
        {title:"EK 7500",text:"Pohyblivé regálové systémy sú mimoriadne efektívne všade tam, kde sa skladuje veľké množstvo materiálu, pričom skladovanie si vyžaduje za každých okolností jednoduchý a rýchly prístup k jednotlivým položkám. Ich efektivita spočíva v optimalizácii využitia priestoru, uľahčení prístupu k uskladneným materiálom a zvýšení dostupného priestoru až o 80%. Princíp spočíva vo vytvorení vždy iba jednej prístupovej uličky, ktorá sa nachádza tam, kde ju momentálne potrebujete. S regálmi je možné pohybovať buď jednotlivo, alebo po skupinách, čo významne skracuje čas potrebný na dosiahnutie požadovanej zložky. S použitím pohyblivých regálov je možné archivačnú kapacitu až zdvojnásobiť a ušetrený priestor následne využiť na ďalší regálový systém, alebo na vytvorenie nového pracoviska. Vďaka modulárnej konštrukcii umožňujú bezpečné skladovanie a archivovanie rôznych dokumentov a predmetov. Celý systém môže byť kedykoľvek doplnený o vybrané príslušenstvo, a tak dokonale uspokojiť požiadavky zákazníkov. Naša spoločnosť ponúka, okrem štandardných typov, aj zákaznícke modely svojich výrobkov. Regálový systém môže byť navrhnutý a prispôsobený rozmerovo a tvarovo miestnosti s ohľadom na maximálne využitie kapacity archívu. Ponúkame naše dlhoročné skúsenosti vo výrobe a navrhovaní regálových systémov pre vytvorenie optimálneho návrhu pre každého zákazníka. Pri návrhu zohľadníme jeho špecifické požiadavky na kapacitu, rozloženie a dizajn navrhovaného archívu. Moderný a elegantný vzhľad bočníc umožňuje zabudovať posuvný regálový systém aj do reprezentačných či kancelárskych priestorov.",mainimg:"/images/ek_7500.jpg",infoimg:"/images/ek_7500_infoimg.jpg"},
        {title:"EK 7600",text:"Pevné regálové systémy EK 7600 sú vhodné všade tam, kde sa vyžaduje neustály prístup ku skladovanému materiálu, ale aj tam, kde sa vyžaduje prístup viacerých ľudí súčasne. Systém charakterizuje vysoká pevnosť a stabilita. Môže byť doplnený o široký rad príslušenstva tak, aby vyhovoval požiadavkám zákazníka. Kedykoľvek je možné doplnenie ďalších regálov priamo na mieste a tak zvyšovať kapacitu zároveň s rastom objemu skladovaného materiálu. Police sú prestaviteľné, vďaka čomu je možné prispôsobiť už dodaný archív prípadným zmenám v skladovanom druhu a rozmeroch materiálu.Na úpravu povrchu sa štandardne používa svetlosivá prášková farba RAL 7035, ale na požiadanie zákazníka je možné použiť aj inú farbu podľa vzorkovníka RAL.",mainimg:"/images/ek_7600.jpg",infoimg:"/images/ek_7600_infoimg.jpg"},
      ],
      textPopup2:[
        {title:"EK 7600 L",text:"Knižničné regály série EK 7600 L sú určené na zariadenie verejných a neverejných priestorov knižníc. Konštrukčne vychádzajú z osvedčených prvkov posuvných (EK 7500) a pevných (EK 7600) regálových systémov. Systém EK 7600 L predstavuje univerzálnu stavebnicu prvkov a dielov, s pomocou ktorej je možné navrhnúť a realizovať vybavenie rôznych priestorov knižnice s prihliadnutím na ich špeciálne určenie (čitáreň, depozit, infocentrum atď.). Regálový systém je možné v budúcnosti doplniť o nové perspektívne prvky, ktorých potrebu si vyžiada až praktické používanie regálov. Takýmto spôsobom môžeme lepšie zhodnotiť úžitkové vlastnosti systému a rozšíriť už skôr dodané zariadenie knižnice. Jednotlivé konfigurácie systému pozostávajú z optimalizovaných prvkov tak, aby spĺňali všetky individuálne požiadavky. Zariadenie knižnice vyrábame presne podľa predstáv zákazníkov. Na výber sú rôzne rozmery, farby a príslušenstvo, aby bolo možné maximálne optimalizovať priestory knižnice. Knižničný regálový systém EK 7600 L môžu tvoriť, okrem štandardných regálov na ukladanie kníh, aj samostatne stojace špeciálne mediálne regály na ukladanie dennej tlače a časopisov, CD nosičov a iných médií. Takto navrhnuté a realizované priestory sa stávajú príjemným miestom na štúdium a prácu všetkých návštevníkov knižnice. ",mainimg:"/images/ek_7600_l.jpg",infoimg:"/images/ek_7600_l_info.jpg"},
      ],
      menuItems:[
        {link:"Pohyblivé a pevné regály",id:"pohyblive_a_pevne_regaly"},
        {link:"Knižničné regály",id:"kniznicne_regaly"},
      ]
    }
  },
  head() {

    return {

      bodyAttrs: {

        class: 'color__blue'

      },
      meta: [
        { hid: 'description', name: 'description', content: 'Pohyblivé aj nepohyblivé regálové a archivačné systémy na mieru, presne pre vaše potreby. Pomôžeme vám s výberom a vyrobíme regálový systém, aký potrebujete.' },
        {hid: 'og:title', property: 'og:title', content: 'Regálové a archivačné systémy na mieru | PIKO s.r.o.'},
        {hid: 'og:description', property: 'og:description', content: 'Pohyblivé aj nepohyblivé regálové a archivačné systémy na mieru, presne pre vaše potreby. Pomôžeme vám s výberom a vyrobíme regálový systém, aký potrebujete.'},
      ],
    }

  }

}

</script>
