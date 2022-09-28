<template>
	<div>
		<section v-if="showmain == 1">
			<div class="w-[33%]" style="margin-left: auto; margin-right: auto;">
				<div id="carouselExampleIndicators" class="carousel slide">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner h-[46vh]">
						<div class="carousel-item active">
						<img :src=idlogin.img1 class="d-block w-100" alt="slide1">
						</div>
						<div class="carousel-item">
						<img :src=idlogin.img2 class="d-block w-100" alt="slide2">
						</div>
						<div class="carousel-item">
						<img :src=idlogin.img3 class="d-block w-100" alt="slide3">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</section>
		<section>
			<div class="w-[33%]" style="margin-left: auto; margin-right: auto;">
				<div class="pt-[3%]">
					<li>
						<strong class="text-[3vh]">{{idlogin.location}}</strong>
						<div class="w-[3%] ml-auto float-right">	
							<button v-if="isShowing"  @click="heart()"><img  src="../../img/heart.png"></button>
							<button v-else @click="heart()"><img  src="../../img/hearton.png" ></button>
							<button><img src="../../img/share.png" alt="공유"></button>
						</div>
						<div class="">
							<img src="../../img/location.png" alt="위치" class="w-[3%] float-left">

							<div @click="handlelocation_modal()" style="color: var(--bs-link-color); cursor:pointer;">{{idlogin.location2}}</div>
						</div>
					</li>
					<li> 
						<div>
							<div class="pt-[7px]">
								<div class="w-[4%] float-left mr-[16px] mt-[7px] ml-[2px]">
									<img src="../../img/go.png" alt="" >
								</div>
								<div class="text-[17px] decoration-black" style="">
									<div>{{idlogin.location}} 바로가기</div>
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
									<div>{{idlogin.location}} 예약하기</div>
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
						<div>최저가 가격 : {{idlogin.price}}</div>
						<div>최고가 가격 : {{idlogin.price2}}</div>
					</li>
					<li>
						<div class="pt-[7px]">
							<div class="pb-[7px]">취소 및 환불 규정</div>
							<div class="ml-[41px]">
								<div>- 체크인 5일 전 : 무료 취소</div>
								<div>- 체크인 4일 전 : 취소 수수료 20%</div>
								<div>- 체크인 3일 전 : 취소 수수료 30%</div>
								<div>- 체크인 2일 전 : 취소 수수료 50%</div>
								<div>- 체크인 1일 전 ~ 당일 : 취소 환불 불가</div>
								<div>- 취소요청 이후에는 취소의 철회가 불가능합니다.</div>
								<div>- 구매당일 취소시에도 환불 규정에 따라 취소 수수료가 부과됩니다.</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ml-auto mr-auto w-[17%]">
							<button>예약하기</button>
							<button>취소</button>
						</div>
						
					</li>
				</div>
				<div>
					<iframe src="http://127.0.0.1:8000/kakao" class="w-[54vh] h-[44vh]"></iframe>
				</div>
			</div>
		</section>
		
<!-- homepage modal -->
		<div v-show="is_show" class="modalcss">
                <div class="w-full h-[97%]">
					<div class="w-[80vw] h-[72vh]">
						<iframe :src=idlogin.site width="100%" height="100%"></iframe>
					</div>
				</div>
				<button class="ml-auto mr-auto w-full" @click="handle_modal()">취소</button>
        </div>
		

<!-- location modal  -->
		<div v-show="is_showlocation" class="modalcss">
			<div id="map" style="width:500px;height:400px;"></div>

				<button class="ml-auto mr-auto w-full" @click="handlelocation_modal()">취소</button>
        </div>
		<div>
			
		</div>
		

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
				is_show: false,
				is_showlocation: false,
				showmain : 0,
				isShowing : true,
      			IljungPlus : require('../../img/heart.png'),
      			IljungMinus : require('../../img/hearton.png')
			};
		},
		methods: {
			handle_modal() {
                    this.is_show = !this.is_show;
					this.showmain = 1;
                },
			handlelocation_modal() {
                    this.is_showlocation = !this.is_showlocation;
                },
			heart() {
				this.isShowing = !this.isShowing
			}
		},
		created() {
		}
	};
  
  </script>
  <style>
	.modalcss{
            border: 1px solid darkgray;
    padding: 2%;
    width: 84%;
    height: 85%;
    position: absolute;
    background: white;
    top: 10%;
    left: 8%;
    position: fixed;
    border-radius: 38px;
        }
	li {
		list-style: none;
		padding-left: 0px;
		padding-bottom: 1%;
		border-bottom: solid 1px lightgray;
	}

  </style>
