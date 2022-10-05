<template>
    <div>
      <h1 >Class Bind</h1>
      <button @click="setBind(1)" :class="{ red1: isBind1 }">바인딩</button>
      <button @click="setBind(2)" :class="{ red1: isBind2 }">바인딩</button>
      <button @click="setBind(3)" :class="{ red1: isBind3 }">바인딩</button>
      <button @click="setBind(4)" :class="{ red1: isBind4 }">바인딩</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isBind1: false,
        isBind2: false,
        isBind3: false,
        isBind4: false,
      };
    },
    methods: {
      setBind(i) {
        if( i == 1 ){
            this.isBind1 = !this.isBind1;
        }
        else if (i == 2) {
            this.isBind2 = !this.isBind2;
        }
        else if (i == 3) {
            this.isBind3 = !this.isBind3;
        }
        else if (i == 4) {
            this.isBind4 = !this.isBind4;
        }
        
      },
    },
  };
  </script>
  
  <style>
  .red1 {
    color: red;
  }
  </style>