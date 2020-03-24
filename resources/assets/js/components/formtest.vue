<template>
    <div class="container">
        <div class="row">
        <form>
           <input type="text" v-model="name" />
        </form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
