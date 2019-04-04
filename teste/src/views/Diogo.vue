<template>
  <v-app>
    <v-toolbar app>
      <v-toolbar-title class="headline text-uppercase">
        <span>Vuetify</span>
        <span class="font-weight-light">MATERIAL DESIGN</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn
        flat
        href="https://github.com/vuetifyjs/vuetify/releases/latest"
        target="_blank"
      >
        <span class="mr-2">Latest Release</span>
      </v-btn>
    </v-toolbar>

    <v-content>
        <div class="text-xs-center">
            <v-bottom-sheet v-model="sheet">
              <template v-slot:activator>
                <v-btn
                  color="purple"
                  dark
                >
                  clique no diogo lindo
                </v-btn>
              </template>
              <v-list>
                <v-subheader>Open in</v-subheader>
                <v-list-tile
                  v-for="tile in tiles"
                  :key="tile.title"
                  @click="sheet = false"
                >
                  <v-list-tile-avatar>
                    <v-avatar size="32px" tile>
                      <img
                        :src="`https://cdn.vuetifyjs.com/images/bottom-sheets/${tile.img}`"
                        :alt="tile.title"
                      >
                    </v-avatar>
                  </v-list-tile-avatar>
                  <v-list-tile-title>{{ tile.title }}</v-list-tile-title>
                </v-list-tile>
              </v-list>
            </v-bottom-sheet>
          </div>
          
      <HelloWorld/>
    </v-content>
  </v-app>
</template>
<template>
    <v-carousel>
      <v-carousel-item
        v-for="(item,i) in items"
        :key="i"
        :src="item.src"
      ></v-carousel-item>
    </v-carousel>
  </template>


<script>
import HelloWorld from './components/HelloWorld'

export default {
  name: 'App',
  components: {
    HelloWorld
  },
  data () {
    return {
      //
    }
  }
}
</script>
<script>
    export default {
      data () {
        return {
          items: [
            {
              src: 'https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/39628824_116189772658280_2495744992501301248_n.jpg?_nc_cat=107&_nc_ht=scontent-gru2-1.xx&oh=aa576892fe5f9249431974c52805557a&oe=5D1FCB3B'
            },
            {
              src: 'https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/54514375_257553631855226_7883732747519262720_n.jpg?_nc_cat=110&_nc_ht=scontent-gru2-1.xx&oh=4a1f51a3425e9ad523e696a37211bf78&oe=5D4F5462'
            },
            {
              src: 'https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/52717504_245405319736724_8796948927585714176_n.jpg?_nc_cat=108&_nc_ht=scontent-gru2-1.xx&oh=ec377d01245185f6cd227e8c246e5fe8&oe=5D1CB3EB'
            },
            {
              src: 'https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/53788263_255256112084978_2678277005182500864_n.jpg?_nc_cat=111&_nc_ht=scontent-gru2-1.xx&oh=2d92c568cdf92e52455b2a2a92f74ec5&oe=5D1BD80D'
            }
          ]
        }
      }
    }
  </script>
  content_copy
  
