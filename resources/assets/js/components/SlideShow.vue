<template>
	<div id="background-image">
        <img :src="src">
    </div>
</template>

<script>
	export default{
		data(){
			return{	
				src: 'images/1.jpg',
			}
		},
		mounted(){
			let random
			let images = []
			images.push('images/1.jpg')
			images.push('images/2.jpg')
			images.push('images/teaching.jpg')
			images.push('images/hands.jpg')
			images.push('images/spa-party.jpg')
			images.push('images/2.jpg')

			setInterval(() =>{
				random= Math.floor(Math.random() * 6);
				this.src = images[random]
			}, 3000)
		}
	}
</script>

<style scoped>

	#background-image{
		/* BOX MODEL */
		z-index: 0;

		/* ENHANCEMENT */
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat; 
	}
	img{
		width: 100%;
		height: 30vh;
	}

	 /*********** iPhones and SmartPhones ******************/
    @media only screen and (max-width: 740px) {
        img{
        	height: 30vh;
        }
    }
    @media only screen and (max-width: 740px) and (orientation: landscape) {
        img{
            height: 90vh;
        }
    }


    /*********** Device = Tablets, Ipads (portrait)*/
    @media only screen and (min-width: 768px) {
        img{
        	height: 35vh;
        }
    }
    @media only screen and (min-width: 768px) and (orientation: landscape) {
        img{
        	height: 70vh;
        }
    }

    /* Laptops (1280) */
    @media only screen and (min-width: 1280px) {
        img{
        	height: 30vh;
        }
    }
    @media only screen and (min-width: 1280px)  and (orientation: landscape){
        
    }

    /* other laptops */
    @media only screen and (min-width: 1440px) {
		img{
        	height: 35vh;
        }
    }
    @media only screen and (min-width: 1440px)  and (orientation: landscape){
        
    }

    /* desktops- wide screen */
    @media only screen and (min-width: 1900px) {
        img{
        	height: 30vh;
        }
    }
    @media only screen and (min-width: 1900px)  and (orientation: landscape){
       
    }
</style>