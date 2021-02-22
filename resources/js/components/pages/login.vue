<template>
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                      <h3>Login</h3>
                       
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-6 offset-3">
                              <form @submit.prevent="addLogin">
                                  <div class="form-group">
                                      <label for="">Phone No</label>
                                      <input type="text" v-model="login.phone_no" name="name" placeholder="Enter phone number" class="form-control" :class="{ 'is-invalid': login.errors.has('name') }">
                                      <has-error :form="login" field="name"></has-error>
                                  </div>
                                  <div class="form-group">
                                      <label for="">password</label>
                                      <input type="text" v-model="login.password" name="name" placeholder="Enter password" class="form-control" :class="{ 'is-invalid': login.errors.has('name') }">
                                      <has-error :form="login" field="name"></has-error>
                                  </div>
                                   <div class="form-group">
                                      <button type="submit" class="btn btn-success">Login</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>

export default {
    data(){
        return{
            login: new Form({
            name: '',
      }),

        }
    },

    methods:{
        addLogin(){
            
            this.login.post('http://127.0.0.1:8000/api/login/store')
        .then(({ data }) => { this.login.name='';

        this.$toast.success({
        title:'success',
        message:'Login Successfully!!'
         })

         })
        }
    }

}
</script>

<style>

</style>