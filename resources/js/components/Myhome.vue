<template>
    <div class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal pr-[25%] pl-[25%] media768padding">

		<!-- 이미지 -->
		<section class="bg-white py-8">
			<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
				<nav id="store" class="w-full z-30 top-0 px-6 py-1">
					<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
						<a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">Myhome</a>

						<div class="flex items-center" id="store-nav-content">

							<a class="pl-3 inline-block no-underline hover:text-black" href="#">
								<svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									<path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
								</svg>
							</a>

							<a class="pl-3 inline-block no-underline hover:text-black" href="#">
								<svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									<path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
								</svg>
							</a>

						</div>
					</div>
				</nav>
				<div class="w-full md:w-1/3 xl:w-1/3 p-6 flex flex-col" v-for="(test, i) in myhome.Myhome" :key="i">
					<a :href="'http://127.0.0.1:8000/home/house/'+ myhome.Myhome[i].houseid">
						<img class="hover:grow hover:shadow-lg h-[29vh] w-[32vh] rounded-[27px]" :src=myhome.Myhome[i].img1>
						<div class="pt-3 flex items-center justify-between">
							<p class="">{{myhome.Myhome[i].location}}</p>
						</div>
						<p class="pt-1 text-gray-900">{{myhome.Myhome[i].price}}</p>
					</a>
					<div class="w-[6%] ml-auto float-right mt-[-48px]">	
							<button @click="heart(myhome.Myhome[i].id)"><img  src="../../img/hearton.png"></button>
							
						</div>
				</div>
			</div>
		</section>		
    </div>
    
</template>

  <script>
import Axios from 'axios';

export default {
		props: {
			mainid : {
				required: true
			}
		},
		data() {
			return {
				myhome : [],
				isShowing : true, 
			};
		},
		methods: {
			heart(i){
				if (!confirm("진짜 삭제하시겠습니까?")) {
				} else {
					alert("확인(예)을 누르셨습니다.");
					Axios
					.delete(`http://127.0.0.1:8000/api/Myhome/delete/${i}`)
					.then(res => { window.location.reload(); });
				}

			}

		},
		created() {
			Axios
				.get(
						'http://127.0.0.1:8000/api/Myhome',{
							params: {
								userid: this.mainid
							}
						}
					)
				.then(res => {
						this.myhome = res.data
					})
		}

	};
  
  </script>
  <style>
	@media screen and (max-width: 768px) {
		.media768padding {
			padding: 0px;
		}
	}
  </style>
