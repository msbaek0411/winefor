<template>
	<div>
		<section class="bg-white py-8">
			<div class="w-full md:w-1/2 xl:w-1/4 p-6 flex flex-col ">
				<img :src=idlogin.img1 alt="">
				<img :src=idlogin.img2 alt="">
				<img :src=idlogin.img3 alt="">
				<div>
					<div>{{idlogin.location}}</div>
					<a :href=idlogin.resite>예약</a>
					<a :href=idlogin.site>홈페이지 이동</a>
					<div>주소 : {{idlogin.location2}}</div>
					<li>최저가 가격 : {{idlogin.price}}</li>
					<li>최고가 가격 : {{idlogin.price2}}</li>
				</div>
			</div>
			
		</section>
	</div>
</template>

  <script>

	export default {
		props : {
			idlogin : {
				required: true
			}
		},
		data() {
			return {
			};
		},
		methods: {
		},
		created() {
		}
	};
  
  </script>
  <style>
  </style>
  