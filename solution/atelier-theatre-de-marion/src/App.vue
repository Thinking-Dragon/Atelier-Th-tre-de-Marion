<template>
  <div id="app">
    <img src="@/assets/brand/logo-brown.svg" alt="Logo de Atelier-Théâtre de Marion" >
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/kids-workshops">Ateliers artistiques pour enfants</router-link> |
      <router-link to="/masterclasses">Cours de formation pour adultes</router-link> |
      <router-link to="/shop">Boutique</router-link> |
      <router-link to="/mission">Mission</router-link> |
      <router-link to="/contact-us">Contactez-nous!</router-link>
    </div>
    <router-view/>
  </div>
</template>

<style lang="less">
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
