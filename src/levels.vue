<style>

</style>

<template>
  <div v-if="object.acf" class="levels-wrapper">
    <div v-if="object.acf.levels" v-for="level in object.acf.levels" class="levels-inner-wrapper">
      <component :is="level.acf_fc_layout" :level="level" :object="object"></component>
    </div>
  </div>
</template>

<script>
  export default {

    props: ['object'],

    data() {
      return {
        assets_path: window.config.assets_path,
        base_path: window.config.base_path,
        site_name: window.config.site_name,
        lang: window.lang,
      };
    },
  };
</script>
