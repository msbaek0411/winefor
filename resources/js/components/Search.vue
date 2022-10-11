<template>
    <div class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal pr-[25%] pl-[25%]">
        <div>
            <a class="navbar-brand">
                Winfor
            </a>
            <div method="Post">
                <input type="text" style="border: solid 1px darkgray;" class="w-[90%] h-[4vh] rounded-[8px] p-[2%]" placeholder="어디로 떠날 생각이신가요?" v-model="searchcontents"  v-on:keyup.enter="submitSearch" >
                <div class="float-right w-[3%]">
                    <button @click="submitSearch">
                        <img src="../../img/searchicon.png" alt="" style="border:solid 1px gray" class="m-[4px] p-[2px]">
                    </button>
                </div>
            </div>
        </div>
        <section class="bg-white py-8 w-full">
            <div>
                자주 검색하는 키워드
            </div>
            <button class="float-left p-[2%]" @click="Searchbtn(1)" :class="{ fontweight: isBind1 }">All</button>
            <button class="float-left p-[2%]" @click="Searchbtn(2)" :class="{ fontweight: isBind2 }">부산</button>
            <button class="float-left p-[2%]" @click="Searchbtn(3)" :class="{ fontweight: isBind3 }">제주도</button>
            <button class="float-left p-[2%]" @click="Searchbtn(4)" :class="{ fontweight: isBind4 }">강릉</button>
            <button class="float-left p-[2%]" @click="Searchbtn(5)" :class="{ fontweight: isBind5 }">포항</button>
			<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
                <section class="bg-white py-8 w-full">
                    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
                        <nav id="store" class="w-full z-30 top-0 px-6 py-1">

                        </nav>
                        <div class="w-[100vh]" v-if="House == 0">
                            <div>검색 결과</div>
                            <div class="w-full pt-[15%] pb-[14%] text-center">
                                최근 검색한 조건이 없습니다.
                            </div>
                           
                        </div>
                        <div class="w-[100vh]" v-else-if="House.House == 0">
                            <div>검색 결과</div>
                            <div class="w-full pt-[15%] pb-[14%] text-center">
                                최근 검색한 조건이 없습니다.
                            </div>
                           
                        </div>
                        <div class="w-full" v-else>
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

                    </div>
                </section>
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
				isBind1: false,
				isBind2: false,
				isBind3: false,
                isBind4: false,
                isBind5: false,
                House : [],
                searchcontents : [],
			};
		},
		methods: {
            Searchbtn(i){
                if (i == 1) {
                    this.isBind1 = true;
					this.isBind2 = false;
					this.isBind3 = false;
                    this.isBind4 = false;
                    this.isBind5 = false;
                    Axios
                        .get(`/api/House`)
                        .then(res => {
                                this.House = res.data
                            })
                }else if (i == 2){
                    this.isBind1 = false;
					this.isBind2 = true;
					this.isBind3 = false;
                    this.isBind4 = false;
                    this.isBind5 = false;
                    Axios
                        .get(`/api/House/0`)
                        .then(res => {
                                this.House = res.data
                            })
                }
                else if (i == 3){
                    this.isBind1 = false;
					this.isBind2 = false;
					this.isBind3 = true;
                    this.isBind4 = false;
                    this.isBind5 = false;
                    Axios
                        .get(`/api/House/1`)
                        .then(res => {
                                this.House = res.data
                            })
                }
                else if (i == 4){
                    this.isBind1 = false;
					this.isBind2 = false;
					this.isBind3 = false;
                    this.isBind4 = true;
                    this.isBind5 = false;
                    Axios
                        .get(`/api/House/2`)
                        .then(res => {
                                this.House = res.data
                            })
                }
                else if (i == 5){
                    this.isBind1 = false;
					this.isBind2 = false;
					this.isBind3 = false;
                    this.isBind4 = false;
                    this.isBind5 = true;
                    Axios
                        .get(`/api/House/3`)
                        .then(res => {
                                this.House = res.data
                            })
                }
            },
            submitSearch() {
                Axios
					.post(`/api/search/${this.searchcontents}`)
                    .then(res => {
                                this.House = res.data
                                if(this.House.House == 0){
                                    alert('데이터가 없습니다.');
                                }
                            })
					
                    this.isBind1 = false;
					this.isBind2 = false;
					this.isBind3 = false;
                    this.isBind4 = false;
                    this.isBind5 = false;
            }
           

		},
        created() {			

		}

	}

 </script>

<style>
	.fontweight {
		font-weight: bolder;
	}
	</style>