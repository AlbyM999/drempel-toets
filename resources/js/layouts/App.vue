<template>
  <div>
    <nav>
        <router-link to="/">
            home
        </router-link>
        <router-link to="/about">
            about
        </router-link>
        <router-link to="/login">
                login
            </router-link>
    </nav>
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {

};
</script>
