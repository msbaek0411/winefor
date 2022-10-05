<template>
<div class="w-[33%] media768width" style="margin-left: auto; margin-right: auto; ">

    <div  v-if="choice == 1">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >혼자 여행이십니까??</div>
            <div>
                <img src="../../img/이/1/1.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(12)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">네 혼자 갑니다.</button>
        </div>
        <div>
            <button @click="search(10)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">아뇨 동행이 있습니다.</button>
        </div>
	</div>

    <div v-else-if="choice == 2">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >기념일때문에 가시는 겁니까?</div>
            <div>
                <img src="../../img/이/1/2.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(1)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">네 기념일때문에 갑니다.</button>
        </div>
        <div>
            <button @click="search(2)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">아니요 휴가 차 갑니다.</button>
        </div>
	</div>

    <div v-else-if="choice == 10">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >연인이랑 갑니까?</div>
            <div>
                <img src="../../img/이/1/2.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(11)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">네 연인이랑 갑니다.</button>
        </div>
        <div>
            <button @click="search(12)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">아니요 친구랑 갑니다.</button>
        </div>
	</div>

    <div v-else-if="choice == 11">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >기념일때문에 갑니까?</div>
            <div>
                <img src="../../img/이/1/2.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(12)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">네 기념일 때문에 갑니다.</button>
        </div>
        <div>
            <button @click="search(12)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">아니요 휴가라 갑니다.</button>
        </div>
	</div>

    <div v-else-if="choice == 12">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >가까운 곳으로 갑니까?</div>
            <div>
                <img src="../../img/이/1/2.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(13)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">네 가까운곳으로 갑니다.</button>
        </div>
        <div>
            <button @click="search(13)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">아니요 바다보러 멀리 갑니다.</button>
        </div>
	</div>

    <div v-else-if="choice == 13">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >1박2일로 갑니까?</div>
            <div>
                <img src="../../img/이/1/2.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(14)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">네 1박2일로 갑니다.</button>
        </div>
        <div>
            <button @click="search(15)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">아니요 2박3일로 갑니다.</button>
        </div>
	</div>

    <div v-else-if="choice == 14">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >가격은 얼마정도 생각하고 계십니까?</div>
            <div>
                <img src="../../img/이/1/2.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(17)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">10 ~ 20 만원대</button>
        </div>
        <div>
            <button @click="search(18)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">20 ~ 30 만원대</button>
        </div>
	</div>

    <div v-else-if="choice == 15">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >가격은 얼마정도 생각하고 계십니까?</div>
            <div>
                <img src="../../img/이/1/2.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(18)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">20 ~ 30 만원대</button>
        </div>
        <div>
            <button @click="search(19)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">30 ~ 40 만원대</button>
        </div>
	</div>

    <div v-else-if="choice == 16">
        <div class="pb-[22%]">
            <div class="text-center pb-[8%] pt-[6%] text-[25px]" >가격은 얼마정도 생각하고 계십니까?</div>
            <div>
                <img src="../../img/이/1/2.jpg" alt="" class="w-[61%] rounded-[13%] ml-[20%]">
            </div>
            
        </div>
        <div>
            <button @click="search(17)" class="float-left w-[45%] mr-[10%] h-[118px] rounded-[27px]" style="border: solid darkgray;">20 ~ 30 만원대</button>
        </div>
        <div>
            <button @click="search(18)" class="w-[45%]  h-[118px] rounded-[27px]" style="border: solid darkgray;">30 ~ 40 만원대</button>
        </div>
	</div>

    <div v-else-if="choice == 17">
        <div>
            <section class="p-[14%] rounded-[37px] pt-[9%] pb-[5%]" style="border: solid 2px lightgray;">
                <div class="text-[24px] pb-[38px] text-center">
                    검색결과 입니다.
                </div>
                <div class="" style="margin-left: auto; margin-right: auto;">
                    <div>
                        <img :src=House.House[0].img1 alt="">
                    </div>
                    <div class="pt-[3%]">
                        <li>
                            <strong class="text-[3vh]">{{House.House[0].location}}</strong>
                            <div class="w-[3%] ml-auto float-right">
                            </div>
                            <div class="">
                                <img src="../../img/location.png" alt="위치" class="w-[3%] float-left">

                                <div @click="handlelocation_modal()" style="color: var(--bs-link-color); cursor:pointer;">123</div>
                            </div>
                        </li>
                        <li> 
                            <div>
                                <div class="pt-[7px]">
                                    <div class="w-[4%] float-left mr-[16px] mt-[7px] ml-[2px]">
                                        <img src="../../img/go.png" alt="" >
                                    </div>
                                    <div class="text-[17px] decoration-black" style="">
                                        <div>{{House.House[0].location}} 바로가기</div>
                                    </div>
                                </div>
                                <div class="w-[4%] mt-[-13px] p-[5px] float-right">
                                    <img src="../../img/next.svg" alt="" >
                                </div>
                                <div class="text-[12px] pl-[50px]" style="color: gray">
                                    ※실제 사이트로 이동합니다.
                                </div>
                                
                            </div>
                        </li>
                        <li> 
                            <div>
                                <div class="pt-[7px]">
                                    <div class="w-[4%] float-left mr-[16px] mt-[7px] ml-[2px]">
                                        <img src="../../img/reservation.png" alt="" >
                                    </div>
                                    <div class="text-[17px] decoration-black" style="">
                                        <div>{{House.House[0].location}} 예약하기</div>
                                    </div>
                                </div>
                                <div class="w-[4%] mt-[-13px] p-[5px] float-right">
                                    <img src="../../img/next.svg" alt="" >
                                </div>
                                <div class="text-[12px] pl-[50px]" style="color: gray">
                                    ※실제 사이트로 이동합니다.
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <div>최저가 가격 : {{House.House[0].price}}</div>
                            <div>최고가 가격 : {{House.House[0].price2}}</div>
                        </li>
                        
                        <a :href="'http://127.0.0.1:8000/home/house/'+ num"  class="ml-auto mr-auto block mt-[7%]" @click="pagelocation()">
                            자세히 보러 가기
                        </a>
                    </div>
                </div>

            </section>



	    </div>
	</div>
    <div v-else-if="choice == 18">
        <div>
            <section class="p-[14%] rounded-[37px] pt-[9%] pb-[5%]" style="border: solid 2px lightgray;">
                <div class="text-[24px] pb-[38px] text-center">
                    검색결과 입니다.
                </div>
                <div class="" style="margin-left: auto; margin-right: auto;">
                    <div>
                        <img :src=House.House[0].img1 alt="">
                    </div>
                    <div class="pt-[3%]">
                        <li>
                            <strong class="text-[3vh]">{{House.House[0].location}}</strong>
                            <div class="w-[3%] ml-auto float-right">
                            </div>
                            <div class="">
                                <img src="../../img/location.png" alt="위치" class="w-[3%] float-left">

                                <div @click="handlelocation_modal()" style="color: var(--bs-link-color); cursor:pointer;">123</div>
                            </div>
                        </li>
                        <li> 
                            <div>
                                <div class="pt-[7px]">
                                    <div class="w-[4%] float-left mr-[16px] mt-[7px] ml-[2px]">
                                        <img src="../../img/go.png" alt="" >
                                    </div>
                                    <div class="text-[17px] decoration-black" style="">
                                        <div>{{House.House[0].location}} 바로가기</div>
                                    </div>
                                </div>
                                <div class="w-[4%] mt-[-13px] p-[5px] float-right">
                                    <img src="../../img/next.svg" alt="" >
                                </div>
                                <div class="text-[12px] pl-[50px]" style="color: gray">
                                    ※실제 사이트로 이동합니다.
                                </div>
                                
                            </div>
                        </li>
                        <li> 
                            <div>
                                <div class="pt-[7px]">
                                    <div class="w-[4%] float-left mr-[16px] mt-[7px] ml-[2px]">
                                        <img src="../../img/reservation.png" alt="" >
                                    </div>
                                    <div class="text-[17px] decoration-black" style="">
                                        <div>{{House.House[0].location}} 예약하기</div>
                                    </div>
                                </div>
                                <div class="w-[4%] mt-[-13px] p-[5px] float-right">
                                    <img src="../../img/next.svg" alt="" >
                                </div>
                                <div class="text-[12px] pl-[50px]" style="color: gray">
                                    ※실제 사이트로 이동합니다.
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <div>최저가 가격 : {{House.House[0].price}}</div>
                            <div>최고가 가격 : {{House.House[0].price2}}</div>
                        </li>
                        
                        <a :href="'http://127.0.0.1:8000/home/house/'+ num"  class="ml-auto mr-auto block mt-[7%]" @click="pagelocation()">
                            자세히 보러 가기
                        </a>
                    </div>
                </div>

            </section>



	    </div>
	</div>
    <div v-else-if="choice == 19">
        <div>
            <section class="p-[14%] rounded-[37px] pt-[9%] pb-[5%]" style="border: solid 2px lightgray;">
                <div class="text-[24px] pb-[38px] text-center">
                    검색결과 입니다.
                </div>
                <div class="" style="margin-left: auto; margin-right: auto;">
                    <div>
                        <img :src=House.House[0].img1 alt="">
                    </div>
                    <div class="pt-[3%]">
                        <li>
                            <strong class="text-[3vh]">{{House.House[0].location}}</strong>
                            <div class="w-[3%] ml-auto float-right">
                            </div>
                            <div class="">
                                <img src="../../img/location.png" alt="위치" class="w-[3%] float-left">

                                <div @click="handlelocation_modal()" style="color: var(--bs-link-color); cursor:pointer;">123</div>
                            </div>
                        </li>
                        <li> 
                            <div>
                                <div class="pt-[7px]">
                                    <div class="w-[4%] float-left mr-[16px] mt-[7px] ml-[2px]">
                                        <img src="../../img/go.png" alt="" >
                                    </div>
                                    <div class="text-[17px] decoration-black" style="">
                                        <div>{{House.House[0].location}} 바로가기</div>
                                    </div>
                                </div>
                                <div class="w-[4%] mt-[-13px] p-[5px] float-right">
                                    <img src="../../img/next.svg" alt="" >
                                </div>
                                <div class="text-[12px] pl-[50px]" style="color: gray">
                                    ※실제 사이트로 이동합니다.
                                </div>
                                
                            </div>
                        </li>
                        <li> 
                            <div>
                                <div class="pt-[7px]">
                                    <div class="w-[4%] float-left mr-[16px] mt-[7px] ml-[2px]">
                                        <img src="../../img/reservation.png" alt="" >
                                    </div>
                                    <div class="text-[17px] decoration-black" style="">
                                        <div>{{House.House[0].location}} 예약하기</div>
                                    </div>
                                </div>
                                <div class="w-[4%] mt-[-13px] p-[5px] float-right">
                                    <img src="../../img/next.svg" alt="" >
                                </div>
                                <div class="text-[12px] pl-[50px]" style="color: gray">
                                    ※실제 사이트로 이동합니다.
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <div>최저가 가격 : {{House.House[0].price}}</div>
                            <div>최고가 가격 : {{House.House[0].price2}}</div>
                        </li>
                        
                        <a :href="'http://127.0.0.1:8000/home/house/'+ num"  class="ml-auto mr-auto block mt-[7%]" @click="pagelocation()">
                            자세히 보러 가기
                        </a>
                    </div>
                </div>

            </section>



	    </div>
	</div>
</div>
	

</template>

<script>
import Axios from 'axios';

export default {
		props : {

		},
		data() {
			return {
                choice : 1,
                House : [],
                num : 18,
			};
		},
		methods: {
            search(i) {
                this.choice = i
                if (i == 17) {
                    this.num = 13
                    Axios
				    .get(`http://127.0.0.1:8000/api/Houses/${this.num}`)
				    .then(res => {this.House = res.data})
                }
                else if ( i == 18) {
                    this.num = 15
                    Axios
				    .get(`http://127.0.0.1:8000/api/Houses/${this.num}`)
				    .then(res => {this.House = res.data})
                }
                else if ( i == 19) {
                    this.num = 16
                    Axios
				    .get(`http://127.0.0.1:8000/api/Houses/${this.num}`)
				    .then(res => {this.House = res.data})
                }
            }
	    },
        created() {

		}
}

</script>
  <style>

    @media screen and (max-width: 768px) {
		.media768width {
			width: 63%;
		}
	}
  </style>
