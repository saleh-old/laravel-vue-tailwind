<template>
    <div class="mb-6">
        <label class="custom-label flex">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                <input class="hidden"
                       :type="type"
                       :name="name"
                       :id="id"
                       :checked="checked"
                >
                <svg class="cursor-pointer hidden w-4 h-4 text-green-600 pointer-events-none"
                     viewBox="0 0 172 172">
                    <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none"
                       font-weight="none" font-size="none" text-anchor="none"
                       style="mix-blend-mode:normal">
                        <path d="M0 172V0h172v172z"/>
                        <path
                            d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                            fill="currentColor" stroke-width="1"/>
                    </g>
                </svg>
            </div>

            <span class="select-none cursor-pointer">
                <slot></slot>
            </span>
        </label>
    </div>
</template>

<script>
    export default {
        name: 'form-checkbox',
        props: {
            id: {
                type: String,
                required: true
            },
            name: {
                type: String,
                required: true
            },
            value: {
                type: String,
            },
            autofocus: {
                type: Boolean,
                default: false
            },
            required: {
                type: Boolean,
                default: false
            },
            type: {
                type: String,
                default: 'checkbox'
            },
            checked: {
                type: Boolean,
                default: false
            }
        }
    };
</script>
