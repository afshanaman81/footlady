<template>
    <div class="container">
        <div class="row" v-for="t in data">
            <div class="col-md form-group">             
                <div class="card">                   
                    <div class="card-body">
                        <p>{{t.content}}</p>
                        <p class="float-right">
                            <i>{{t.poster}}<span v-if="t.profession">, {{t.profession}}</span></i>
                        </p>
                    </div>
                </div>                          
            </div>
        </div>
    </div>
</template>

<script>
    const testimonials = require("../../data/testimonials.json")
    export default {
        data(){
            return {
                data: []
            }
        },
        mounted() {
            console.log('Component mounted.')
            console.log(testimonials)
            this.data = testimonials
        }
    }
</script>
