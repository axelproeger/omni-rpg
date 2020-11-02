<template>
  <div class="card shadow mb-4">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item" v-for="tab in tabs" v-bind:key="tab.id">
          <a
            class="nav-link"
            :class="{ 'active': tab.isActive }"
            :href="tab.href"
            @click="selectTab(tab)"
          >{{ tab.name }}</a>
        </li>
      </ul>
    </div>

    <div class="card-body">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return { tabs: [] };
  },

  created() {
    this.tabs = this.$children;
  },
  methods: {
    selectTab(selectedTab) {
      this.tabs.forEach(tab => {
        tab.isActive = tab.name == selectedTab.name;
      });
    }
  }
};
</script>
