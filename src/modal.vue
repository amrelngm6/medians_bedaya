<template>
    <div class="block w-full">
        <div v-if="showModal" class="fixed top-0 left-0 w-full h-full px-10" style="z-index: 99999; ">
            <div class="absolute mx-auto right-0 left-0 top-0 bottom-0 " @click="hide" style="background: rgba(0, 0, 0, .5);"></div>
            <div class="absolute mx-auto right-0 left-0 top-0 bottom-0 bg-white rounded-lg p-10 my-10 " style=" max-width: 800px; z-index: 9;">
                <iframe style="width: 100%; height: 100%;" height="auto" :src="'https://www.youtube.com/embed/'+videoId" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</template>
<script>
const axios = require('axios').default;

export default {
    computed: {},
    data() {
        return {
            videoId: null,
            showModal: false
        }
    },
    props:['items'],
    created: function() {
    },
    methods: {
        show(videoId)
        {
            this.videoId = videoId;
            this.showModal = true;
        },
        hide()
        {
            this.videoId = null;
            this.showModal = false;
        },
        filter(videoId)
        {
            for (var i = this.items.length - 1; i >= 0; i--) {
                if (this.items[i] == videoId)
                {
                    this.videoId = this.items[i]; 
                }
            }
        }
    }
};
</script>