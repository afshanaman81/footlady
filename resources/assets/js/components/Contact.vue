<template>
    <div class="container">
        <div class="row">        
            <div class="col-md form-group">
            	<div class="card">
			<div class="card-body">
                        	<h5 class="card-title">CONTACT INFO</h5>
                        		<table class="table text-justify">
							<tr>
								<td width="10%"><i class="fa fa-phone"></i></td>
								<td width="15%">Call:</td>
								<td>(303) 776-1165</td></tr>
							<tr>
								<td><i class="fa fa-at"></i></td>
								<td>Email:</td>
								<td>footladyinCO@hotmail.com</td>
							</tr>
							<tr>
								<td><i class="fab fa-facebook-messenger"></i></td>
								<td>Messenger:</td>
								<td>m.me/Footladyinco</td>
							</tr>
							<tr>
								<td><i class="fab fa-internet-explorer"></i></td>
								<td>Web:</td>
								<td>http://footlady.net</td>
							</tr>  
						</table>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md form-group">             
                <div class="card">                   
                    <div class="card-body">
                        <h5 class="card-title">BUSINESS INFO</h5>
                        <table class="table text-justify">
                        	<tr>
                        		<td width="10%"><i class="fa fa-magic"></i></td>
					<td width="15%">Category:</td>
					<td class="card-text">Health/Beauty</td>
				</tr>
				<tr>
					<td width="10%"><i class="fa fa-flag"></i></td>
					<td width="15%">Founded in:</td>
					<td>1988</td></tr>
				<tr>
					<td><i class="fab fa-envira"></i></td>
					<td>Mission:</td>
					<td class="card-text">My passion is to assist clients in the elimination of foot pain and to educate them in self care and maintenance.</td>
				</tr>	
				<tr>
					<td><i class="fa fa-certificate"></i></td>
					<td>About:</td>
					<td class="card-text">Structural Foot Reflexologist, Specializing in foot pain, 
					Ear & Hand Reflexology, Foot Joint Mobilization</td>
				</tr>
				<tr>
					<td><i class="fa fa-trophy"></i></td>
					<td>Awards:</td>
					<td class="card-text">Nationally Board Certified, Past President, Vice-President and Activities Director of the Associated Reflexologists of Colorado, Inaugurated Reflexology at Longmont United Hospital 1995, Instructed Reflexology at the Naropa Institute, Boulder/Healing Spirits Massage School, Boulder/Colorado State University, Ft.Collins/City of Loveland/City of Ft. Collins/City of Longmont/Longmont United Hospital</td>
				</tr>
				<tr>
					<td><i class="fa fa-info"></i></td>
					<td>Products:</td>
					<td class="card-text">Pain Eraser Reflexology balls and rollers, Laser cut files for calluses, locally made lotions and soap</td>
				</tr>  
			</table>
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
	.card{
		min-height: 32vh;
	}
	.card-text{
        color: black;
        font-weight: bold;
    }
</style>
