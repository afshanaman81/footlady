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
		height: 40vh;
	}
</style>