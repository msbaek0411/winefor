<template>

	<div class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal pr-[25%] pl-[25%]">
		<section>
			<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
				<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col " >

					<div><img src="../../img/hotel.png" alt="hotel" style="border-bottom: solid darkgray" class="p-[10%] w-[40%] mr-auto ml-auto"></div>
					<ul v-for="(test,i) in location.location" :key="i">
						<div>
							<li class="text-center p-[4%]">
								<button class="pl-[15%] pr-[15%]" style="border: solid 1px gray; border-radius: 10px;" @click="Hotelbtn(i)">{{location.location[i].name}}</button>
							</li>
						</div>
					</ul>
				</div>
				<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col " >
					<div><img src="../../img/plane.png" alt="plane" style="border-bottom: solid darkgray" class="p-[10%] w-[40%] mr-auto ml-auto"></div>
					<ul v-for="(test,i) in location.location" :key="i">
						<li class="text-center p-[4%]">
							<button class="pl-[15%] pr-[15%]" style="border: solid 1px gray; border-radius: 10px;">{{location.location[i].name}}</button>
						</li>
					</ul>
				</div>
				<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col " >
					<div><img src="../../img/insta.png" alt="insta" style="border-bottom: solid darkgray" class="p-[10%] w-[40%] mr-auto ml-auto"></div>
					<ul v-for="(test,i) in location.location" :key="i">
						<li class="text-center p-[4%]">
							<button class="pl-[15%] pr-[15%]" style="border: solid 1px gray; border-radius: 10px;">{{location.location[i].name}}</button>
						</li>
					</ul>
				</div>
				<div class="w-full md:w-1/4 xl:w-1/4 p-6 flex flex-col " >
					<div><img src="../../img/price.png" alt="price" style="border-bottom: solid darkgray" class="p-[10%] w-[40%] mr-auto ml-auto"></div>
					<ul>
						<li class="text-center p-[4%]">
							<button class="pl-[15%] pr-[15%]" style="border: solid 1px gray; border-radius: 10px; " @click="Pricebtn(1)">20 ~ 30 만원</button>
						</li>
						<li class="text-center p-[4%]">
							<button class="pl-[15%] pr-[15%]" style="border: solid 1px gray; border-radius: 10px;" @click="Pricebtn(2)" >30 ~ 40 만원</button>
						</li>
						<li class="text-center p-[4%]">
							<button class="pl-[15%] pr-[15%]" style="border: solid 1px gray; border-radius: 10px;" @click="Pricebtn(3)">40 ~ 50 만원</button>
						</li>
						<li class="text-center p-[4%]">
							<button class="pl-[15%] pr-[15%]" style="border: solid 1px gray; border-radius: 10px;" @click="Pricebtn(4)">50 ~ 만원</button>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- 이미지 -->
		<section class="bg-white py-8">
			<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
				<nav id="store" class="w-full z-30 top-0 px-6 py-1">
					<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
						<a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">SHOW</a>

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
					
				<div class="w-full md:w-1/3 xl:w-1/3 p-6 flex flex-col" v-for="(test, i) in House.House" :key="i" v-show="is_show">
					<a :href="'http://127.0.0.1:8000/home/house/'+ House.House[i].id">
						<img class="hover:grow hover:shadow-lg h-[29vh] w-[32vh] rounded-[27px]" :src=House.House[i].img1>
						<div class="pt-3 flex items-center justify-between">
							<p class="">{{House.House[i].location}}</p>
						</div>
						
						<p class="pt-1 text-gray-900">{{House.House[i].price}}</p>
					</a>
				</div>
				
				<div class="w-full md:w-1/3 xl:w-1/3 p-6 flex flex-col" v-for="(test, i) in price.price" :key="i" v-show="is_showprice">
					<a :href="'http://127.0.0.1:8000/home/house/'+ price.price[i].id">
						<img class="hover:grow hover:shadow-lg h-[29vh] w-[32vh] rounded-[27px]" :src=price.price[i].img1>
						<div class="pt-3 flex items-center justify-between">
							<p class="">{{price.price[i].location}}</p>
							
						</div>
					</a>
					<button v-if="isShowing" class="w-[8%] ml-auto mt-[-24px]" @click="heart()"><img  src="../../img/heart.png"></button>
					<button v-else @click="heart()" class="w-[8%] ml-auto mt-[-24px]"><img  src="../../img/hearton.png" ></button>
						<p class="pt-1 text-gray-900">{{price.price[i].price}}</p>
				</div> 
			</div>
		</section>
	</div>
	  
  </template>
  
  <script>
import Axios from 'axios';

	export default {
		data() {
			return {
				is_show : false,
				is_showprice : false,
				House : [],
				price : [],
				location : [],
				verification: [],
				loginid : 1,
				locationNum : 1,
				priceNum : 1,
				isShowing : true,
				minseok : 30,
				
			};
		},
		methods: {
			Hotelbtn(i) {
				this.locationNum = i
				this.is_show = !this.is_show;
				Axios
				.get(`http://127.0.0.1:8000/api/House/${this.locationNum}`)
				.then(res => {
						this.House = res.data
					})
					
			},
			Pricebtn(i) {
				this.priceNum = i
				this.is_showprice = !this.is_showprice;
				Axios
				.get(`http://127.0.0.1:8000/api/price/${this.priceNum}`)
				.then(res => {
						this.price = res.data
					})
			},
			heart() {
				this.isShowing = !this.isShowing
			}

		},
		created() {
			Axios
				.get(
						'http://127.0.0.1:8000/api/location'
					)
				.then(res => {
						this.location = res.data
					})
					
			Axios
				.get(`http://127.0.0.1:8000/api/verification/${this.minseok}`)
				.then(res => {this.verification = res.data})
		}
	};
  
  </script>
  <style>
  </style>
  