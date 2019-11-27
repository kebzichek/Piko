<template>
        <div class="hero__wrapper">

            <div class="container">

                <div class="column">

                    <div class="hero__title">

                        <h1>{{ title }}</h1>

                    </div>

                </div>

            </div>

        </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            required: true
        }
  }
}
</script>
<style lang="less">

.hero {

    &__wrapper {
 
        background-position: center;    
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 290px;
        display: flex;
        align-items: flex-end;

        &.archivne-systemy {

            background-image: url(~assets/images/hero_archivne_systemy.png);
          
        }

         &.trezory {

            background-image: url(~assets/images/hero_trezory.png);

        }
        
        &.bezpecnost {

            background-image: url(~assets/images/hero_bezpecnostne_prvky.png);

        }

    }

      

    &__title {

        font-family: Exo2-Medium;
        font-size: 45px;
        color: #FFFFFF;
        margin-bottom: 50px;

    }

}

</style>