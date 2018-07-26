<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-xl-6 form-group">
                <div class="panel panel-default">
                    <div class="card">
                        <img class="card-img-top" src="images/corporate.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">On-site Employee Wellness</h5>
                            <p>Duration: 30 mins, Price varies</p>
                            <p class="card-text">
                            Human Resources/Wellness Programs for Employees and Contractors. I present to Corporate Campus, for Regular Foot Reflexology sessions, for Stress Management, Hand, Wrist, Neck, Back, Head Pain/tension
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-xl-6 form-group">
                <div class="panel panel-default">
                    <div class="card">                     
                        <div class="card-body">
                            <h5 class="card-title">Teaching, Lecturing, Seminars</h5>
                            <p>Duration: 30 mins, Price varies</p>
                            <p class="card-text text-justify">
                            Classes, Conferences and Seminars for Private, Corporations, Hospitals, Nursing Care Facilities, Senior Centers, City or University events- Self help, Foot care, Women's Health, Children's Health
                            </p>                            
                        </div>
                        <img class="card-img-top" src="images/teaching.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-xl-6 form-group">
                <div class="panel panel-default">
                    <div class="card">
                        <img class="card-img-top" src="images/children.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Children's Health</h5>
                            <p>Price varies</p>
                            <p class="card-text">
                            From infants to Teens,Children love/need Reflexology.It's is used for dancers/ soccer feet, asthma, ear infections, bed wetting, digestive issues, growth pains, sleep problems, learning disabilities.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-xl-6 form-group">
                <div class="panel panel-default">
                    <div class="card">                     
                        <div class="card-body">
                            <h5 class="card-title">Home/Business Spa Parties</h5>
                            <p>Duration: 30 mins, Price: $30 per person</p>
                            <p class="card-text text-justify">
                            Holiday, Spa, Option to Sun/Mon Football games, Birthdays, Valentine's, Clubs FOR-Gals, Guys, Couples,Teens, New Mommies, Fund Raisers- My office, your home or Business. 20-30min sessions on feet/legs
                            </p>                           
                        </div>
                        <img class="card-img-top" src="images/spa-party.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-xl-6 form-group">
                <div class="panel panel-default">
                    <div class="card">
                        <img class="card-img-top" src="images/hands.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hand Reflexology</h5>
                            <p>Duration: 30 mins, Price: $35</p>
                            <p class="card-text">
                            Do you suffer from Pain, lack of Mobility and Range of Motion or Stiffness in your Hands or Wrists? Have you been diagnosed with Arthritis,Carpal Tunnel Rheumatoid Arthritis, trigger finger?
                            </p>                           
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-xl-6 form-group">
                <div class="panel panel-default">
                    <div class="card">                     
                        <div class="card-body">
                            <h5 class="card-title">Labor Inducing Sessions</h5>
                            <p>Duration: 1 Hour and 30 mins, Price: $105</p>
                            <p class="card-text text-justify">                          
							Reflexology has been used, for the stimulation of reproductive organs to begin labor, in full term or over due pregnancies.This is a safe natural option for low risk, healthy Mommies. Pure relaxation!
                            </p>
                            
                        </div>
                        <img class="card-img-top" src="images/labor.jpg" alt="Card image cap">
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
	h5{
		font-weight: bold;
		color: #00837d;
	}
	.card{
		height: 65vh;
	}

    /*********** iPhones and SmartPhones ******************/
    @media only screen and (max-width: 740px) {
        .card{
            height: auto;
        }
    }
    @media only screen and (max-width: 740px) and (orientation: landscape) {

    }


    /*********** Device = Tablets, Ipads (portrait)*/
    @media only screen and (min-width: 768px) {
        .card{
            height: auto;
        }
    }
    @media only screen and (min-width: 768px) and (orientation: landscape) {
        
    }

    /* Laptops (1280) */
    @media only screen and (min-width: 1280px) {
        .card{
            height: auto;
        }
    }
    @media only screen and (min-width: 1280px)  and (orientation: landscape){
        .card{
            height: 70vh;
        }
    }

    /* other laptops */
    @media only screen and (min-width: 1440px) {
        .card{
            height: auto;
        }
    }
    @media only screen and (min-width: 1440px)  and (orientation: landscape){
        .card{
            height: 60vh;
        }
    }

    /* desktops- wide screen */
    @media only screen and (min-width: 1900px) {
        .card{
            height: 50vh;
        }
    }
    @media only screen and (min-width: 1900px)  and (orientation: landscape){
       
    }
</style>
