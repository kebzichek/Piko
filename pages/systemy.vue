<template>
    <div class="web_content">
      <div>
      
      <Hero class="archivne-systemy" title="Archivné systémy"></Hero>
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
          :textCatalog="catalogText"
          title="Pohyblivé a pevné regálové systémy" 
          textInfo="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris elementum mauris vitae tortor. In rutrum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.">
          </Catalog>

          <Catalog 
          class="catalog__right"
          srcInfo="catalog_img_right.png"
          srcCatalog="katalog"
          :textCatalog="catalogText"
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
      catalogText:[
        {link:"E460",text:"Jedna mrdka"},
        {link:"E55",text:"Druhá mrdka"},
        {link:"Kebza",text:"Ahoj Kebzo!"},
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
