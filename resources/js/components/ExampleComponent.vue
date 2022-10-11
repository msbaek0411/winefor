<template >

	<div class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal pr-[25%] pl-[25%] media768padding w-[58%] ml-auto mr-auto media768width2" style="padding:0%;">
		<div>
			총 조회수<img src="https://www.cutercounter.com/hits.php?id=hmxffado&nd=6&style=3" border="0" alt="hit counter">
		</div>

				<!-- 카테고리 -->
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
				<div class="w-full md:w-1/4 xl:w-1/4 p-6 flex flex-col media768none " >
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

					</div>
				</nav>
				<div class="w-full">
					<div class=" md:w-1/3 xl:w-1/3 p-6 flex flex-col float-left media768padding2" v-for="(test, i) in House.House" :key="i">
						<a :href="'/home/house/'+ House.House[i].id">
							<img class="hover:grow hover:shadow-lg h-[29vh] w-[32vh] rounded-[27px]" :src=House.House[i].img1>
							<div class="pt-3 flex items-center justify-between">
								<p class="">{{House.House[i].location}}</p>
							</div>
							
							<p class="pt-1 text-gray-900">{{House.House[i].price}}</p>
						</a>
					</div>
				</div>

				<div class="w-full">
					<div class=" md:w-1/3 xl:w-1/3 p-6 flex flex-col float-left media768padding2" v-for="(test, i) in price.price" :key="i">
						<a :href="'/home/house/'+ price.price[i].id">
							<img class="hover:grow hover:shadow-lg h-[29vh] w-[32vh] rounded-[27px]" :src=price.price[i].img1>
							<div class="pt-3 flex items-center justify-between">
								<p class="">{{price.price[i].location}}</p>
							</div>
							
							<p class="pt-1 text-gray-900">{{price.price[i].price}}</p>
						</a>
					</div>
				</div>
			</div>
		</section>
		


		<!-- 프로모션 -->
		<section class="bg-white py-8">
			<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
				<nav id="store" class="w-full z-30 top-0 px-6 py-1">
					<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
						<a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">프로모션 살펴보기</a>
					</div>
				</nav>
					
				<div class="w-full md:w-1/3 xl:w-1/3 p-6 flex flex-col" v-for="(test, i) in promotions.Promotion" :key="i" >
					<a>
						<img class="hover:grow hover:shadow-lg h-[54vh] w-[32vh] rounded-[27px]" :src=promotions.Promotion[i].img>
						<div class="pt-3 flex items-center justify-between">
							<p class="text-[22px] truncate">타이틀 : {{promotions.Promotion[i].title}}</p>
						</div>
                        <div class="text-[11px] truncate">이벤트 기간 : {{promotions.Promotion[i].startdate}} ~ {{promotions.Promotion[i].enddate}}</div>
						
						<p class="pt-1 text-gray-900"></p>
					</a>
				</div>
			</div>
		</section>
		<!-- modal -->

		<div v-show="is_show" class="fixed top-[35%] left-[19%] w-[18%] h-[37%] z-[99]" style="border:solid 1px; background: white;">
                <div class="w-full h-full">
                    <div class="text-[14px] font-bold">
                       해당 페이지는 php, laravel 등 관련 스터디 페이지 입니다.<br>
					   실제 숙소 가격과 다를 수 있다는 점 양해 부탁드립니다.
                    </div>
					<div>
						<img src="../../img/modal.png" alt="">
					</div>
					<div class="pt-[1%] pl-[83%]">
						<button @click="handle_toggle" type="button">확인</button>
					</div>
				</div>
    	</div>

		<div v-show="is_show2" class="fixed top-[11%] left-[63%] w-[25%] h-[37%] z-[99]" style="border:solid 1px; background: white;">
                <div class="w-full h-full">
                    <div class="text-[14px] font-bold">
                       해당 페이지는 php, laravel 등 관련 스터디 페이지 입니다.<br>
					   수정사항이나 문의사항 있으시면 연락 아래 메일로 연락 주세요.<br><br>
					   <div>
						alstjrqor@naver.com
					   </div>
                    </div>
					<div class="h-[57%]">
						<img src="../../img/modal2.png" alt="">
					</div>
					<div class=" pl-[83%]">
						<button @click="handle_toggle2" type="button">확인</button>
					</div>
				</div>
    	</div>

		


	</div>
	  
  </template>
  
  <script>
import Axios from 'axios';

	export default {
		props : {
			mainid  : {
				required: true
			}
		},
		data() {
			return {
				is_show : true,
				is_show2 : true,
				House : [],
				price : [],
				location : [],
				verification: [],
				promotions : [],
				loginid : 1,
				locationNum : 1,
				priceNum : 1,
				isShowing : true,
				minseok : 30,
				is_showNew: true,
			};
		},
		methods: {
			Hotelbtn(i) {
				this.locationNum = i
				this.price = [];
				Axios
				.get(`/api/House/${this.locationNum}`)
				.then(res => {
						this.House = res.data
					})

			},
			Pricebtn(i) {
				this.priceNum = i
				this.is_showprice = !this.is_showprice;
				this.House = [];
				Axios
				.get(`/api/price/${this.priceNum}`)
				.then(res => {
						this.price = res.data
					})

			},
			heart() {
				this.isShowing = !this.isShowing
			},
			handle_toggle() {
				this.is_show = !this.is_show
			},
			handle_toggle2() {
				this.is_show2 = !this.is_show2
			},
		},
		created() {
			Axios
				.get(
						'/api/location'
					)
				.then(res => {
						this.location = res.data
					})
					
			Axios
				.get(`/api/verification/${this.minseok}`)
				.then(res => {this.verification = res.data})
			
			Axios
				.get(`/api/House/1`)
				.then(res => {
						this.House = res.data
					})
			Axios 
                .get('/api/promotions')
                .then(res => { this.promotions = res.data })
		}
	};
  
  </script>
  <style>

	.backgroundC {
		background-color: darkgray;
    	color: whitesmoke;
	}


	@media screen and (max-width: 768px) {
		.media768padding {
			padding: 0px;
		}
		.media768padding2 {
			padding: 2%;
		}
		.media768width2{
			width: 100%
		}
		.media768none{
			display: none;
		}
	}
  </style>
  