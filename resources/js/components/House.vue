<template>
	<div>
		<section>
			<div class="w-[33%] media768" style="margin-left: auto; margin-right: auto; ">
				<div id="carouselExampleIndicators" class="carousel slide">
					<div class="carousel-indicators" style="z-index: 0;">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner h-[46vh]">
						<div class="carousel-item active">
						<img :src=idlogin.img1 class="d-block w-100 rounded-[48px]" alt="slide1">
						</div>
						<div class="carousel-item">
						<img :src=idlogin.img2 class="d-block w-100 rounded-[48px]" alt="slide2">
						</div>
						<div class="carousel-item">
						<img :src=idlogin.img3 class="d-block w-100 rounded-[48px]" alt="slide3">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="z-index: 0;">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="z-index: 0;">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</section>
		<!-- 숙소 예약하기 -->
		<section>
			<div class="w-[33%] media768" style="margin-left: auto; margin-right: auto;">
				<div class="pt-[3%]">
					<li>
						<strong class="text-[3vh]">{{idlogin.location}}</strong>
						<div class="w-[3%] ml-auto float-right">	
							<button v-if="verification.Myhome[0] == null"  @click="hearton()"><img  src="../../img/heart.png"></button>
							<button v-else @click="heart(idlogin.id)"><img  src="../../img/hearton.png" ></button>
							<button><img src="../../img/share.png" alt="공유"></button>
						</div>
						<div class="">
							<img src="../../img/location.png" alt="위치" class="w-[3%] float-left">

							<div @click="handlelocation_modal()" style="color: var(--bs-link-color); cursor:pointer;">{{idlogin.location2}}</div>
						</div>
					</li>
					<li> 
						<div>
							<a :href="idlogin.site" style="text-decoration: none;">
								<div class="pt-[7px]" style="color: black;">
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
							</a>

							
						</div>
					</li>
					<li> 
						<div>
							<a :href="idlogin.ressite" style="text-decoration: none;">
								<div class="pt-[7px]" style="color: black;">
									<div class="w-[4%] float-left mr-[16px] mt-[7px] ml-[2px]">
										<img src="../../img/reservation.png" alt="" >
									</div>
									<div class="text-[17px] decoration-black" style="">
										<div>{{idlogin.location}} 예약하기123</div>
									</div>
								</div>
								<div class="w-[4%] mt-[-13px] p-[5px] float-right">
									<img src="../../img/next.svg" alt="" >
								</div>
								<div class="text-[12px] pl-[50px]" style="color: gray">
									※실제 사이트로 이동합니다.
								</div>
							</a>

						</div>
					</li>
					<li>
						<div>최저가 가격 : {{idlogin.price}}</div>
						<div>최고가 가격 : {{idlogin.price2}}</div>
					</li>

					
				</div>
			</div>

		</section>
		<!-- 카테고리 -->
		<section>
			<div class="w-[33%] pb-[1%] pt-[1%] media768" style="margin-left: auto; margin-right: auto; border-bottom: solid 1px darkgray;">
				<button style="" @click="categorybtn(1)" :class="{ fontweight: isBind1 }">숙소위치</button>
				<button style="" @click="categorybtn(2)" :class="{ fontweight: isBind2 }">취소/환불</button>
				<button style="" @click="categorybtn(3)" :class="{ fontweight: isBind3 }">후기</button>
				<button style="" @click="categorybtn(4)" :class="{ fontweight: isBind4 }">후기입력</button>
			</div>

		</section>

		<!-- 지도 -->
		<section v-if="category == 1">
			<div class="w-[33%] media768" style="margin-left: auto; margin-right: auto; ">
				
				<iframe :src="'http://127.0.0.1:8000/home/kakao/'+ idlogin.id" class="w-[68vh] h-[55vh] p-[2%]"></iframe>
				<div class="text-[13px] pb-[18px] pt-[28px]">{{idlogin.location2}}</div>
				<div class="text-[13px] pb-[18px] pt-[28px]">
					<div>인천1호선 부평시장역</div>
					<div>인천1호선 부평시장역</div>
					<div>인천1호선 부평시장역</div>
				</div>
				

			</div>
		</section>

		<!-- 취소 수수료 -->
		<section v-else-if="category == 2" class="h-[59vh]">
			<div class="w-[33%] media768" style="margin-left: auto; margin-right: auto;">
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
			</div>
		</section>

		<!-- 후기 -->
		<section v-else-if="category == 3" class="h-[59vh]">
			<div class="w-[33%] media768" style="margin-left: auto; margin-right: auto;">
				<ul>
					<li class="pt-[3%]" v-for="(test, i ) in Review.Review" :key="i">
						<div>
							<img src="../../img/smiling-face.png" alt="" class="w-[7%] float-left p-[1%]">
						</div>
						<div>
							<div>별점 : {{Review.Review[i].count}}</div>
							<div class="float-left">아이디 : {{Review.Review[i].username}}</div>
							<div>{{Review.Review[i].created}}</div>
						</div>
						<br>
						<div>타이틀 : {{Review.Review[i].title}}</div>
						<div class="pb-[21px]">내용 : {{Review.Review[i].contents}}</div>
					</li>
				</ul>
			</div>
			<div class="w-[33%] media768" style="margin-left: auto; margin-right: auto;" v-if="Review.Review == 0">
				<div class="p-[1%] text-[gray]">
					<div>아직 후기가 없습니다</div>
					<div>후기 작성해주세요~</div>
					
				</div>
					
					
			</div>
		</section>

<!-- 후기입력 -->
		<section v-else-if="category == 4" class="h-[59vh]">
			<div class="w-[33%] p-[3%] mt-[2%] media768" style="margin-left: auto; margin-right: auto; border: solid 1px lightgray; ">
				<div class="mb-6">
					<label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">제목</label>
					<input type="text" id="large-input" v-model="title" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
				</div>
				<div class="mb-6">
					<label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">내용</label>
					<input type="text" id="default-input" v-model="contents" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
				</div>
				<button @click="submitReview">저장</button>
			</div>
		</section>





		<div v-show="is_show" class="modalcss">
                <div class="w-full h-[97%]">
					<div class="w-[80vw] h-[72vh]">
						<iframe :src=idlogin.site width="100%" height="100%"></iframe>
					</div>
				</div>
				<button class="ml-auto mr-auto w-full" @click="handle_modal()">취소</button>
        </div>
		


	</div>
</template>

  <script>
	import Axios from 'axios';

	export default {
		props : {
			idlogin : {
				required: true
			},
			mainid : {
				required: true
			},
			usernamet : {
				required: true
			}
		},
		data() {
			return {
				is_show: true,
				is_alert: false,
				is_showlocation: false,
				showmain : 0,
				isShowing : false,
				verification : [],
				category : 3,
				Review : [],
				title : '',
				contents : '',
				isBind1 : false,
				isBind2 : false,
				isBind3 : false,
				isBind4 : false,
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
			hearton() {
				this.isShowing = !this.isShowing
				Axios
					.post('http://127.0.0.1:8000/api/Myhome', {
						userid: this.mainid,
						houseid: this.idlogin.id,
						location: this.idlogin.location,
						price: this.idlogin.price,
						img1: this.idlogin.img1,
						img2: this.idlogin.img2,
						img3: this.idlogin.img3,
					})
					.then(res => { window.location.reload(); });
			},
			heart(i) {
				this.isShowing = !this.isShowing
					Axios
					.delete(`http://127.0.0.1:8000/api/Myhome/delete2/${i}`)
					.then(res => { window.location.reload(); });
				},
			categorybtn(i){
					this.category = i
					if ( i == 1) {
						this.isBind1 = true;
						this.isBind2 = false;
						this.isBind3 = false;
						this.isBind4 = false;
					}
					else if ( i == 2) {
						this.isBind1 = false;
						this.isBind2 = true;
						this.isBind3 = false;
						this.isBind4 = false;
					}
					else if ( i == 3) {
						this.isBind1 = false;
						this.isBind2 = false;
						this.isBind3 = true;
						this.isBind4 = false;
					}
					else if ( i == 4) {
						this.isBind1 = false;
						this.isBind2 = false;
						this.isBind3 = false;
						this.isBind4 = true;
					}
					
				},
			submitReview() {
				Axios
					.post('http://127.0.0.1:8000/api/review', {
						title: this.title,
						contents: this.contents,
						userid : this.mainid,
						username: this.usernamet,
						houseid : this.idlogin.id,
						housename : this.idlogin.location,
						count: 1
					})
					.then(res => { window.location.reload(); });
			}
		},
		created() {
			Axios
				.get(`http://127.0.0.1:8000/api/verification/${this.idlogin.id}`)
				.then(res => {this.verification = res.data})

			Axios
				.get(`http://127.0.0.1:8000/api/review/${this.idlogin.id}`)
				.then(res => {this.Review = res.data})
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
	.fontweight {
		font-weight: bolder;
	}

	@media screen and (max-width: 768px) {
		.media768 {
			width: 80%;
		}
	}

  </style>
