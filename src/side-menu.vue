<template>
    <div class="block w-full overflow-x-auto">
        <ul v-if="showMenu">
            <li  v-for="(menu, i) in menus">
                <a @click="dropList(i)" class="w-full font-thin uppercase flex items-center p-4 my-2 transition-colors duration-200 justify-start text-gray-500 dark:text-gray-200  dark:from-gray-700 dark:to-gray-800 " :class="same_page ? 'hover:text-blue-800 bg-gradient-to-r from-white  text-blue-500  border-blue-500 to-blue-100  border-r-4' : ''" :href="menu.link ? (url + menu.link) : 'javascript:;'">
                    <span class="text-left">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z"></path></svg>
                    </span>
                    <span class="mx-4 text-sm font-normal"> {{menu.title}}  </span>
                </a>
                <ul v-if="menu.sub && checkMenu(i)" class="pb-4" >
                    <li v-for="submenu in menu.sub">
                        <a class="w-full font-thin uppercase flex items-center  px-6 transition-colors duration-200 justify-start text-gray-500 dark:text-gray-200  dark:from-gray-700 dark:to-gray-800" :class="same_page ? 'hover:text-blue-800 bg-gradient-to-r from-white  text-blue-500  border-blue-500 to-blue-100  border-r-4' : ''" :href="url+submenu.link">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z"></path></svg>
                            </span>
                            <span class="mx-4 text-sm font-normal" v-text="submenu.title"> </span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</template>
<script>
const axios = require('axios').default;

export default {
    computed: {},
    data() {
        return {
            showMenu: true,
            activeMenu: 0,
            same_page: false,
            pages: []
        }
    },
    props: ['url','menus', 'samepage'],
    created: function() {
        this.same_page = this.samePage;
        this.pages = this.menus;
    },
    methods: {
        dropList(i=0)
        {
            this.showMenu = false;
            this.pages[i].show_sub = this.pages[i].show_sub ? false : true;
            this.activeMenu = i;
            this.showMenu = true;
            this.checkMenu(i);
        },
        checkMenu(i)
        {
            return this.pages[i].show_sub ? true : false;
        }
    }
};
</script>