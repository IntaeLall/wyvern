<style>

</style>

<template>
  <div v-if="object.acf">
    <div v-if="object.acf.levels" v-for="level in object.acf.levels">
      <component :is="level.acf_fc_layout" :level="level"></component>
    </div>
  </div>
</template>

<script>
  export default {

    props: ['object'],

    data() {
      return {
        assets_path: wp.assets_path,
        base_path: wp.base_path,
        site_name: wp.site_name,
        lang: wp.lang,
      }
    }
  }
</script>