<template>
    <div>
        <header class="py-2 px-4 flex justify-between items-center border-b-2 bg-white">
            <div class="text-2xl font-semibold text-gray-700">
                <a href="/">{{ brand }}</a>
            </div>

            <div class="hidden md:block flex">
                <a
                    class="p-4 text-gray-800 hover:text-black"
                    v-for="l in filteredLinks"
                    v-text="l.name"
                    :href="l.href"
                ></a>
                <a class="p-4 text-gray-800 hover:text-black"
                   v-if="auth"
                   href="/logout"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>

            <div class="text-gray-700 md:hidden">
                <div @click="isOpen =! isOpen" v-show="!isOpen">
                    <svg class="fill-current w-8 cursor-pointer"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </div>

                <div @click="isOpen =! isOpen" v-show="isOpen">
                    <svg class="fill-current w-8 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                    </svg>
                </div>
            </div>
        </header>

        <div class="bg-white px-4 py-4 select-none border-b md:hidden" v-if="isOpen">
            <a class="block mb-2 font-semibold text-gray-800 py-2 px-3 hover:bg-gray-200 rounded cursor-pointer"
               v-for="l in filteredLinks"
               :href="l.href"
               v-text="l.name"
            ></a>
            <a class="block mb-2 font-semibold text-gray-800 py-2 px-3 hover:bg-gray-200 rounded cursor-pointer"
               href="/logout"
               v-if="auth"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>
        </div>

        <form id="logout-form" action="/logout" method="POST"
              style="display: none;">
            <input type="hidden" name="_token" :value="csrf">
        </form>
    </div>
</template>

<script>
    export default {
        name: 'app-header',
        data() {
            return {
                isOpen: false,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        props: {
            links: Array,
            brand: String,
            auth: Boolean
        },
        computed: {
            filteredLinks() {
                if (!this.auth) {
                    return [
                        ...this.links,
                        {href: '/register', name: 'Register'},
                        {href: '/login', name: 'Login'},
                    ]
                }

                return this.links
            }
        }
    }
</script>
