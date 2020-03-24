<template>
  <div>
    <form method="post" id="leave_comment">
      {{ csrf_field() }}
      <input type="text" hidden="hidden" v-model="course_id" name="course" id="course" value="{{$course->course_link}}" />
   <div class="form-group">
      <textarea class="form-control" id="question_add" v-model="question_add" name="question_add" placeHolder="Leave a comment" rows="3" cols="13"></textarea>

   </div>

   <div class="form-group">
     <button type="button" id="submit_question" class="btn btn-primary btn-left" style="float: right;">Submit</button>
   </div>
 </form>
  </div>
</template>

<script>
    export default {
      data() {
        course_id: null,
        question_add: null,
        errors: []
      }, methods: function(){
        validation: function(course_id,question_add){
          if(!course_id){
            this.errors.push("course id cannot be empty");
          }else if(!question_add){
            this.errors.push("Question cannot be empty");
          }
        }, submit(){
          this.validation(this.course_id, this.question_add);

            axios.post(`/add/comments/question`, {
              body: this.course_id, this.question_add
            })
            .then(response => {})
            .catch(e => {
              this.errors.push(e);
            })
        }
      }
    }
