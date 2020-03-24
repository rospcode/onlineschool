<template>
<form action="" method="post">
    <div class="row">
        <div class="col-lg-9" >

          <div class="page-section">
            <h4></h4>
            <div class="list-group list-group-form">


                <div class="list-group-item">
                    <div class="form-group row mb-0">
                        <label class="col-form-label col-sm-3">Cell Number</label>
                        <div class="col-sm-9">
                            <input type="text"  name="phone" class="form-control" value="" placeholder="Your profile name ...">
                            <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="form-group row mb-0">
                        <label class="col-form-label col-sm-3">ID Number</label>
                        <div class="col-sm-9">
                            <input type="text"   class="form-control" readonly="readonly" value="" placeholder="Your profile name ...">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="form-group row mb-0">
                        <label class="col-form-label col-sm-3">Your Gender</label>
                        <div class="col-sm-9">
                            <input type="text"  readonly="readonly" class="form-control" value="" placeholder="Your profile name ...">
                            <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="form-group row mb-0">
                        <label class="col-form-label col-sm-3">Your Bio</label>
                        <div class="col-sm-9">

                            <textarea rows="3"  name="bio" class="form-control" placeholder="About you ..."></textarea>

                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="form-group row mb-0">
                        <label class="col-form-label col-sm-3">Your DOB</label>
                        <div class="col-sm-9">
                            <input type="text"  readonly="readonly" class="form-control" value="" placeholder="Your profile name ...">
                            <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="form-group row mb-0">
                        <label class="col-form-label col-sm-3">Your Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" value="" placeholder="Your profile name ...">
                            <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                        </div>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">ID Number cannot be changed</label>
                        <small class="form-text text-muted">Your current ID Number cannot be changed.</small>
                    </div>
                </div>
                <div class="list-group-item">

        </div>




  </div>

            </div>
        </div>

        </div>

        <div class="col-lg-3 page-nav">
            <div class="page-section pt-lg-112pt">
                <nav class="nav page-nav__menu">
                    <a class="nav-link active" href="">Basic Information</a>
                    <a class="nav-link" href="/u/profile">Profile</a>

                    <a class="nav-link" href="/u/password/change">Change Password</a>
                </nav>
                <div class="page-nav__content">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>

    </div>
</form>
</template>

<script>
export default {

      mounted() {
          console.log('Component mounted.')
      },

      data() {
          return {
            orderby: '',
          };
      },
      methods: {
        submit(){
          this.validation(this.orderby);

            axios.post(`/a/order/post`, {
              body: this.orderby
            })
            .then(response => {})
            .catch(e => {
              this.errors.push(e);
            })
        }
      }

  }
</script>
