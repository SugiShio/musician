<template lang="pug">
.m-container(:class='pageId')
  h2.m-title {{ title }}
  .m-container__inner
    transition(name='slide' mode='out-in')
      slot(:name='pageId')
  a.m-menuButton(@click='toggleMenu')
    i(:class='classMenuButton').icon-close
  mao-menu(
    :class='{ shown: isMenuShown }'
    :menuItems='menuItems'
    )
</template>

<script>
import maoMenu from '../components/menu/index.vue'
export default {
  components: { maoMenu },
  props: {
    menuItems: { type: Array, default: () => [] }
  },
  data() {
    return {
      isMenuShown: false
    }
  },
  computed: {
    classMenuButton() {
      return this.isMenuShown ? 'icon-close' : 'icon-menu'
    },
    title() {
      return this.$route.meta.title
    },
    pageId() {
      return this.$route.path.replace(/\//g, '')
    }
  },
  methods: {
    toggleMenu() {
      this.isMenuShown = !this.isMenuShown
    }
  },
  watch: {
    $route() {
      this.isMenuShown = false
    }
  }
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';
@import '../../sass/utils.scss';
.m-title {
  position: fixed;
  padding-left: 50px;
  transform: translateY(-100%) rotate(90deg);
  transform-origin: left bottom;
  font-size: 90px;
  font-style: italic;
  font-weight: 800;
  letter-spacing: -0.02em;
  line-height: 0.65;
  white-space: nowrap;
  @include screen-sm {
    padding-left: 30px;
    font-size: 50px;
  }
}
.m-container {
  &__inner {
    max-width: 800px;
    min-height: 100vh;
    margin: auto;
    padding: 100px;
    background-color: rgba(#fff, 0.25);
    @include screen-sm {
      padding: 70px;
    }
    .slide-enter-active {
      transition: all 0.4s;
    }
    .slide-leave-active {
      transition: all 0.2s;
    }
    .slide-enter {
      transform: translateY(-30%);
      opacity: 0;
    }
    .slide-leave-to {
      transform: translateY(30%);
      opacity: 0;
    }
  }
}

.m-menuButton {
  position: fixed;
  top: 10px;
  right: 10px;
  width: 40px;
  line-height: 40px;
  font-size: 26px;
  text-align: center;
  cursor: pointer;
  z-index: 100;
  @include screen-lg {
    display: none;
  }
}

@include screen-sm {
  .m-menu:not(.shown) {
    display: none;
  }
}
</style>
