<template>
  <div>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Blog Mind</a>
    </nav>
    <div class="container">
      <div class="card">
        <div class="card-header"><h2>Latest Posts</h2></div>
        <div class="card-body">
          <app-post v-for="p in posts" :post="p" :key="p.id"></app-post>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AppPost from "./components/Post.vue";

export default {
  name: "app",
  components: {
    AppPost
  },
  data() {
    return {
      posts: []
    };
  },
  methods: {
    read() {
      const posts = [
        { id: "1", title: "Teste", text: "Testatando" },
        { id: "2", title: "Teste", text: "Testatando" },
        { id: "3", title: "Teste", text: "Testatando" }
      ];

      posts.forEach(post => {
        this.posts.push(post);
      });
    }
  },
  mounted() {
    this.read();
  }
};
</script>

<style>
nav {
  margin-bottom: 20px;
}
</style>
