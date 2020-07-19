<template>
    <div>
        <h2>音声認識サンプル</h2>
        <button @click="speechStart" id="btn">start</button>
        <!-- <button @click="speechStop" id="btn">stop</button> -->
        <!-- <textarea v-model="text"/> -->
        <div v-for="(content,index) in contents" :key="index">
            <p>{{ content }}</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            autotext: '',
            recognition: '',
            contents: [],

        }
    },
    methods: {
        speechStart() {
            this.recognition.start();
            console.log(this.recognition);
            this.recognition.onresult = (event) => {
                this.recognition.stop();
                if(event.results[0].isFinal){
                    this.autotext =  event.results[0][0].transcript
                    // console.log(e);
                    console.log(this.autotext);
                    this.contents.push(this.autotext);
                }
            }
            this.recognition.onend = () => { 
                this.recognition.start() 
            };
        },
    },
    mounted() {
        this.recognition =  new webkitSpeechRecognition();
        this.recognition.lang = 'ja-JP';
    }
}
</script>

<style>

</style>