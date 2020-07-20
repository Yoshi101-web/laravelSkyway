<template>
    <div>
        <h2>音声認識サンプル</h2>
        <button @click="recognitionStart" id="btn" :class="{startUp: isStart}">start</button>
        <button @click="recognitionStop" id="btn" :class="{end: isEnd}">停止</button>
        <!-- <button @click="speechStop" id="btn">stop</button> -->
        <!-- <textarea v-model="text"/> -->
        <div v-for="(content,index) in contents" :key="index">
            <p name="content">{{ content.text }}</p>

            <!-- <textarea v-model="content.text"/> -->
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isStart: false,
            isEnd: true,
            autotext: '',
            recognition: '',
            contents: [],

        }
    },
    methods: {
        recognitionStart() {
            this.isStart = true;
            this.isEnd = false;
            if(this.isStart = true){
                this.recognition.start();
                console.log(this.recognition);
                this.recognition.onresult = (event) => {
                    this.recognition.stop();
                    if(event.results[0].isFinal){
                        this.autotext =  event.results[0][0].transcript
                        console.log(this.autotext);
                        this.contents.push({text: this.autotext});
                    }
                }
                this.recognition.onend = () => { 
                        this.recognition.start();
                        console.log('音声認識サービスが停止されました');
                };
            }
        },
        recognitionStop() {
            this.recognition.onend = null;
            this.recognition.stop();
            this.isStart = false;
            this.isEnd = true;
        }
    },
    watch: {
        contents: function(){
            axios.post('/api/contents', {content: this.autotext})
                .then((response) => {
                    console.log(response.data);
                });
        }
    },
    mounted() {
        this.recognition =  new webkitSpeechRecognition();
        this.recognition.lang = 'ja-JP';
    }
}
</script>

<style>
.startUp{
    background-color: green;
}
.end {
    background-color: blue;
}
</style>