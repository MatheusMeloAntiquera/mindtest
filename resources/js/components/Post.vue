<template>
  <div class="post">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img
            src="https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=1"
            class="card-img"
            alt
          >
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">
              Card title
              <span class="buttons-right">
                <a :href="edit()" role="button" class="btn btn-warning"><i class="fa fa-pencil-square-o fa-lg"></i>Edit</a>
                <a href="#" role="button" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
              </span>
            </h5>
            <p
              class="card-text"
            >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">
              <small class="text-muted">Last updated 3 mins ago</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    post: Object
  },
  methods: {
      edit(){
          return '/post/edit/' + this.post.id
      }
  },
};
</script>

<style>
.post {
  margin: 20px;
  -webkit-box-shadow: 10px 10px 5px 0px rgba(214, 214, 214, 1);
  -moz-box-shadow: 10px 10px 5px 0px rgba(214, 214, 214, 1);
  box-shadow: 10px 10px 5px 0px rgba(214, 214, 214, 1);
}

.card.mb-3 {
  padding: 10px;
}

.buttons-right {
  position: absolute;
  top: 8px;
  right: 16px;
}
</style>
