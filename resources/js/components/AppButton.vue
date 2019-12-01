<template>
    <button
        class="font-semibold py-2
            px-4 rounded focus:outline-none focus:shadow-none shadow
            select-none" :class="computedColor + (full ? ' w-full' : '')"
        :type="type">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        name: 'app-button',
        props: {
            type: {
                type: String,
                default: 'submit'
            },
            color: {
                type: String,
                default: 'primary'
            },
            full: {
                type: Boolean,
                default: false
            }
        },
        computed: {
            computedColor() {
                switch (this.color) {
                    case 'primary':
                        return 'bg-indigo-500 hover:bg-indigo-400 text-white';
                    case 'secondary':
                        return 'text-gray-800';
                    case 'danger':
                        return 'bg-red-500 hover:bg-red-400 text-white';
                    case 'warning':
                        return 'bg-yellow-500 hover:bg-yellow-400 text-white';
                    case 'success':
                        return 'bg-teal-500 hover:bg-teal-400 text-white';
                }
            }
        }
    };
</script>
