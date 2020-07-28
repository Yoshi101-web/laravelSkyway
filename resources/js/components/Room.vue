<template>
    <div>
        <SkyWay></SkyWay>
        <WebSpeech></WebSpeech>
    </div>
</template>

<script>
import SkyWay from "./SkyWay";
import WebSpeech from "./WebSpeech";
export default {
    components: {
        SkyWay,
        WebSpeech
    },
    mounted() {
        console.log('chat')
    }
}
</script>
