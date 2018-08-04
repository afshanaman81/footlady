<template>
	<div id="background-image">
        <img :src="src">
    </div>
</template>

<script>
	export default{
		data(){
			return{	
				src: 'images/slideshow/1.JPG',
			}
		},
		mounted(){
			let random
			let images = []
			

			setInterval(() =>{
				random= Math.floor(Math.random() * 8)
                console.log(random)
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
            height: 99vh;
        }
    }


    /*********** Device = Tablets, Ipads (portrait)*/
    @media only screen and (min-width: 768px) {
        img{
        	height: 40vh;
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
        	height: 35vh;
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
        	height: 35vh;
        }
    }
    @media only screen and (min-width: 1900px)  and (orientation: landscape){
       
    }
</style>
