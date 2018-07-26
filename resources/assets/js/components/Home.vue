<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="row taller">
                    <h5 class="card-title">Dear Visitors,</h5>
                    <p class="card-text">
                        I am serious about feet. I believe that feet are the body's foundation and that where there are healthy feet, a healthy body, mind, and spirit will follow.
                        </p>
                    <p class="card-text">
                        This site is dedicated to education. My goal is to get as many people as possible to understand the importance of how reflexology can help them and their loved ones in their daily lives. On this site, you will find a wealth of information about events, classes, workshops, and the science of self care. 

                    </p>
                    
                </div>

                <div hidden class="row">
                    <hr />
                </div>


                <div class="row">
                    <slide-show />
                </div>

                <div class="row quote form-group">
                    <p>
                    "To think on one's feet, when my feet hurt I cannot think."
                        <br/><span class="float-right">Abraham Lincoln</span>
                    </p>
                </div>

                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="panel panel-default">
                    <div class="card">
                        <img class="card-img-top" src="images/my-story-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                My Story
                            </h5>

                            <p class="text-center">Dedicated to helping people “HEEL”, 1 Step at a time.</p>
                            
                            <p class="card-text text-justify">Karen is a “Structural” Reflexologist, specializing in foot pain, with over 30 years of experience, and located in Colorado. She has been Nationally Board Certified, has been Certified through the International Institute of Reflexology in Fl., and was certified with the Laura Norman School of Reflexology, in N.Y.C.</p>
                            
                            <p class="card-text text-justify">
                            Karen’s training is extensive. Her Reflexology education includes courses with Masters from around the world. Her studies range from different Foot Reflexology Techniques to Hand and Ear Reflexology, Foot “Joint Mobilization and Loosening”, Foot Reading, Bio mechanics, Anatomy and Physiology, Gait analysis and Functional Evaluation of feet and legs, Meridian Therapy Reflexology, Reflexatsu, Color Therapy Reflexology, Reflexognosy, Proprioceptive Neuromuscular Facilitation, Indian Champissage, Herbal and Homeopathy studies, and Laser Therapy.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
    .taller{
        height: 30%;
        padding: 0 3vw;
        margin-bottom: 5vh;
    }
    .quote{
        margin: 10vh auto;
        color: red;
        font-size: 30px;
        font-style: italic;
    }
    .card-text{
        color: black;
        font-weight: bold;
    }

     /*********** iPhones and SmartPhones ******************/
    @media only screen and (max-width: 740px) {
        .taller{
            height: 55%;
        } 
        .quote{
            margin: 5vh auto;
            font-size: 20px;
        }
    }
    @media only screen and (max-width: 740px) and (orientation: landscape) {

    }


    /*********** Device = Tablets, Ipads (portrait)*/
    @media only screen and (min-width: 768px) {
        .taller{
            height: 40%;
        } 
        .quote{
            margin: 10vh auto;
            font-size: 24px;
        }
    }
    @media only screen and (min-width: 768px) and (orientation: landscape) {
        
    }

    /* Laptops (1280) */
    @media only screen and (min-width: 1280px) {
        .taller{
            height: 45%;
        } 
        .quote{
            margin: 13vh auto;
            font-size: 24px;
        }
    }
    @media only screen and (min-width: 1280px)  and (orientation: landscape){
        
    }

    /* other laptops */
    @media only screen and (min-width: 1440px) {
        .taller{
            height: 40%;
        } 
        .quote{
            margin: 12vh auto;
            font-size: 24px;
        }
    }
    @media only screen and (min-width: 1440px)  and (orientation: landscape){
        
    }

    /* desktops- wide screen */
    @media only screen and (min-width: 1900px) {
        
    }
    @media only screen and (min-width: 1900px)  and (orientation: landscape){
       
    }
</style>
