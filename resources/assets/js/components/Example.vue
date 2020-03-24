<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <form @submit="formSubmit">
                   <input type="text" v-model="name" />
                   <button class="btn btn-success">Form</button>
                </form>
                {{ message }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

      mounted() {

          console.log('Component mounted.')

      },

      data() {

          return {

            name: '',
            message: '',


          };

      },

      methods: {

          formSubmit(e) {

              e.preventDefault();

              let currentObj = this;
              this.message = this.name;

            

          }

      }

  }
</script>
