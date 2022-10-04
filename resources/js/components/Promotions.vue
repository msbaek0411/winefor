<template>
    <div class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal pr-[25%] pl-[25%]">

        <section class="bg-white py-8">
            <button class="float-left p-[2%] text-[19px]" @click="promotionsbtn(1)">전체 프로모션</button>
            <button class="float-left p-[2%] text-[19px]" @click="promotionsbtn(2)">진행중인 프로모션</button>
            <button class="float-left p-[2%] text-[19px]" @click="promotionsbtn(3)">중지된 프로모션</button>
			<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
				<nav id="store" class="w-full z-30 top-0 px-6 py-1">
					<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
						<a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">프로모션 살펴보기</a>

						<div class="flex items-center" id="store-nav-content">

							<a class="pl-3 inline-block no-underline hover:text-black" href="#">
								<svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									<path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
								</svg>
							</a>

							<a class="pl-3 inline-block no-underline hover:text-black" href="#" >
                                <img  src="../../img/plus.png" width="24" height="24" viewBox="0 0 24 24">
							</a>
                            
						</div>
					</div>
				</nav>
					
				<div class="w-full md:w-1/3 xl:w-1/3 p-6 flex flex-col" v-for="(test, i) in promotions.Promotion" :key="i" >
					<a>
						<img class="hover:grow hover:shadow-lg h-[29vh] w-[32vh] rounded-[27px]" :src=promotions.Promotion[i].img>
						<div class="pt-3 flex items-center justify-between">
							<p class="text-[22px]">타이틀 : {{promotions.Promotion[i].title}}</p>
						</div>
                        <div class="text-18px"> 내용 : {{promotions.Promotion[i].contents}}</div>
                        <div class="text-[11px]">이벤트 기간 : {{promotions.Promotion[i].startdate}} ~ {{promotions.Promotion[i].enddate}}</div>
						
						<p class="pt-1 text-gray-900"></p>
					</a>
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
                promotions : [],
                promotionnum : 1,
			};
		},
		methods: {
            promotionsbtn(i) {
                if(i == 1){
                    Axios 
                    .get('http://127.0.0.1:8000/api/promotions/all')
                    .then(res => { this.promotions = res.data })
                }
                else if(i == 2){
                    Axios 
                    .get('http://127.0.0.1:8000/api/promotions/ing')
                    .then(res => { this.promotions = res.data })
                }
                else if(i == 3){
                    Axios 
                    .get('http://127.0.0.1:8000/api/promotions/end')
                    .then(res => { this.promotions = res.data })
                }
            }

		},
		created() {
            Axios 
                .get('http://127.0.0.1:8000/api/promotions')
                .then(res => { this.promotions = res.data })
		}
	};
 </script>